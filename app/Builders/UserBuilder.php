<?php

namespace App\Builders;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use \Illuminate\Database\Eloquent\Builder;

class UserBuilder extends Builder
{

    /**
     * @return LengthAwarePaginator
     */
    public function index()
    {
        return $this->paginate(5);
    }

    /**
     * @param array $request
     * @return void
     */
    public function customCreate(array $request): void
    {
        User::create($request);
    }

    /**
     * @param array $request
     * @param User $user
     * @return void
     */
    public function customUpdate(array $request, User $user): void
    {
        $user->update($request);
    }

    /**
     * @param User $user
     * @return void
     */
    public function coustomDestroy(User $user): void
    {
        $user->delete();
    }
}
