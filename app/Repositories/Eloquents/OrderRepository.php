<?php

namespace App\Repositories\Eloquents;

use App\Models\Order;
use App\Models\User;
use App\Repositories\Contracts\OrderInterface;
Use Illuminate\Support\Facades\Auth;

class OrderRepository extends EloquentRepository implements OrderInterface
{
    public function getModel()
    {
        return Order::class;
    }

    public function getOrderFollowUser()
    {
        return User::findOrFail(Auth::user()->id)
            ->orders()
            ->with('books')
            ->get()
            ->sortByDesc('create_at');
    }
}