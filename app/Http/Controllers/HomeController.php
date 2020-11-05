<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Eloquents\AuthorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('front_end.home.index', compact('books', 'authors'));
    
    }

    public function search()
    {
        $keyword = $_GET['keyword'];

        $products = $this->productRepository->getSearchProduct($keyword);

        return view('frontend.home.search', compact(['products', 'keyword']));
    }
}
