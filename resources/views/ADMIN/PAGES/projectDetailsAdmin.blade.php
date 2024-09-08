<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || {{ $projectData->project_name }}</title>
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/projectDetailsAdmin.blade.css') }}">
    @include('Components.Fixed.CDN')
</head>

<body>
    <div class="container-fluid projectShowAllDetails py-3">
        <div class="innerDiv">
            <div class="row">
                <div class="col-lg-4">
                    <div class="imageBackground">
                        <img src='{{ asset("Images/Projects Backgrounds/$projectData->project_image") }}' alt=""
                            class="img-fluid">
                        <div class="imageSmallContainer">
                            <img src="{{ asset("Images/Project Images/$projectData->project_image") }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="projectName">{{ $projectData->project_name }}</div>

                    <div class="headerSub mt-5">Duration of the Project:</div>
                    <div class="rightContentDetails">{{ $projectData->project_duration }}</div>

                    <div class="headerSub mt-5 ">Category of the Project:</div>
                    <div class="rightContentDetails mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing .</div>
                </div>
                <div class="col-lg-8">
                    <div class="headerSub mt-5 mt-lg-2">Description:</div>
                    <div class="rightContentDetails">{{ $projectData->project_description }}</div>

                    <div class="headerSub mt-5">Moto of the Project:</div>
                    <div class="rightContentDetails">{{ $projectData->project_moto }}</div>


                    <div class="headerSub mt-5">Lnguages used in the Project:</div>
                    <div class="rightContentDetails d-flex justify-content-around flex-wrap">
                        @foreach (json_decode($projectData->project_languages) as $item)
                            <div class="languageImageContainers">
                                <img src='{{ asset("Images/language/$item->languageImage") }}' alt=""class="img-fluid">
                            </div>
                        @endforeach
                    </div>

                    <div class="headerSub mt-5">Links of the Project:</div>
                    <div class="rightContentDetails d-flex justify-content-around">
                        <a href="{{ $projectData->project_sourceCode_github }}">
                            <div class="languageImageContainers">
                                <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt=""
                                    class="img-fluid">
                            </div>
                        </a>
                        <a href="{{ $projectData->project_liveHostLink }}">
                            <div class="languageImageContainers">
                                <img src="https://png.pngtree.com/png-vector/20240115/ourmid/pngtree-blue-website-icon-vector-png-image_11438142.png" alt=""
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
