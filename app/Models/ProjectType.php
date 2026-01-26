<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectRequestType extends Pivot
{
    protected $table = 'project_request_type';
   // public $timestamps = false;
    
    protected $fillable = [
        'project_request_id',
        'project_type_id',
        'type' 
    ];

    public function projectRequests()
{
    return $this->belongsToMany(ProjectRequest::class, 'project_request_type', 'project_type_id', 'project_request_id');
}




}