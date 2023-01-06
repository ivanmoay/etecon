<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'company_logo' => 'required',
            'company_name' => 'required'
        ]);        

        $formFields['company_logo'] = ucwords($formFields['company_logo']);
        $formFields['company_name'] = ucwords($formFields['company_name']);
        Company::create($formFields);

        return redirect('/companies')->with('message', 'Company created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\C  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $formFields = $request->validate([
            'company_logo' => 'required',
            'company_name' => 'required'       
        ]);        

        $formFields['company_logo'] = ucwords($formFields['company_logo']);
        $formFields['company_name'] = ucwords($formFields['company_name']);
        $company->update($formFields);

        return redirect('/companies')->with('message', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //TODO: change to !auth()->id() >= 3
        if(auth()->id() >= 3) {
            abort(403, 'Unauthorized Action');
        }
        
        $company->delete();
        return redirect('/companies')->with('message', 'Company deleted successfully');
    }
}
