<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use View;

class AdminHomeDasBoardController extends Controller
{

    public function countDetails()
    {
        $languages = DB::table('languages')->count();
        $education = DB::table('education')->count();
        $categories = DB::table('categories')->count();
        $projects = DB::table('projects')->count();
        $hobbies = DB::table('hobbies')->count();
        $socials = DB::table('socials')->count();
        $recentContact = DB::table('contact_form')->count();


        return [
            'languages' => $languages,
            'education' => $education,
            'categories' => $categories,
            'projects' => $projects,
            'hobbies' => $hobbies,
            'socials' => $socials,
            'recentContact' => $recentContact,
        ];
    }

    public function getChartData()
    {
        return DB::table('languages')->get();
    }

    public function categoryToProject()
    {
        $countCatProject = DB::table('categories')->get();


        foreach ($countCatProject as $item) {
            $count = DB::table('projects')
                ->where('project_category', $item->categories_id)
                ->count();
            $item->count = $count;
        }



        return $countCatProject;
    }



    public function contactDetails(){
        return DB::table('contact_form')
                    ->select('contact_user_name' , 'contact_user_phone')
                    ->limit(3)
                    ->get();
    }























































    public function adminDashBoardData()
    {
        return view('ADMIN.admin_Home', [
            'countData' => $this->countDetails(),
            'chartData' => $this->getChartData(),
            'categoryToProject' => $this->categoryToProject(),
            'contactForm' => $this->contactDetails(),
        ]);
    }
}



// count 
// category:project
// recentContacted