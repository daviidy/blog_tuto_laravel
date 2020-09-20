<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'chapo',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
