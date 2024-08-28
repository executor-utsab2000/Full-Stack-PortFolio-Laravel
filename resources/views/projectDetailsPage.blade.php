@extends('Master_Layout.masterLayout')

@section('subTitle')
    {{ $projectData->project_name }}
@endsection

@section('css_js')
    <link rel="stylesheet" href="{{ asset('CSS/projectPage.css') }}">
@endsection



@section('content')
    <div id="projectDetailsPage">

        <div class="topImage"
            style="background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_640.jpg')">
            <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_640.jpg" alt=""
                class="d-none d-md-block">
        </div>

        <div class="container">
            <div class="projectHeader">Lorem, ipsum dolor.</div>

            <div class="projectSubHeader">description</div>
            <div class="projectDescriptionContent">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ea hic vero. Distinctio inventore dolore veniam, molestias, error quis ipsa doloribus sed iusto, dignissimos illum. Ipsam quia excepturi accusamus ex possimus. Neque natus accusamus numquam dolore saepe, excepturi quidem ipsum repudiandae deserunt voluptatem facere sint minus exercitationem voluptas! Nobis sit est a dolorem repellendus officia. Vel veniam totam ipsam optio dolor saepe impedit porro eos, explicabo odio aliquid? Cum provident error reprehenderit, fugit perferendis explicabo natus nihil voluptates voluptatibus quod iusto voluptate ea harum quisquam debitis et soluta incidunt optio enim quos quis magni veniam! Architecto numquam sed error vero!
            </div>

            <div class="projectSubHeader">Moto of the project</div>
            <div class="projectDescriptionContent">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur repudiandae numquam ut necessitatibus magni fuga reprehenderit libero modi molestias animi?
            </div>

            <div class="projectSubHeader">duration consumed</div>
            <div class="projectDescriptionContent">
                <span class="countNo">2 </span>Months   
                <span class="ps-2 countNo">5 </span>Days
            </div>
            
            <div class="projectSubHeader">languages used</div>
            <div class="projectDescriptionContent">
                <div class="row">
                    <div class="col-md-6 px-3">
                        {{-- progresbar --}}
                    </div>
                </div>
            </div>



        </div>




































    </div>
@endsection
