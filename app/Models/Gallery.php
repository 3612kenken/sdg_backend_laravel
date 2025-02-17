<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

     protected $fillable = [
        'projects_id',
        'caption',
        'alt'
    ];

    public function project(){
        return $this->belongsTo(Project::class, 'projects_id', 'id');
    }
}
