<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamps = true;

    protected $fillable = [
        'book_id',
        'user_id',
        'title',
        'content',
        'rate',
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
}
