<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty) 
    {
        $newItem = ['qty' => 0, 'price' => 0, 'item' => $item];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $newItem = $this->items[$id];
            }
        }

        $newItem['qty'] += $qty;
        $newItem['price'] = $item->price * $newItem['qty'];
        $this->items[$id] = $newItem;
        $this->totalQty += $qty;
        $this->totalPrice += $newItem['price'];
    }

    public function delete($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]); 
    }

    public function update($id, $qty)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];

        $this->items[$id]['qty'] = $qty;
        $this->items[$id]['price'] = $this->items[$id]['item']->price * $qty;
        
        $this->totalQty += $this->items[$id]['qty'];
        $this->totalPrice += $this->items[$id]['price'];
    }

}