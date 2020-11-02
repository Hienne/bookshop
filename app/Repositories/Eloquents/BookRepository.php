<?php

namespace App\Repositories\Eloquents;

use Illuminate\Http\Request;

class BookRepository extends EloquentRepository
{
    protected $bookRepository;

    public function getModel()
    {
        return \App\Models\Book::class;
    }


}