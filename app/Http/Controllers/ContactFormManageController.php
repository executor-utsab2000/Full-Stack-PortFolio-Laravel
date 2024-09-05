<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ContactFormManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactData = DB::table('contact_form')->get();
        return view('ADMIN/PAGES/contactFormIndex' , compact('contactData'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $updateData = DB::table('contact_form')
                ->where('contact_user_Id' , $id)
                ->update(['status' => 'contacted']) ;

                if($updateData){
                  return  redirect()->route('contact_form.index');
                }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
