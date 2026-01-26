<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFeature extends Model
{
    use HasFactory;
   // public $timestamps = false; 

    protected $fillable = ['feature'];  

public function projectRequests()
{
    return $this->belongsToMany(ProjectRequest::class, 'project_request_feature', 'project_feature_id', 'project_request_id');
}
    
}