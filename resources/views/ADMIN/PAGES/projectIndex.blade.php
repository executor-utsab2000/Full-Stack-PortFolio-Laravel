@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Projects
@endsection



@section('css_js')
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminProject.css') }}">
@endsection



@section('pageHeader', 'Projects Details')

@section('addBtnRoute', route('project.create'))

@section('adminContent')

    <div class="contact_formIndex">
        @foreach ($projectData as $item)
            <div class="tabContents ProjectTabs my-3">
                <div class="row">
                    <div class="col-lg-10 ">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 id">{{ $item->project_id }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">{{ ucwords($item->project_name ) }}</div>
                            <div class="col-md-6 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 projectDescription">{{ $item->project_description  }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 ">
                                <div class="imgContainer">
                                    <img src='{{ asset("Images/Projects Backgrounds/$item->project_backgroundImage") }}' alt="" class="img-fluid">
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col-lg-2 d-flex justify-content-around my-2 my-md-auto px-2 icons">

                        <a href="{{ route('project.show', $item->project_id) }}" class="nav-link">
                            <button class="btn"><i class="fa-solid fa-circle-info"></i></button>
                        </a>

                        <a href="{{ route('language.edit', $item->project_id) }}" class="nav-link">
                            <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>

                        <form action="{{ route('language.destroy', $item->project_id) }}">
                            @csrf
                            @method('delete')
                            <button class="btn" type="submit"><i class="fa-solid fa-trash-can"></i></i></button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{-- public/CSS/ADMIN/adminProject.css --}}
