@extends('Master_Layout.masterLayout')

@section('subTitle')
    𝗛𝗼𝗺𝗲
@endsection



@section('content')
    @include('Sections.landing', ['languages' => $languages])
    @include('Sections.aboutMe')
    @include('Sections.skills', ['languages' => $languages])
    @include('Sections.education', ['educationData' => $educationData])
    @include('Sections.hobbies', ['hobbyData' => $hobbyData])
    @include('Sections.social', ['socialData' => $socialData])
    @include('Sections.getInTouch')
@endsection
