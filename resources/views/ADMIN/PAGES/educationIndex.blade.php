@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Education
@endsection

@section('pageHeader', 'Education Details')

@section('addBtnRoute', route('education.create'))

@section('css_js')
    <style>
        .educationLongText {
            font-size: 0.7rem;
        }
    </style>
@endsection



@section('adminContent')



    <div class="educationIndex">
        @foreach ($educationData as $item)
            <div class="tabContents educationTabs my-3">
                <div class="row">
                    <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 id">
                        {{ $item->education_id }}
                    </div>
                    <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">
                        {{ $item->education_stage }}
                    </div>
                    <div class="col-md-1 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 text-danger">
                        {{ $item->education_year }}</div>
                    <div class="col-md-3 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 educationLongText">
                        {{ $item->education_institute }}</div>
                    <div class="col-md-3 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 educationLongText">
                        {{ $item->education_headInstitute }}</div>


                    <div class="col-md-2 d-flex justify-content-around my-2 pt-4 my-md-auto mx-auto px-2 icons">

                        <a href="{{ route('education.edit', $item->education_id) }}" class="nav-link">
                            <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>

                        <form action="{{ route('education.destroy', $item->education_id) }}">
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
