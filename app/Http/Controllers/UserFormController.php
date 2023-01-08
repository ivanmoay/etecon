<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use App\Models\UserForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_forms(User $user)
    {
        $user_forms = UserForm::where('user_id', $user->id)->get();

        $activeForms = DB::table('user_forms')->select('form_id')->where('user_id', $user->id);
 
        $forms = DB::table('forms')
                    ->whereNotIn('id', $activeForms)
                    ->get();         

        return view('user_forms.index', [
            'user' => $user,
            'user_forms' => $user_forms,
            'forms' => $forms
        ]);
    }

    public function my_forms(User $user)
    {
        if($user->id != auth()->user()->id)
        {
            abort(403, 'Unauthorized action.');
        }

        $user_forms = UserForm::where('user_id', $user->id)->orderBy('form_id', 'asc')->get();

        return view('my_forms.index', [
            'user_forms' => $user_forms
        ]);
        // $user_forms = UserForm::where('user_id', $user->id)->get();

        // $activeForms = DB::table('user_forms')->select('form_id')->where('user_id', $user->id);
 
        // $forms = DB::table('forms')
        //             ->whereNotIn('id', $activeForms)
        //             ->get();         

        // return view('user_forms.index', [
        //     'user' => $user,
        //     'user_forms' => $user_forms,
        //     'forms' => $forms
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $formFields = $request->validate([
            'form_id' => 'required'
        ]);        

        $formFields['form_id'] = $request->form_id;
        $formFields['user_id'] = $user->id;

        UserForm::create($formFields);

        return redirect('/user_forms/'.$user->id)->with('message', 'Form added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function show(UserForm $userForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function edit(UserForm $userForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserForm $userForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserForm $userForm)
    {
        //TODO: change to !auth()->id() >= 3
        if(auth()->id() >= 3) {
            abort(403, 'Unauthorized Action');
        }
        
        $userForm->delete();
        return redirect('/user_forms/'.$userForm->user_id)->with('message', 'Form deleted from user.');
    }
}
