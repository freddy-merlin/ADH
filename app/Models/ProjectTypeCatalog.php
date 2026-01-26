<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTypeCatalog extends Model
{
    use HasFactory;
   // public $timestamps = false; 

    protected $table = 'project_type_catalog';
    protected $fillable = ['type_key', 'label', 'order'];

    public function projectRequests()
    {
        return $this->belongsToMany(ProjectRequest::class, 'project_request_types', 'project_type_id', 'project_request_id');
    }
}