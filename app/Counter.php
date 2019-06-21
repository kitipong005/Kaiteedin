<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    //
    protected $fillable = [
        'DATE','IP',
    ];
    public $timestamps = false;


    public $table = "counter";
}
