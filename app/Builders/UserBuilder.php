<?php

namespace App\Builders;


use App\Models\User;
use Illuminate\Database\Query\Builder;

class UserBuilder extends \Illuminate\Database\Eloquent\Builder
{
    public function index(): self
    {
        return $this;
    }

}
