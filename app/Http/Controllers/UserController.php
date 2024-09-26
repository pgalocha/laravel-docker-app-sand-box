<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepository|null $userRepos = null;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepos = $userRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = new User();
        $user->name = 'John Doe';  // Ensure you're providing the required fields
        $user->email = 'john@example.com';
        $user->password = bcrypt('secret');  // Hash the password for security

        $allUsers = $this->userRepos->getAllUsers();

        /** @var User $user */
        foreach ($allUsers as $user) {
            dd($user->delete());
        }

        return view('users.index', compact('allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
