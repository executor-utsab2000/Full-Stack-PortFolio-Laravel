<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CategoryManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryData = DB::table('categories')->get();
        return view('ADMIN.PAGES.Index Page.categoryIndex', compact('categoryData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ADMIN.PAGES.Add Form.categoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['categoryName' => 'required'], ['categoryName.required' => 'Enter Category Name']);

        $categoryId = uniqid('category-');
        $insertData = DB::table('categories')->insert([
            'categories_id' => $categoryId,
            'categories_name' => $request->categoryName
        ]);

        if ($insertData) {
            return redirect()->route('category.index')->with('message', 'Category Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoryData = DB::table('categories')->where('categories_id' , $id)->first();
        return view('ADMIN.PAGES.Update Form.categoryUpdateForm' , compact('categoryData')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate(['categoryName' => 'required'], ['categoryName.required' => 'Enter Category Name']);

        $categoryId = uniqid('category-');
        $insertData = DB::table('categories')->where('categories_id' , $id)->update([
            'categories_name' => $request->categoryName
        ]);

        if ($insertData) {
            return redirect()->route('category.index')->with('message', 'Category Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = DB::table('categories')->where('categories_id', $id)->delete();

        if ($deleteData) {
            return redirect()->route('category.index')->with('message', 'Category deleted Successfully');

        }
    }
}
