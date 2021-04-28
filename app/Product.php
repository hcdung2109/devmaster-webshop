<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // DN quan he dl
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
