<?php

namespace App\Http\Controllers\Manager;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class UserController extends Controller
{
    public function __construct() {
        $this->authorizeResource(User::class, 'user');
    }

    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::latest()->paginate()
        ]);
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        $user = new User($this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'role' => new Enum(UserRole::class),
            'password' => 'required|confirmed'
        ]));

        $user->fill([
            'password' => Hash::make($request->password),
            'role' => $request->role
        ])->save();

        return to_route('manager.user.show', $user);
    }

    public function show(User $user)
    {
        return view('dashboard.user.show', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {
        $user = new User($this->validate($request, [
            'name' => 'required|string',
            'role' => new Enum(UserRole::class),
            'password' => 'nullable|confirmed'
        ]));

        $user->fill([
            'password' => Hash::make($request->password),
            'role' => $request->role
        ])->save();

        return to_route('manager.user.show', $user);
    }

    public function delete()
    {
        
    }
}
