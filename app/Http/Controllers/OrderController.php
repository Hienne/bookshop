<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->getOrderFollowUser();
       
        return view('front_end.order.index', compact(['orders']));
    }
}
