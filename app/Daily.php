<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    //
    protected $fillable = [
        'DATE','NUM',
    ];
    public $timestamps = false;

    public $table = "daily";
}
