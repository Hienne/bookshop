<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\AuthorInterface;
use Illuminate\Support\Facades\App;

class AuthorRepository extends EloquentRepository implements AuthorInterface
{
    const NUMOFAUTHOR = 5;
    
    public function getModel()
    {
        return \App\Models\Author::class;
    }

    public function getListAuthor()
    {
        return $this->_model->take(self::NUMOFAUTHOR)->get();
    }
}