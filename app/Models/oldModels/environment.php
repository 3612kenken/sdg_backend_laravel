<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class environment extends Model
{
     public $timestamps = false;
     protected $fillable = [
        'environment_id',
        'nature',
        'industry',
        'government',
        'id',
    ];
}
