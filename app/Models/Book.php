<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    static $limit = 12;

    public $timestamps = true;

    /*
    *
    *
    relationship 1-n (1 Category - n Book)
    relationship 1-n (1 Author - n Book)
    *
    *
    */

    public function category() 
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function author() 
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function company() 
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function orders() 
    {
        return $this->belongsToMany('App\Models\Order', 'order_details')->withPivot('price', 'quality');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
