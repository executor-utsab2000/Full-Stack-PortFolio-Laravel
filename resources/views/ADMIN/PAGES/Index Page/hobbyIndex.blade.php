@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    hobby
@endsection


@section('css_js')
    <style>
        .hobbyLongText {
            font-size: 0.7rem;
        }

    </style>
@endsection


@section('pageHeader', 'hobby Details')

@section('addBtnRoute', route('hobby.create'))


@section('adminContent')



    <div class="hobbyIndex">
        @foreach ($hobbyData as $item)
            <div class="tabContents hobbyTabs my-3">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 id">{{ $item->hobby_Id }}</div>
                            <div class="col-md-1 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">{{ ucwords($item->hobby_name ) }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 hobbyLongText">
                                <div class="imgContainer">
                                    <img src='{{ asset("Images/hobbies/$item->hobby_image") }}' alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 icons">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('hobby.edit', $item->hobby_Id) }}" class="nav-link">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('hobby.destroy', $item->hobby_Id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit"><i class="fa-solid fa-trash-can"></i></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
