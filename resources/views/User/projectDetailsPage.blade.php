@extends('User.Master_Layout.masterLayout')

@section('subTitle')
    {{ $projectData->project_name }}
@endsection

@section('css_js')
    <link rel="stylesheet" href="{{ asset('CSS/projectPage.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/ihover.min.css') }}">
@endsection



@section('content')
    <div id="projectDetailsPage">

        <div class="topImage"
            style="background-image: url('{{ asset('Images/Projects Backgrounds/' . $projectData->project_backgroundImage) }}')">
            <img src="{{ asset('Images/Project Images/' . $projectData->project_image) }}" alt=""
                class="d-none d-md-block">
        </div>

        <div class="container px-">
            <div class="projectHeader">{{ $projectData->project_name }}</div>

            <div class="projectSubHeader">description</div>
            <div class="projectDescriptionContent">{{ $projectData->project_description }}</div>

            <div class="projectSubHeader">Moto of the project</div>
            <div class="projectDescriptionContent">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur repudiandae numquam ut necessitatibus
                magni fuga reprehenderit libero modi molestias animi?
            </div>

            <div class="projectSubHeader">duration consumed</div>
            <div class="projectDescriptionContent">
                <span class="countNo">2 </span>Months
                <span class="ps-2 countNo">5 </span>Days
            </div>

            <div class="projectSubHeader">languages used</div>
            <div class="projectDescriptionContent">
                <div class="row">

                    @foreach ($projectData->project_languages as $item)
                        <div class="col-md-6 col-lg-3 px-0 my-2 mx-auto d-flex justify-content-center">
                           <div class="languageContainer">
                            <img src='{{ asset("Images/language/$item->languageImage") }}' alt="" class="img-fluid">
                           </div>
                        </div>
                    @endforeach


                </div>
            </div>



        </div>

        <div class="threeBtns d-flex justify-content-around flex-wrap mb-4 px-lg-5 px-3">
            <a class="button github navigateLinks nav-links" href="{{ $projectData->project_sourceCode_github }}"><i
                    class="fa-brands fa-github me-2"></i> Github</a>
            <a class="button live navigateLinks nav-links" href="{{ $projectData->project_liveHostLink }}"><i
                    class="fa-solid fa-globe me-2"></i> Live Preview</a>
        </div>


    </div>

@endsection
