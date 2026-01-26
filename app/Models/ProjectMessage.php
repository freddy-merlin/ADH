<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'conversation_id',
        'sender_type',
        'admin_id',
        'user_email',
        'content',
        'is_read',
        'read_at'
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'read_at' => 'datetime'
    ];

    public function conversation()
    {
        return $this->belongsTo(ProjectConversation::class, 'conversation_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
 
    public function attachments()
{
    return $this->hasMany(MessageAttachment::class, 'message_id');
}

    public function markAsRead()
    {
        $this->is_read = true;
        $this->read_at = now();
        $this->save();
    }

    public function getSenderNameAttribute()
    {
        if ($this->sender_type === 'admin') {
            return $this->admin ? $this->admin->name : 'Administrateur';
        }
        
        return 'Vous';
    }
}