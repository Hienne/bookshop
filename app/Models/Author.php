<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    /*
    *
    *
    *
    relationship 1-n (1 Author - n Book)
    *
    *
    *
    */

    public function books() {
        return $this->hasMany('App\Models\Book');
    }

    
}
