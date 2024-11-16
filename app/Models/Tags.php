<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tags extends Model
{
    use HasFactory;

     protected $fillable = [
        'projects_id',
        'name',
        'icons',
    ];

    public function project(){
        return $this->belongsTo(Project::class, 'projects_id', 'id');
    }
}
