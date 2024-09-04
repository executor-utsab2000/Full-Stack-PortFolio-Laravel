@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Language
@endsection

@section('css_js')
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/languageIndex.css') }}">
@endsection



@section('pageHeader')
    Language Details
@endsection


@section('adminContent')
    <div class="languageIndex">
        @foreach ($languageData as $item)
            <div class="tabContents languageTabs my-3">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center my-auto px-2 id">{{ $item->language_id }}</div>
                    <div class="col-md-2 d-flex justify-content-center my-auto px-2 name">{{ $item->language_name }}</div>
                    <div class="col-md-1 d-flex justify-content-center my-auto px-2 text-danger">
                        {{ $item->language_knowledge }}</div>
                    <div class="col-md-3 d-flex justify-content-center my-auto px-2">
                        <div class="adminpanel imgContainer">
                            <img src='{{ asset("Images/language/$item->language_image") }}' alt=""
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-around my-auto px-2 icons">
                        <a href="{{ route('language.show', $item->language_id) }}" class="nav-link">
                            <button class="btn"><i class="fa-solid fa-circle-info"></i></button>
                        </a>
                        <a href="{{ route('language.edit', $item->language_id) }}" class="nav-link">
                            <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>

                        <form action="{{ route('language.destroy', $item->language_id) }}">
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
