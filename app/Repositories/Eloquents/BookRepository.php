<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\BookInterface;
use Illuminate\Http\Request;

class BookRepository extends EloquentRepository implements BookInterface
{
    const PAGINATE = 24;
    const NUMBEROFBOOK = 6;

    public function getModel()
    {
        return \App\Models\Book::class;
    }

    public function paginationBook()
    {
        return $this->_model->paginate(self::PAGINATE);
    }

    public function getBook()
    {
        return $this->_model->take(6)->get();
    }

    public function getBookOfCategory($id)
    {
        return $this->_model->where('category_id', $id)->paginate(self::PAGINATE);
    }
}