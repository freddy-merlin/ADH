<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFeatureCatalog extends Model
{
    use HasFactory;
   // public $timestamps = false; 

    protected $table = 'project_feature_catalog';
    protected $fillable = ['feature_key', 'label', 'order'];

    public function projectRequests()
    {
        return $this->belongsToMany(ProjectRequest::class, 'project_request_features', 'project_feature_id', 'project_request_id');
    }
}