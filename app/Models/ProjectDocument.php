<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocument extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable = [
        'project_request_id', 'filename', 'original_filename', 
        'file_path', 'file_size', 'mime_type'
    ];

    public function projectRequest()
    {
        return $this->belongsTo(ProjectRequest::class);
    }
}