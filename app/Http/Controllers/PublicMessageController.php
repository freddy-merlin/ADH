<?php

namespace App\Http\Controllers;

use App\Models\ProjectConversation;
use App\Models\ProjectMessage;
use App\Models\MessageAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PublicMessageController extends Controller
{
    public function showAccessForm($conversationUid)
    {
        $conversation = ProjectConversation::where('conversation_uid', $conversationUid)
            ->with('projectRequest')
            ->firstOrFail();

        // Vérifier si l'utilisateur est déjà vérifié via la session
        if (session()->has('verified_conversation_' . $conversationUid)) {
            return redirect()->route('public.messages.show', $conversationUid);
        }

        // Si le code d'accès n'est pas valide, afficher un message d'erreur
        if (!$conversation->isAccessCodeValid()) {
            return view('public.messages.access', compact('conversation'))
                ->withErrors(['access_code' => 'Le code d\'accès a expiré ou n\'est plus valide.']);
        }

        return view('public.messages.access', compact('conversation'));
    }

    public function verifyAccessCode(Request $request, $conversationUid)
    {
        $validator = Validator::make($request->all(), [
            'access_code' => 'required|string|size:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors(['access_code' => 'Code d\'accès invalide.'])
                ->withInput();
        }

        $conversation = ProjectConversation::where('conversation_uid', $conversationUid)
            ->firstOrFail();

        // Vérifier si le code correspond (insensible à la casse)
        if (strtoupper($conversation->access_code) === strtoupper($request->access_code)) {
            // Créer une session valide 24 heures
            session(['verified_conversation_' . $conversationUid => true]);
            session()->put('verified_at_' . $conversationUid, now());
            
            return redirect()->route('public.messages.show', $conversationUid);
        }

        return redirect()->back()
            ->withErrors(['access_code' => 'Code d\'accès incorrect.'])
            ->withInput();
    }

    public function show($conversationUid)
    {
        // Vérifier la session avec une clé unique
        if (!session()->has('verified_conversation_' . $conversationUid)) {
            return redirect()->route('public.messages.access', $conversationUid);
        }

        // Vérifier que la session n'est pas expirée (24 heures)
        $verifiedAt = session('verified_at_' . $conversationUid);
        if ($verifiedAt && now()->diffInHours($verifiedAt) > 24) {
            session()->forget('verified_conversation_' . $conversationUid);
            session()->forget('verified_at_' . $conversationUid);
            return redirect()->route('public.messages.access', $conversationUid)
                ->withErrors(['access_code' => 'Votre session a expiré. Veuillez entrer à nouveau le code.']);
        }

        $conversation = ProjectConversation::where('conversation_uid', $conversationUid)
            ->with([
                'projectRequest',
                'messages' => function($query) {
                    $query->orderBy('created_at', 'asc');
                },
                'messages.attachments'
            ])
            ->firstOrFail();

        // Marquer les messages de l'admin comme lus
        $conversation->messages()
            ->where('sender_type', 'admin')
            ->where('is_read', false)
            ->update(['is_read' => true, 'read_at' => now()]);

        return view('public.messages.show', compact('conversation'));
    }

    public function reply(Request $request, $conversationUid)
    {
        // Vérifier la session
        if (!session()->has('verified_conversation_' . $conversationUid)) {
            return response()->json(['error' => 'Non autorisé. Session expirée.'], 403);
        }

        $validator = Validator::make($request->all(), [
            'content' => 'required|string|min:2|max:5000',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $conversation = ProjectConversation::where('conversation_uid', $conversationUid)
            ->with('projectRequest')
            ->firstOrFail();

        $message = ProjectMessage::create([
            'conversation_id' => $conversation->id,
            'sender_type' => 'user',
            'user_email' => $conversation->projectRequest->email,
            'content' => $request->content,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Message envoyé avec succès',
            'data' => [
                'id' => $message->id,
                'content' => $message->content,
                'created_at' => $message->created_at->format('d/m/Y H:i'),
            ]
        ]);
    }
}