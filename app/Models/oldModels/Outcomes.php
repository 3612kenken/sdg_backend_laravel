<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outcomes extends Model
{
   public $timestamps = false;

     protected $fillable = [
        'outcome_id',
        'outcome',
        'id'
    ];
}
