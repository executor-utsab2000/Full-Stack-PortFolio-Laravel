<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class LanguageManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languageData = DB::table('languages')->get();
        return view('ADMIN.PAGES.languageIndex', compact('languageData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $id;
    }
}
