<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id','name','tel','email','type','pro','prop','topic','slug','price','address','road','address_name','district','amphoe','province','zipcode','floor','size','bedroom','bathroom','garage','nearplace','description','image','exp',
    ];
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
