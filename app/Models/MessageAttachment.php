<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'filename',
        'original_filename',
        'file_path',
        'file_size',
        'mime_type'
    ];

 
    public function message()
{
    return $this->belongsTo(ProjectMessage::class, 'message_id');
}
}