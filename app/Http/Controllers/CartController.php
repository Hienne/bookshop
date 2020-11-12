<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Eloquents\CartRepository;
use Illuminate\Contracts\Session\Session as SessionSession;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Session;

class CartController extends Controller
{
    protected $cartRepository;
    protected $bookRepository;

    public function __construct(
        CartRepository $cartRepository,
        BookRepository $bookRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->bookRepository = $bookRepository;
    }

    public function index() 
    {
        $cart = Session::has('cart') ? Session::get('cart') : null;
        if($cart !== null) {
            $books = $cart->items;
            $totalQty = $cart->totalQty;
            $totalPri = $cart->totalPrice;
        }
        else {
            $books = null;
            $totalQty = null;
            $totalPri = null;
        }
        
        // dd($books);
        return view('front_end.cart.index', compact('books', 'totalQty', 'totalPri'));
    }

    public function addToCart(Request $request)
    {
        $book = $this->bookRepository->find($request->bookId);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($book, $book->id, $request->qty);

        $request->session()->put('cart', $cart);
        return back();
    }

    public function deleteOnCart($bookId) 
    {
        dd($bookId);
        // $oldCart = Session::has('cart') ? Session::get('cart') :null;
        // $newCart = new Cart($oldCart);
        // $newCart->delete($bookId);
        
        // if(Count($newCart->items) > 0) {
        //     Session::put('cart', $newCart);
        // }
        // else {
        //     Session::forget('cart');
        // }

        // return back();
    }
}
