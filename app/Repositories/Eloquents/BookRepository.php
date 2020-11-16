<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\BookInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getSearchBook($keyword)
    {
        return $this->_model->where('book_name', 'LIKE', '%' .$keyword .'%')
                    ->paginate(self::PAGINATE);
    }

    public function getBookByAuthor($authorId, $currentBookId)
    {
        //su dung collection / eloquent
        return $this->_model->all()->except([$currentBookId])->where('author_id', $authorId);
    }

    public function getBestSellingBook()
    {

        return $this->_model->join('order_details', 'books.id', '=', 'order_details.book_id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->leftJoin('comments', 'books.id', '=', 'comments.book_id')
            ->select( 'authors.author_name', 'books.book_name', 'books.book_image', 'books.price',
                        'order_details.book_id', DB::raw('sum(quality) as quality'),
                        DB::raw('count(comments.book_id) as numOfCom'), DB::raw('avg(comments.rate) as rate') 
                        )
            ->groupBy('order_details.book_id', 'books.book_image','books.book_name', 
                        'authors.author_name', 'books.price', 'comments.id', 'comments.book_id')
            ->orderBy('quality', 'desc')
            ->take(6)
            ->get();
    }
}