@extends('ADMIN.MasterLayout.AdminAddUpdateFormMasterLayout')

@section('formHeader', 'Add Language')
@section('pageName', 'Add Language')
@section('subHeader',
    'The languages added here are wel known to me and i have the basic concepts of it got cleared by
    buildng multiple projects of different scales and solving few logical problems.')



@section('formInputs')
    <div class="row">
        <div class="col-lg-7">
            <form action="{{ route('language.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Name of Language :</label>
                                <input type="text" placeholder="Write here..." name="languageName" class="input">
                                @error('languageName')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Depth of Knowledge :</label>
                                <input type="text" placeholder="Write here..." name="languageKnowledge" class="input">
                                @error('languageKnowledge')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Language Image</label>
                                <input type="file" placeholder="Write here..." name="languageImage" class="input">
                                @error('languageImage')
                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <input type="submit" value="Submit" class="submitBtn btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-5 imageContainer d-none d-lg-block my-auto">
            <img src="{{ asset('Images/Admin/Add Forms/language.png') }}" alt="" class="img-fluid">
        </div>
    </div>
@endsection
