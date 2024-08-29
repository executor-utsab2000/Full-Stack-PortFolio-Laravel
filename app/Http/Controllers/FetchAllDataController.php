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

            $languageImage = [];
            foreach ($projects as $projectInfo) { //looping projects within the whole array
                $projectLanguages = json_decode($projectInfo->project_languages);

                foreach ($projectLanguages as $language) { //looping through languages array after decoding
                    $languageDetails = DB::table('languages')
                        ->select('language_image')
                        ->where('language_id', $language->languageId)
                        ->first();

                    if (!in_array($languageDetails->language_image, $languageImage)) {
                        array_push($languageImage, $languageDetails->language_image);
                    }
                }
                // Assign the language data array to the project
                $projectInfo->imageArray = $languageImage;
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
        return view('projectDetailsPage', [
            'navBarData' => $this->getCategories_Project(),
            'projectData' => $projectDetails
        ]);
    }


    // ------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------




    public function formData()
    {
        return view('formTry', ['languages' => $this->getLanguages()]);
    }



    public function langAdd()
    // public function langAdd(Request $request)
    {
        // return $this->getProjectSectionData();
        // return $request;

        // $languageId = $request->languages;
        // $languageKnown = $request->languagesKnown;
        // // return $languageKnown ;

        // $countNo = 0;

        // $newArray = [];

        // foreach ($languageId as $language) {
        //     array_push($newArray, [
        //         'languageId' => $language,
        //         'percentage' => $languageKnown[$countNo]
        //     ]);
        //     $countNo++;
        // }

        // return json_encode($newArray);


        // to get data
        // $projData = DB::table('projects')->get();

        // $newArray = [];

        // foreach ($projData as $value) {
        //     $imgName = DB::table('languages')->get();
        //     $languageArray = json_decode($value->project_languages);

        //     $newArray = [];
        //     foreach ($languageArray as $value) {
        //         $data = DB::table('languages')->where('language_id', $value->languageId)->get();
        //         // return $data;

        //     }
        // }
        // return $value;
        // return $newArray;      
        // return $newArray;      

        return $this->getProjectSectionData();
    }



}



