<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'topic', 'slug','main','image','view',
    ];

    protected $table = 'article';
}
