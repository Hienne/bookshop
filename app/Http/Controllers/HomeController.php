<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Eloquents\AuthorRepository;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $bookRepository;
    protected $authorRepository;

    public function __construct(
        BookRepository $bookRepository, 
        AuthorRepository $authorRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->authorRepository = $authorRepository;
    }

    public function index()
    {
        $books = $this->bookRepository->getBook();
        $authors = $this->authorRepository->getListAuthor();
        $bestSellingBooks = $this->bookRepository->getBestSellingBook();

        return view('front_end.home.index', compact('books', 'authors', 'bestSellingBooks'));
    
    }

    public function getBookOfCategory($id)
    {
        $books = $this->bookRepository->getBookOfCategory($id);

        return view('front_end.product.allBook', compact('books'));
    }

    
    public function changeLanguage($language, Request $request)
    {
        $request->session()->put('language', $language);

        return back();
    }

    public function searchBook(Request $request)
    {
        $keyword = $request->keyword;

        $books = $this->bookRepository->getSearchBook($keyword);

        return view('front_end.home.search', compact(['books', 'keyword']));
    }
}
