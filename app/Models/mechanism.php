<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mechanism extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'mechanism_id',
        'planning',
        'design',
        'installation',
        'testing',
        'monitoring',
        'id',
    ];
}
