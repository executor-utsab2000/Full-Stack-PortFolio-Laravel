<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertDataValidatonRequest;
use App\Http\Requests\UpdateProjectRequest;
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
        $projectData = DB::table('projects')->where('project_id', $id)->first();
        $categoryData = $categoryData = DB::table('categories')->get();
        $languageData = $categoryData = DB::table('languages')->get();
        return view('ADMIN.PAGES.projectUpdateForm', compact('projectData', 'categoryData', 'languageData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, string $id)
    {
        if ($request->hasFile('projectImage')) {
            $request->validate([
                'projectImage' => 'required | mimes:png|max:5120',
            ], [
                'projectImage.required' => 'Enter Project  Image',
                'projectImage.mimes' => 'Project  Image must be : png',
                'projectImage.max' => 'Project max size should be less than 5MB',
            ]);

            $dbImageName = (DB::table('projects')->where('project_id', $id)->first())->project_image;
            $file = $request->file('projectImage');
            $uploadImageFile = $file->move('Images/Project Images', $dbImageName);

        }
        if ($request->hasFile('projectBgImage')) {
            $request->validate([
                'projectBgImage' => 'required | mimes:png|max:5120',
            ], [
                'projectBgImage.required' => 'Enter Project  Image',
                'projectBgImage.mimes' => 'Project  Image must be : png',
                'projectBgImage.max' => 'Project max size should be less than 5MB',
            ]);

            $dbBackgroundImageName = (DB::table('projects')->where('project_id', $id)->first())->project_image;
            $file = $request->file('projectBgImage');
            $uploadbgFile = $file->move('Images/Projects Backgrounds', $dbBackgroundImageName);
        }

        if (
            $request->hasFile('projectImage') && $uploadImageFile ||
            $request->hasFile('projectBgImage') && $uploadbgFile ||
            !$request->hasFile('projectBgImage') ||
            !$request->hasFile('projectImage')
        ) {
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

            $updateData = DB::table('projects')->where('project_id', $id)->update([
                'project_description' => $request->projectDescription,
                'project_moto' => $request->projectMoto,
                'project_duration' => json_encode($projectDuration),
                'project_languages' => json_encode($newArray),
            ]);

            if ($updateData) {
                return redirect()->route('project.index')->with('message', 'New project data updated  successfully');
            } elseif (
                !$updateData && $request->hasFile('projectImage') && $uploadImageFile ||
                !$updateData && $request->hasFile('projectBgImage') && $uploadbgFile
            ) {
                return redirect()->route('project.index')->with('message', 'New project image updated  successfully with no data change');
            } elseif (
                $request->hasFile('projectImage') && $uploadImageFile ||
                $request->hasFile('projectBgImage') && $uploadbgFile ||
                !$updateData
            ) {
                return redirect()->route('project.index')->with('message', 'No changes made');
            }
        }

        // return $request;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projectImage = (DB::table('projects')->where('project_id', $id)->first())->project_image;
        $projectBgImage = (DB::table('projects')->where('project_id', $id)->first())->project_backgroundImage;

        $unlinkBgImage = unlink("Images/Projects Backgrounds/$projectBgImage");
        $unlinkImage = unlink("Images/Project Images/$projectImage");

        if ($unlinkBgImage && $unlinkImage) {
            $deleteData = DB::table('projects')->where('project_id', $id)->delete();

            if ($deleteData) {
                return redirect()->route('project.index')->with('message', 'Data deleted successfully along with images ');
            }
        }
    }
}
