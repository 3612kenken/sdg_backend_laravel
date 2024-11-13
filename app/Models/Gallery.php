<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'gallery_id',
        'gallery_image',
        'gallery_caption',
        'gallery_alt',
        'id'
    ];
}
