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
                ->where('project_category', "$category->categories_id")
                ->get();
            $category->projects = $projects;

            foreach ($projects as $projectInfo) { //looping projects within the whole array
                $projectLanguages = json_decode($projectInfo->project_languages);
                $projectInfo->project_languages = $projectLanguages;
            }


        }

        // return $projectLanguages;
        return compact('category_project_data', 'categoryNames');
        // return $category_project_data;
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
        return view('contactForm');
    }




    public function projectData($id)
    {
        $projectDetails = DB::table('projects')->where('project_id', $id)->first();

        $languageGet = json_decode($projectDetails->project_languages);
        // return $languageGet;

        $projectDetails->project_languages = $languageGet;


        return view('projectDetailsPage', [
            'navBarData' => $this->getCategories_Project(),
            'projectData' => $projectDetails
        ]);
        // return $projectDetails;

    }


    // ------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------




    public function formData()
    {
        return view('formTry', ['languages' => $this->getLanguages()]);
    }



    // public function langAdd()
    public function langAdd(Request $request)
    {
        // return $this->getProjectSectionData();
        // return $request;

        $newArray = [];
        $languageId = $request->languages;

        foreach ($languageId as $language) {

            $languageDetails = DB::table('languages')->where('language_id', $language)->first();
            array_push($newArray, [
                'languageId' => $language,
                'languageName' => $languageDetails->language_name,
                'languageImage' => $languageDetails->language_image,
            ]);
        }

        return json_encode($newArray);
        //     // return $languageKnown ;


        //     // to get data
        //     // $projData = DB::table('projects')->get();

        //     // $newArray = [];

        //     // foreach ($projData as $value) {
        //     //     $imgName = DB::table('languages')->get();
        //     //     $languageArray = json_decode($value->project_languages);

        //     //     $newArray = [];
        //     //     foreach ($languageArray as $value) {
        //     //         $data = DB::table('languages')->where('language_id', $value->languageId)->get();
        //     //         // return $data;

        //     //     }
        //     // }

        // return $this->getProjectSectionData();
    }



}



