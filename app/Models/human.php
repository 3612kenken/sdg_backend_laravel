<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class human extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'human_id',
        'humans',
        'resource_id',
    ];
}
