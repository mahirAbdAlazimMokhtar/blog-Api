<?php

namespace App\Http\Controllers;

use App\Models\Models\Category;
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
        $categories = Category::all();
        return view('Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('Category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //this to save data in form Create
        $category = new Category();
        $category->name = $request->input('categoryName');
       if ( $category->save()){
           return redirect()->back()->with('Success','Saved Successfully !');
       }
        return redirect()->back()->with('Failed', 'Could not Save !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category = Category::find($id);
       return view ('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('categoryName');
        if($category->save()){
            return redirect()->back()->with('success', 'Updated Successfuly');
        }
         return redirect()->back()->with('failed', 'Could not Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
