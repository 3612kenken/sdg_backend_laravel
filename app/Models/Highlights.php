<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Highlights extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'highlight_id',
        'highlight',
        'id'
    ];
}
