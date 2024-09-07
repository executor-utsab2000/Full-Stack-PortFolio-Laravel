<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class LanguageManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languageData = DB::table('languages')->get();
        return view('ADMIN.PAGES.languageIndex', compact('languageData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ADMIN.PAGES.languageAddForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $languageId = uniqid('language-');

        $request->validate(
            [
                'languageName' => 'required | unique:languages,language_name',
                'languageKnowledge' => 'required | numeric | between:0,100',
                'languageImage' => 'required | file | mimes:jpg,jpeg,png|max:2048'
            ],
            [
                'languageName.required' => 'Enter Language Name',
                'languageName.unique' => 'Language Name aleady exists',

                'languageKnowledge.required' => 'The language knowledge field is required.',
                'languageKnowledge.numeric' => 'he language knowledge field must be a number.',
                'languageKnowledge.between' => 'The language knowledge field must be between 0 and 100.',


                'languageImage.required' => 'Provide an image for the language',
                'languageImage.mimes' => 'Image supported file types are jpg,jpeg,png',
                'languageImage.max' => 'Image max size should be 2048MB'
            ]
        );

        $file = $request->file('languageImage');
        $fileExtension = $file->getClientOriginalExtension();
        $newFileName = strtolower($request->languageName) . ".$fileExtension";
        $uploadFile = $file->move("Images/language", $newFileName);

        if ($uploadFile) {
            $insertData = DB::table('languages')->insert([
                'language_id' => $languageId,
                'language_name' => $request->languageName,
                'language_knowledge' => $request->languageKnowledge,
                'language_image' => $newFileName,
            ]);

            if ($insertData) {
                return redirect()->route('language.index')->with('message', 'New Language added successfully');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // use nehi karna hai 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userGet = DB::table('languages')
            ->where('language_id', $id)
            ->first();

        return view('ADMIN.PAGES.languageUpdateForm', compact('userGet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->hasFile('languageImage');
        if ($request->hasFile('languageImage')) {
            $request->validate(
                [
                    'languageImage' => 'mimes:jpg,jpeg,png|max:2048'
                ],
                [
                    'languageImage.mimes' => 'Image supported file types are jpg,jpeg,png',
                    'languageImage.max' => 'Image max size should be 2048MB'
                ]
            );

            $fileDbName = (DB::table('languages')->where('language_id', $id)->select('language_image')->first())->language_image;
            $file = $request->file('languageImage');
            $file->move("Images/language", $fileDbName);
        }

        $request->validate(
            [
                'languageName' => 'required | unique:languages,language_name',
                'languageKnowledge' => 'required | numeric | between:0,100',
            ],
            [
                'languageName.required' => 'Enter Language Name',
                'languageName.unique' => 'Language Name aleady exists',

                'languageKnowledge.required' => 'The language knowledge field is required.',
                'languageKnowledge.numeric' => 'he language knowledge field must be a number.',
                'languageKnowledge.between' => 'The language knowledge field must be between 0 and 100.',
            ]
        );

        $updateData = DB::table('languages')->where('language_id', $id)->update([
            'language_name' => $request->languageName,
            'language_knowledge' => $request->languageKnowledge,
        ]);
        if($updateData){
            return redirect()->route('language.index')->with('message', 'Language updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prevImage = DB::table('languages')->select('language_image')->where('language_id', $id)->first();
        $unlinkImage = unlink("Images/language/$prevImage->language_image");


        if ($unlinkImage) {
            $userDelete = DB::table('languages')
                ->where('language_id', $id)
                ->delete();
            return redirect()->route('language.index')->with('message', 'Language deleted successfully');
        }
    }
}
