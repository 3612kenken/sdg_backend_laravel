<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'author',
        'proj_date',
        'conclusion',
        'cta'
    ];

    public function tag()
    {
        return $this->hasOne(Tags::class, 'projects_id', 'id');
    }

    public function content()
    {
        return $this->hasOne(Content::class, 'projects_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'projects_id', 'id');
    }
}
