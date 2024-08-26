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

    function getLanguages()
    {
        return DB::table('languages')->get();
    }




    public function getCategories_Project()
    {
        $categoryData = DB::table('categories')->get();
        foreach ($categoryData as $category) {
            // $categoryId[] =  $category->categories_id;
            $projects = DB::table('projects')->select('project_name')->where('project_category', "$category->categories_id")->get();
            $category->projects = $projects;
        }

        return $categoryData;
    }

    public function getProjectSectionData()
    {
        $categoryNames = DB::table('categories')->select('categories_name')->get();

        $category_project_data = DB::table('categories')->get();
        foreach ($category_project_data as $category) {
            // $categoryId[] =  $category->categories_id;
            $projects = DB::table('projects')->where('project_category', "$category->categories_id")->get();
            $category->projects = $projects;
        }

        return compact('category_project_data' , 'categoryNames');
    }








    public function index()
    {
        return view('home', [
            'educationData' => $this->getEducation(),
            'hobbyData' => $this->getHobby(),
            'socialData' => $this->getSocial(),
            'languages' => $this->getLanguages(),
            'navBarData' => $this->getCategories_Project(),
            'projects' => $this->getProjectSectionData() ,
        ]);
    }


    public function ContactForm()
    {
        return view('contactForm', [
            'navBarData' => $this->getCategories_Project(),
        ]);
    }
}
