<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertDataValidatonRequest;
use DB;
use Illuminate\Http\Request;

class ProjectManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectData = DB::table('projects')->get();
        return view('ADMIN/PAGES/projectIndex', compact('projectData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languageData = DB::table('languages')->get();
        $categoryData = DB::table('categories')->get();
        return view('ADMIN.PAGES.projectAddForm', compact('languageData', 'categoryData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InsertDataValidatonRequest $request)
    {
        // return $request; 
        $projectBgImage = $request->file('projectBgImage');
        $projectImage = $request->file('projectImage');

        $projectBgImageNewName = $request->projectName . '.' . $projectBgImage->getClientOriginalExtension();
        $projectImageNewName = $request->projectName . '.' . $projectImage->getClientOriginalExtension();

        $bgImageSaveServer = $projectBgImage->move('Images/Projects Backgrounds', $projectBgImageNewName);
        $imageSaveServer = $projectImage->move('Images/Project Images', $projectImageNewName);

        $projectID = uniqid('project-');

        $projectDuration = [
            'month' => $request->monthsUsed,
            'day' => $request->daysUsed,
        ];

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


        if ($bgImageSaveServer && $imageSaveServer) {
            $insertdata = DB::table('projects')->insert([
                'project_id' => $projectID,
                'project_name' => $request->projectName,
                'project_description' => $request->projectDescription,
                'project_moto' => $request->projectMoto,
                'project_duration' => json_encode($projectDuration),
                'project_languages' => json_encode($newArray),
                'project_backgroundImage' => $projectBgImageNewName,
                'project_image' => $projectImageNewName,
                'project_category' => $request->projectCategory,
                'project_sourceCode_github' => $request->githubLink,
                'project_liveHostLink' => $request->liveLink,
            ]);

            if ($insertdata) {
                return redirect()->route('project.index')->with('message', 'New project data added successfully');
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projectData = DB::table('projects')->where('project_id', $id)->first();
        return view('ADMIN.PAGES.projectDetailsAdmin', compact('projectData'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
