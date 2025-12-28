<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable = ['project_request_id', 'type'];

    public function projectRequest()
    {
        return $this->belongsTo(ProjectRequest::class);
    }
}