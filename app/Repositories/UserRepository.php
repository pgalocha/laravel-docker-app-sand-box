<?php

// app/Repositories/UserRepository.php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function findUserById($id): ?User
    {
        return User::find($id);
    }

    public function getAllUsers(): Collection
    {
        return User::all();
    }
}
