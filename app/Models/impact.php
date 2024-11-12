<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class impact extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'impact_id',
        'impact',
        'id',
    ];
}
