<?php

namespace App\Models;

use App\Presenter\UserPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Eloquent\HasPublished;
use App\QueryBuilders\UserBuilder;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use HasPublished;

    protected $table = 'users';

    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'phone', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getDetailAttribute(): UserPresenter
    {
        return new UserPresenter($this);
    }

    public function newEloquentBuilder($query): UserBuilder
    {
        return new UserBuilder($query);
    }
}
