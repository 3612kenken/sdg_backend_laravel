<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $fillable = [
            
            'id',
            'image',
            'title',
            'subtitle',
            'author',
            'proj_date',
            'link',
            'logo',
            'background',
            'conclusion',
            'cta'
            
    ];
}
