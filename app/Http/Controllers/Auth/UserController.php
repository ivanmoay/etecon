<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function users()
    {
        return view('auth.users', [
            'users' => User::all()
        ]);
    }

    public function activate(User $user)
    {
        User::where('id', $user->id)->update([
            'activated' => 1
        ]);

        return redirect('/users');
    }

    public function deactivate(User $user)
    {
        User::where('id', $user->id)->update([
            'activated' => 0
        ]);

        return redirect('/users');
    }

    public function promote(User $user)
    {
        User::where('id', $user->id)->update([
            'user_type' => 2
        ]);

        return redirect('/users');
    }

    public function demote(User $user)
    {
        User::where('id', $user->id)->update([
            'user_type' => 1
        ]);

        return redirect('/users');
    }
}
