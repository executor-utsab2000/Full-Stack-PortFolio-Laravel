@extends('Master_Layout.masterLayout')

@section('subTitle')
    𝗛𝗼𝗺𝗲
@endsection



@section('content')
    @include('Sections.landing', ['languages' => $languages])
    @include('Sections.aboutMe')
    @include('Sections.skills', ['languages' => $languages])
    @include('Sections.education', ['educationData' => $educationData])
    @include('Sections.projects', ['projects' => $projects])

    @include('Sections.hobbies', ['hobbyData' => $hobbyData])
    @include('Sections.social', ['socialData' => $socialData])
    @include('Sections.getInTouch')


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
