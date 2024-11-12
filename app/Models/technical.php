<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class technical extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'technical_id',
        'technicals',
        'resource_id',
    ];
}
