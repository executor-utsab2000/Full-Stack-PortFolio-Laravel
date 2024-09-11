@extends('ADMIN.MasterLayout.masterLayout')

@section('pageName')
    Social
@endsection


@section('css_js')
    <style>
        .socialLongText {
            font-size: 0.7rem;
        }

    </style>
@endsection


@section('pageHeader', 'Social Details')

@section('addBtnRoute', route('social.create'))


@section('adminContent')



    <div class="socialIndex">
        @foreach ($socialData as $item)
            <div class="tabContents socialTabs my-3">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 id">{{ $item->social_Id }}</div>
                            <div class="col-md-1 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 name">{{ ucwords($item->social_name ) }}</div>
                            <div class="col-md-5 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 socialLongText">{{ $item->social_link }}</div>
                            <div class="col-md-2 d-flex justify-content-center my-2 my-md-auto mx-auto px-2 socialLongText">
                                <div class="imgContainer">
                                    <img src='{{ asset("Images/Socials/$item->social_image") }}' alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 icons">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('social.edit', $item->social_Id) }}" class="nav-link">
                                    <button class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('social.destroy', $item->social_Id) }}">
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
