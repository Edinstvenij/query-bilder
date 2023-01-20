<?php

namespace App\Presenter;

use App\Models\User;

class UserPresenter
{
    public function __construct(
        protected User $user
    )
    {

    }

    public function __get($key)
    {
        if (method_exists($this, $key)) return $this->{$key}();

        return $this->$key;
    }

    public function fullName(): string
    {
        $names = [$this->user->first_name, $this->user->last_name, $this->user->middle_name];

        return implode(' ', $names);
    }
}
