<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use DB;
use Illuminate\Http\Request;

class UserDataInsertController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ValidationRequest $request)
    {

        // return dd($request);
        $userID = uniqid('user-');

        $insertData = DB::table('contact_form')->insert([
            'contact_user_Id' => $userID,
            'contact_user_name' => $request->userName,
            'contact_user_phone' => $request->contactNumber,
            'contact_user_email' => $request->email,
            'contact_user_residence' => $request->residence,
            'contact_user_purpose' => $request->input('query')
        ]);

        if ($insertData) {
            return redirect()->route('home')->with('message', 'Your data is successfully received by me and I will get to you within 72 hours');
        }

    }
}
