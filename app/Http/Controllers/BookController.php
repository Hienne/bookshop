<?php

namespace App\Http\Controllers;

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
        $bookInPage = 18;
        $books = $this->bookRepository->paginationBook($bookInPage);

        return view('front_end.product.allBook', compact('books'));
    }
}
