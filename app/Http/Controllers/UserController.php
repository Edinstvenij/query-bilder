<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Repository\UserRepository;

class UserController extends Controller
{
    public function __construct(
        protected UserRepository $userRepository
    )
    {

    }

    public function index(): UserCollection
    {
        return new UserCollection($this->userRepository->getAll());
    }

    public function show(int $id): UserResource
    {
        return new UserResource($this->userRepository->getById($id));
    }
}
