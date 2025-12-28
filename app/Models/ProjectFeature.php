<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFeature extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable = ['project_request_id', 'feature'];

    public function projectRequest()
    {
        return $this->belongsTo(ProjectRequest::class);
    }
}
