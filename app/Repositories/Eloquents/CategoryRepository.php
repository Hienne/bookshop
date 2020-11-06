<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CategoryInterface;

class CategoryRepository extends EloquentRepository implements CategoryInterface
{
    public function getModel()
    {
        return \App\Models\Category::class;
    }

}

