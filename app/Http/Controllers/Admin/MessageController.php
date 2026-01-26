<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectConversation;
use App\Models\ProjectMessage;
use App\Models\MessageAttachment;
use App\Models\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        $conversations = ProjectConversation::with(['projectRequest', 'latestMessage'])
            ->orderBy('updated_at', 'desc')
            ->paginate(20);

        return view('admin.messages.index', compact('conversations'));
    }

    public function show($id)
    {
        $conversation = ProjectConversation::with([
            'projectRequest',
            'messages' => function($query) {
                $query->orderBy('created_at', 'asc');
            },
            'messages.admin',
            'messages.attachments'
        ])->findOrFail($id);

        // Marquer les messages de l'utilisateur comme lus
        $conversation->messages()
            ->where('sender_type', 'user')
            ->where('is_read', false)
            ->update(['is_read' => true, 'read_at' => now()]);

        return view('admin.messages.show', compact('conversation'));
    }

    public function create($projectRequestId)
    {
        $projectRequest = ProjectRequest::with('conversation')->findOrFail($projectRequestId);
        
         
        if ($projectRequest->conversation) {
            return redirect()->route('admin.messages.show', $projectRequest->conversation->id);
        }

        return view('admin.messages.create', compact('projectRequest'));
    }

    public function store(Request $request, $projectRequestId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
            'attachments.*' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:5120', // 5MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $projectRequest = ProjectRequest::findOrFail($projectRequestId);

        // Créer ou récupérer la conversation
        $conversation = $projectRequest->conversation ?? new ProjectConversation();
        
        if (!$conversation->exists) {
            $conversation->project_request_id = $projectRequest->id;
            $conversation->generateConversationUid();
            $conversation->save();
        }

        // Générer un code d'accès si c'est le premier message
        $accessCode = null;
        if (!$conversation->access_code || !$conversation->isAccessCodeValid()) {
            $accessCode = $conversation->generateAccessCode();
        }

        // Créer le message
        $message = ProjectMessage::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'admin',
            'admin_id' => auth()->id(),
            'content' => $request->content,
        ]);

        // Gérer les pièces jointes
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $originalFilename = $file->getClientOriginalName();
                $filename = time() . '_' . uniqid() . '_' . $originalFilename;
                $filePath = $file->storeAs('message_attachments', $filename, 'public');

                MessageAttachment::create([
                    'message_id' => $message->id,
                    'filename' => $filename,
                    'original_filename' => $originalFilename,
                    'file_path' => $filePath,
                    'file_size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                ]);
            }
        }

        // Envoyer un email à l'utilisateur avec le lien
        $this->sendMessageNotification($projectRequest, $conversation, $accessCode);

        return redirect()->route('admin.messages.show', $conversation->id)
            ->with('success', 'Message envoyé avec succès. Un email a été envoyé à l\'utilisateur.');
    }

    public function reply(Request $request, $conversationId)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
            'attachments.*' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:5120',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $conversation = ProjectConversation::with('projectRequest')->findOrFail($conversationId);

        $message = ProjectMessage::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'admin',
            'admin_id' => auth()->id(),
            'content' => $request->content,
        ]);

        // Gérer les pièces jointes
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $originalFilename = $file->getClientOriginalName();
                $filename = time() . '_' . uniqid() . '_' . $originalFilename;
                $filePath = $file->storeAs('message_attachments', $filename, 'public');

                MessageAttachment::create([
                    'message_id' => $message->id,
                    'filename' => $filename,
                    'original_filename' => $originalFilename,
                    'file_path' => $filePath,
                    'file_size' => $file->getSize(),
                    'mime_type' => $file->getMimeType(),
                ]);
            }
        }

        // Envoyer une notification par email
        $this->sendReplyNotification($conversation->projectRequest, $conversation);

        return redirect()->route('admin.messages.show', $conversation->id)
            ->with('success', 'Réponse envoyée avec succès.');
    }

    private function sendMessageNotification(ProjectRequest $projectRequest, ProjectConversation $conversation, $accessCode = null)
    {
        $data = [
            'projectRequest' => $projectRequest,
            'conversation' => $conversation,
            'accessCode' => $accessCode,
        ];

        Mail::send('emails.message_notification', $data, function ($message) use ($projectRequest) {
            $message->to($projectRequest->email)
                    ->subject('Nouveau message concernant votre demande de projet ADH Group');
        });
    }

    private function sendReplyNotification(ProjectRequest $projectRequest, ProjectConversation $conversation)
    {
        $data = [
            'projectRequest' => $projectRequest,
            'conversation' => $conversation,
        ];

        Mail::send('emails.message_reply_notification', $data, function ($message) use ($projectRequest) {
            $message->to($projectRequest->email)
                    ->subject('Nouvelle réponse concernant votre demande de projet ADH Group');
        });
    }
}