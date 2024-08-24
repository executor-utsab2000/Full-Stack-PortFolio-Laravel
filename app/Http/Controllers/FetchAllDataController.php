<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FetchAllDataController extends Controller
{

    function getEducation()
    {
        return DB::table('education')->get();
    }

    function getHobby()
    {
        return DB::table('hobbies')->get();
    }

    function getSocial()
    {
        return DB::table('socials')->get();
    }





    public function index()
    {
        return view('home', [
            'educationData' => $this->getEducation(),
            'hobbyData' => $this->getHobby(),
            'socialData' => $this->getSocial(),
        ]);
    }
}
