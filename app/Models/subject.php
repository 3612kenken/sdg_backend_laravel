<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'subject_id',
        'initiator',
        'leader',
        'id',
    ];
}
