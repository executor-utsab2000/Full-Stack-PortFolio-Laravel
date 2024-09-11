@extends('ADMIN.MasterLayout.AdminAddUpdateFormMasterLayout')

@section('formHeader', 'Add Category')
@section('pageName', 'Add Category')
@section('subHeader', 'The categoryies added here is based on my classification of my projects represented here .It is
    completely my opinion and can vary from preson to person.')

@section('css_js')
    <style>
        .imageContainer img{
            height: 20rem;
        }
    </style>
@endsection


@section('formInputs')
    <div class="row">
        <div class="col-lg-012">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-lg-12 imageContainer d-flex justify-content-center">
                        <img src="{{ asset('Images/Admin/Add Forms/category.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-12 my-2">
                        <div class="inputContainers">
                            <div class="coolinput">
                                <label for="input" class="text">Category Name :</label>
                                <input type="text" placeholder="Write here..." name="categoryName" class="input">
                                @error('categoryName')
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
    </div>
@endsection
