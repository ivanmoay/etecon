<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile', [
            'user' => User::findOrFail(auth()->user()->id)
        ]);
    }

    public function update(Request $request, User $user)
    {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'credentials' => 'required|max:255'
        ]);

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'credentials' => $request->credentials,
        ]);       

        return redirect('/my_profile');
    }

}
