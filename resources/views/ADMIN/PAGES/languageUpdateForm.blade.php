@extends('ADMIN.MasterLayout.AdminAddUpdateFormMasterLayout')

@section('formHeader', 'Update Language')
@section('pageName', 'Update Language')
@section('subHeader',
    'The languages added here are wel known to me and i have the basic concepts of it got cleared by
    buildng multiple projects of different scales and solving few logical problems.')



@section('formInputs')
    <div class="row">
        <div class="col-lg-7 order-2 order-lg-1">
            <form action="{{ route('language.update', $userGet->language_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Name of Language :</label>
                                <input type="text" placeholder="Write here..." name="languageName" class="input"
                                    value="{{ $userGet->language_name }}">
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
                                <input type="text" placeholder="Write here..." name="languageKnowledge" class="input"
                                    value="{{ $userGet->language_knowledge }}">
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
        <div class="col-lg-5 updateImageContainer order-1 order-lg-2">
            <div class="languageImageContainerUpdate">
                <img src='{{ asset("Images/language/$userGet->language_image") }}' alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
