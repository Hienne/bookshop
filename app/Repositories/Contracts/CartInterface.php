<?php

namespace App\Repositories\Contracts;

interface CartInterface
{
    public function cartContent();

    public function addCart($request, $book);

    public function updateItem($request);

    public function removeItem($rowId);

    public function checkout();
    
}