@extends('ADMIN.MasterLayout.AdminAddUpdateFormMasterLayout')

@section('formHeader', 'Update Project')
@section('pageName', 'Update Project')
@section('subHeader',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia laboriosam nemo placeat illo
    esse amet, architecto accusamus quaerat minus! Praesentium, eos laborum hic at blanditiis nostrum quae dolorum
    reiciendis ad.')

@section('css_js')
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminUpdateForm.css') }}">
@endsection

@php
    $languuageIdArray = [];

    foreach (json_decode($projectData->project_languages) as $item) {
        array_push($languuageIdArray, $item->languageId);
    }
    // var_dump($languuageIdArray);
@endphp

@section('formInputs')

    <div class="row">
        <div class="col-lg-9 updateProject px-3">
            <div class="header mb-3">{{ $projectData->project_name }}</div>

            <form action="{{ route('project.update' , $projectData->project_id) }}" method="post"  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-lg-8 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Project Description :</label>
                                <textarea placeholder="Write here..." name="projectDescription" class="input" rows="8">{{ $projectData->project_description }}</textarea>
                                @error('projectDescription')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Moto of the Project :</label>
                                <textarea placeholder="Write here..." name="projectMoto" class="input" rows="8">{{ $projectData->project_moto }}</textarea>
                                @error('projectMoto')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Months Used :</label>
                                <input type="text" placeholder="Write here..." name="monthsUsed" class="input"
                                    value="{{ json_decode($projectData->project_duration)->month }}">
                                @error('monthsUsed')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Days Used :</label>
                                <input type="text" placeholder="Write here..." name="daysUsed" class="input"
                                    value="{{ json_decode($projectData->project_duration)->day }}">
                                @error('daysUsed')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Project Background Image :</label>
                                <input type="file" placeholder="Write here..." name="projectBgImage" class="input">
                                @error('projectBgImage')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Project Image :</label>
                                <input type="file" placeholder="Write here..." name="projectImage" class="input">
                                @error('projectImage')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 px-2 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Languages Used :</label>
                                <div class="languagesContainers d-flex justify-content-around flex-wrap">
                                    {{-- loop of lnguages --}}
                                    @foreach ($languageData as $item)
                                        <div class="m-2">
                                            <label for="{{ $item->language_name }}"
                                                class="languageCheckBoxLabel me-1">{{ $item->language_name }}</label>
                                            <input type="checkbox" name="language[]" class="language"
                                                id="{{ $item->language_name }}" value="{{ $item->language_id }}"
                                                {{ in_array($item->language_id, $languuageIdArray) ? 'checked' : '' }}>
                                        </div>
                                    @endforeach
                                    {{-- loop of lnguages --}}
                                </div>
                                @error('languages')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <input type="submit" value="Submit" class="submitBtn btn">
                        </div>
                    </div>
                </div>
            </form>

        </div>











        <div class="col-lg-3 projectUpdateImageContainer my-auto">
            <img src='{{ asset("Images/Projects Backgrounds/$projectData->project_backgroundImage") }}' alt=""
                class="img-fluid">
            <img src='{{ asset("Images/Project Images/$projectData->project_image") }}' alt="" class="img-fluid">
        </div>
    </div>

@endsection
