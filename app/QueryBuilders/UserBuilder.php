<?php

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class UserBuilder extends Builder
{
    public function getById(int $id): UserBuilder
    {
        return $this->where('id', $id);
    }
}
