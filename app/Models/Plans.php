<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'plan_id',
        'plan',
        'id'
    ];
}
