<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tags extends Model
{
    use HasFactory;
    public $timestamps = false;

     protected $fillable = [
        'tags_id',
        'tag_name',
        'tag_icon',
        'id',
    ];
}
