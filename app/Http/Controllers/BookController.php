<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\Eloquents\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;
    protected $categoryRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        BookRepository $bookRepository) 
    {
        $this->bookRepository = $bookRepository;
    }

    public function showAllBook()
    {
        $books = $this->bookRepository->paginationBook();

        return view('front_end.product.allBook', compact('books'));
    }

    public function getBookById($id)
    {
        $bookSelected = $this->bookRepository->find($id);
        $bookByAuthor = $this->bookRepository->getBookByAuthor($bookSelected->author_id, $id);
        $commentOfBook = $bookSelected->comments;
        
        return view('front_end.product.detailBook', compact('bookSelected', 'bookByAuthor', 'commentOfBook'));
    }
}
