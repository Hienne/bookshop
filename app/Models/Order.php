<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public $timestamps = true;

    public function payment() 
    {
        return $this->hasOne('App\Models\Payment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function books()
    {
        return $this->belongsToMany('App\Models\Book', 'order_details');
    }
}
