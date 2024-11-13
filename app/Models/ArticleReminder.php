<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleReminder extends Model
{
    public $timestamps = false;
    protected $fillable = [

            'add_reminder_id',
            'reminder',
            'article_id',

    ];
}
