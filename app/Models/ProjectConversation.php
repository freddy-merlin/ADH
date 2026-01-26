<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectConversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_request_id',
        'conversation_uid',
        'access_code',
        'is_active',
        'access_code_expires_at'
    ];

    protected $casts = [
        'access_code_expires_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    public function projectRequest()
    {
        return $this->belongsTo(ProjectRequest::class);
    }

    public function messages()
    {
        return $this->hasMany(ProjectMessage::class, 'conversation_id')->orderBy('created_at', 'asc');
    }

    public function latestMessage()
    {
        return $this->hasOne(ProjectMessage::class, 'conversation_id')->latest();
    }

    public function unreadMessagesCount()
    {
        return $this->messages()->where('is_read', false)->count();
    }

    public function userUnreadMessagesCount()
    {
        return $this->messages()->where('sender_type', 'admin')->where('is_read', false)->count();
    }

    public function adminUnreadMessagesCount()
    {
        return $this->messages()->where('sender_type', 'user')->where('is_read', false)->count();
    }

    public function isAccessCodeValid()
    {
        if (!$this->access_code) {
            return false;
        }

        if ($this->access_code_expires_at && $this->access_code_expires_at->isPast()) {
            return false;
        }

        return true;
    }

    public function generateAccessCode()
    {
        // Générer un code alphanumérique de 6 caractères
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        $this->access_code = $code;
        $this->access_code_expires_at = now()->addDays(365);  
        $this->save();

        return $code;
    }

    public function generateConversationUid()
    {
        // Générer un UID unique
        do {
            $uid = substr(md5(uniqid() . time()), 0, 16);
        } while (self::where('conversation_uid', $uid)->exists());

        $this->conversation_uid = $uid;
        return $uid;
    }
}