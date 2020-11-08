<?php

namespace App\Repositories\Contracts;

interface BookInterface
{
    public function paginationBook();

    public function getBook();

    public function getBookOfCategory($id);

    public function getBestSellingBook();

    public function getBookByAuthor($authorId, $currentBookId);
}