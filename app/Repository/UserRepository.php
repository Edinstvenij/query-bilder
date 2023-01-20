<?php

namespace App\Repository;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\User;

class UserRepository
{
    public function getAll(): LengthAwarePaginator
    {
        return User::query()
            ->paginate(10);
    }

    public function getById(int $id)
    {
        return User::query()
            ->getById($id)
            ->firstOrFail();
    }
}
