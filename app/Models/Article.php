<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
  
            'article_id',
            'headline',
            'sub_headline',
            'by_line',
            'lead_paragraph',
            'background_information',
            'highlights',
            'impact',
            'future_plans',
            'conclusion',
            'call_to_action',
            'reminder',
    ];
}
