<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\Eloquents\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        // $books = $this->bookRepository->getAll();
        $books = Book::all();

        return view('front_end.home.index', compact('books', $books));
    
    }

    public function search()
    {
        $keyword = $_GET['keyword'];

        $products = $this->productRepository->getSearchProduct($keyword);

        return view('frontend.home.search', compact(['products', 'keyword']));
    }

    public function userLogout() 
    {
        Auth::logout();
        return redirect('/');
    }
}
