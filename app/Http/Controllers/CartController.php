<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Repositories\Eloquents\BookRepository;
use App\Repositories\Eloquents\CartRepository;
use Illuminate\Contracts\Session\Session as SessionSession;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // dd($cart);
        if($cart !== null) {
            $books = $cart->items;
            $totalQty = $cart->totalQty;
            $totalPri = $cart->totalPrice;
        }
        else {
            $books = [];
            $totalQty = 0;
            $totalPri = 0;
        }
        
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
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->delete($bookId);
        
        if(Count($newCart->items) > 0) {
            Session::put('cart', $newCart);
        }
        else {
            Session::forget('cart');
        }

        return back();
    }

    public function updateOnCart(Request $request)
    {
        // dd($request);
        $bookId = $request->bookId;
        $qty = $request->qty;

        $cart = Session::get('cart');
        $cart->update($bookId, $qty);
        Session::put('cart', $cart);
        
        return back();
    }

    public function checkout()
    {
        $user = Auth::user();
        
        $order = $user->orders()->create([
            'order_status' => Order::PENDING,
            'shipping_address' => $user->address,
            'phoneReceiver' => $user->phone,
            'nameReceiver' => $user->name,
            'shipping_fee' => 30000
        ]);

        foreach(Session::get('cart')->items as $book) {
            $order->books()->attach($book['item']->id, [
                'price' => $book['price'],
                'quality' => $book['qty'],
            ]);
        }

        Session::forget('cart');
        
        return redirect()->route('order');
    }
}
