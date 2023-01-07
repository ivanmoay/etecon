<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('user.profile', [
            'user' => User::findOrFail(auth()->user()->id),
            'companies' => Company::orderBy('company_name')->get()
        ]);
    }

    public function update(Request $request, User $user)
    {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'credentials' => 'required|max:255'
        ]);

        $request->name = ucwords($request->name);

        User::where('id', $user->id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'credentials' => $request->credentials,
            'company_id' => $request->company_id
        ]);       

        return redirect('/my_profile');
    }

}
