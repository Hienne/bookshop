<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CommentInterface;

class CommentRepository extends EloquentRepository implements CommentInterface
{
    public function getModel()
    {
        return \App\Models\Comment::class;
    }

    public function createComment($comment)
    {
        return $this->_model->create($comment);
    }
}