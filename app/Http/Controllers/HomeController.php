<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Eloquents\AuthorRepository;
use Illuminate\Http\Request;
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

    // public function test()
    // {

    //     $books = Book::join('order_details', 'books.id', '=', 'order_details.book_id')
    //         ->join('authors', 'books.author_id', '=', 'authors.id')
    //         ->join('comments', 'books.id', '=', 'comments.book_id')
    //         ->select( 'authors.author_name', 'books.book_name', 'books.book_image', 'books.price',
    //                     'order_details.book_id', DB::raw('sum(quality) as quality'),
    //                     DB::raw('count(comments.book_id) as numOfCom'), DB::raw('avg(comments.rate) as rate') 
    //                     )
    //         ->groupBy('order_details.book_id', 'books.book_image','books.book_name', 
    //                     'authors.author_name', 'books.price', 'comments.id', 'comments.book_id')
    //         ->orderBy('quality', 'desc')
    //         ->take(6)
    //         ->get();

    //     foreach($books as $book)
    //     {
    //         echo $book->book_id;
    //         echo ' / ';
    //         echo $book->numOfCom;
    //         echo '/';
    //         echo $book->rate;
    //         echo '/';
    //         echo $book->book_name;
    //         echo '/';
    //         echo $book->quality;
    //         echo '<br>';
    //     }
    // }

    public function search()
    {
        $keyword = $_GET['keyword'];

        $products = $this->productRepository->getSearchProduct($keyword);

        return view('frontend.home.search', compact(['products', 'keyword']));
    }
}
