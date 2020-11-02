<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookRepository $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    public function showAllBook()
    {
        
    }
}
