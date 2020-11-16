<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CartInterface;

class CartRepository implements CartInterface
{
    public function cartContent()
    {
        return Cart::content();
    }

    public function addCart($request, $book)
    {
        return Cart::add(
            $book->id,
            $book->book_name,
            $book->price,
            (int)$request->qty,
            [
                'image' => $book->book_image,
                'author_name' => $book->author->author_name
            ]
        );
    }

    public function updateItem($request)
    {

    }

    public function removeItem($rowId)
    {

    }

    public function checkout()
    {

    }
}