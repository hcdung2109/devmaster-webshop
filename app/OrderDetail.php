<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_detail"; // chi dinh ten CSDL

    public $timestamps = false;
}
