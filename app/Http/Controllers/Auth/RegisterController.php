<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => 'required|confirmed',
            'phone_number' => 'required|max:255',
            'credentials' => 'required|max:255'
        ]);
        //store
        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'credentials' => $request->credentials,
            'user_type' => 1,
            'activated' => 0,
            'company_id' => 0,
        ]);
        //sign in
        auth()->attempt(
            $request->only('email','password')
        );

        return redirect('/');
    }
}
