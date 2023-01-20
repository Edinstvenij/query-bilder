<?php

namespace App\Builders;

use \Illuminate\Database\Eloquent\Builder;

class UserBuilder extends Builder
{

    /**
     * @return $this
     */
    public function index(): self
    {
        return $this;
    }

}
