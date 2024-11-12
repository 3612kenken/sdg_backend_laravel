<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resources extends Model
{
   public $timestamps = false;

     protected $fillable = [
        'resource_id',
        'id',
    ];
}
