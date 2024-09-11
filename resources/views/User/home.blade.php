@extends('User.Master_Layout.masterLayout')

@section('subTitle')
    𝗛𝗼𝗺𝗲
@endsection



@section('content')
    @include('User.Sections.landing', ['languages' => $languages])
    @include('User.Sections.aboutMe')
    @include('User.Sections.skills', ['languages' => $languages])
    @include('User.Sections.education', ['educationData' => $educationData])
    @include('User.Sections.projects', ['projects' => $projects])

    @include('User.Sections.hobbies', ['hobbyData' => $hobbyData])
    @include('User.Sections.social', ['socialData' => $socialData])
    @include('User.Sections.getInTouch')


    {{-- -------------------------------------------- --}}

    @if (session('message'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Thank You",
                text: @json(session('message'))
            });
        </script>
    @endif
@endsection


{{-- the value from backend is converted to use in javascript by @json which is a inbuilt property of blade templete --}}
