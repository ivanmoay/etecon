<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'category' => 'required'
        ]);        

        $formFields['category'] = ucwords($formFields['category']);
        Category::create($formFields);

        return redirect('/categories')->with('message', 'Category created successfully!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $formFields = $request->validate([
            'category' => 'required'          
        ]);        

        $formFields['category'] = ucwords($formFields['category']);
        $category->update($formFields);

        return redirect('/categories')->with('message', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        //TODO: change to !auth()->id() >= 3
        if(auth()->id() >= 3) {
            abort(403, 'Unauthorized Action');
        }

        Form::where('category_id',$category->id)->update(['category_id'=>'0']);
        
        $category->delete();
        return redirect('/categories')->with('message', 'Category deleted successfully');
    }
}
