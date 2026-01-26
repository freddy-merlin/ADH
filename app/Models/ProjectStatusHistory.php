<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatusHistory extends Model
{
    use HasFactory;
   // public $timestamps = false; 
   protected $table = 'project_status_history';
    protected $fillable = [
        'project_request_id', 'ancien_statut', 'nouveau_statut',
        'commentaire', 'changed_by'
    ];

    public function projectRequest()
    {
        return $this->belongsTo(ProjectRequest::class);
    }
}
