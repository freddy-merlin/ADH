<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    use HasFactory;
  //  public $timestamps = false; 

    protected $fillable = [
        'prenom', 'nom', 'organisation', 'email', 'telephone', 'role',
        'type_autre', 'probleme', 'objectifs', 'cible', 'autres_besoins',
        'delais', 'budget', 'urgence', 'statut', 'ip_address', 'user_agent'
    ];

   
    public function types()
    {
        return $this->belongsToMany(ProjectTypeCatalog::class, 'project_request_types', 'project_request_id', 'project_type_id')
                    ->withPivot('custom_value')
                    ->withTimestamps();
    }

     
    public function features()
    {
        return $this->belongsToMany(ProjectFeatureCatalog::class, 'project_request_features', 'project_request_id', 'project_feature_id')
                    ->withPivot('custom_value')
                    ->withTimestamps();
    }

    public function documents()
    {
        return $this->hasMany(ProjectDocument::class);
    }

    public function statusHistories()
    {
        return $this->hasMany(ProjectStatusHistory::class, 'project_request_id')->orderBy('created_at', 'desc');
    }

     public function conversation()
    {
        return $this->hasOne(ProjectConversation::class);
    }
}