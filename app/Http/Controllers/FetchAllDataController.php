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
            $projects = DB::table('projects')->select('project_name', 'project_id')->where('project_category', "$category->categories_id")->get();
            $category->projects = $projects;
        }

        return $categoryData;
    }

    public function getProjectSectionData()
    {
        $categoryNames = DB::table('categories')->select('categories_name', 'categories_id')->get();

        $category_project_data = DB::table('categories')->get();
        foreach ($category_project_data as $category) {
            // $categoryId[] =  $category->categories_id;
            $projects = DB::table('projects')
                ->select('project_id', 'project_name', 'project_description', 'project_languages', 'project_backgroundImage', 'project_category', 'project_sourceCode_github')
                ->where('project_category', "$category->categories_id")
                ->get();
            $category->projects = $projects;
        }

        return compact('category_project_data', 'categoryNames');
    }








    public function index()
    {
        return view('home', [
            'educationData' => $this->getEducation(),
            'hobbyData' => $this->getHobby(),
            'socialData' => $this->getSocial(),
            'languages' => $this->getLanguages(),
            'navBarData' => $this->getCategories_Project(),
            'projects' => $this->getProjectSectionData(),
        ]);
    }


    public function ContactForm()
    {
        return view('contactForm') ;
    }




    public function projectData($id)
    {
        $projectDetails = DB::table('projects')->where('project_id' , $id)->first();
        return view('projectDetailsPage', [
            'navBarData' => $this->getCategories_Project(),
            'projectData' => $projectDetails
        ]);
    }














    // public function langAdd(Request $request)
    // {
    //     $languages = [
    //         "language-66c7389a13fdb",
    //         "language-66c7389fd57e1",
    //         "language-66c738a5b43fa"
    //     ];

    //     foreach($languages as $data){
    //         $language
    //     }


    //     // return $languages;
    // }





























































    public function formData()
    {
        return view('formTry', ['languages' => $this->getLanguages()]);
    }



}



