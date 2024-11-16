<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'projects_id',
        'background',
        'highlights',
        'impact',
        'outcomes',
        'plans'
    ];

    public function project(){
        return $this->belongsTo(Project::class, 'projects_id', 'id');
    }
}
