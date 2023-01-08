<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index', [
            'forms' => Form::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'form_name' => 'required',
            'slug' => 'required|unique:forms'
        ]);        

        $formFields['form_name'] = ucwords($formFields['form_name']);
        Form::create($formFields);

        return redirect('/forms')->with('message', 'Form created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        return view('forms.edit', [
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $formFields = $request->validate([
            'form_name' => 'required'       
        ]);        

        $formFields['form_name'] = ucwords($formFields['form_name']);
        $form->update($formFields);

        return redirect('/forms')->with('message', 'Form updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //TODO: change to !auth()->id() >= 3
        if(auth()->id() >= 3) {
            abort(403, 'Unauthorized Action');
        }
        
        $form->delete();
        return redirect('/forms')->with('message', 'Form deleted successfully');
    }
}
