@extends('ADMIN.MasterLayout.AdminAddUpdateFormMasterLayout')

@section('formHeader', 'Add Project')
@section('pageName', 'Add Project')
@section('subHeader',
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia laboriosam nemo placeat illo
    esse amet, architecto accusamus quaerat minus! Praesentium, eos laborum hic at blanditiis nostrum quae dolorum
    reiciendis ad.')

@section('css_js')
    <style>
        .mainDiv {
            height: auto;
            padding: 0.5rem
        }

        @media (min-width: 991.5px) {
            .mainDiv {
                height: 100vh;
            }
        }
    </style>
@endsection


@section('formInputs')

    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Name of Project :</label>
                        <input type="text" placeholder="Write here..." name="projectName" class="input">
                        @error('projectName')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-2 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Months Used :</label>
                        <input type="text" placeholder="Write here..." name="monthsUsed" class="input">
                        @error('monthsUsed')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-2 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Days Used :</label>
                        <input type="text" placeholder="Write here..." name="daysUsed" class="input">
                        @error('daysUsed')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Category of Project :</label>
                        <select name="projectCategory" id="" class="input">
                            <option value="" selected disabled>Select your category</option>
                            @foreach ($categoryData as $item)
                                <option value="{{ $item->categories_id }}">{{ $item->categories_name }}</option>
                            @endforeach
                        </select>
                        @error('projectCategory')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-8 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Project Description :</label>
                        <textarea placeholder="Write here..." name="projectDescription" class="input" rows="8"></textarea>
                        @error('projectDescription')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Moto of the Project :</label>
                        <textarea placeholder="Write here..." name="projectMoto" class="input" rows="8"></textarea>
                        @error('projectMoto')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Project Background Image :</label>
                        <input type="file" placeholder="Write here..." name="projectBgImage" class="input">
                        @error('projectBgImage')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Project Image :</label>
                        <input type="file" placeholder="Write here..." name="projectImage" class="input">
                        @error('projectImage')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Github Repositary Link :</label>
                        <input type="text" placeholder="Write here..." name="githubLink" class="input">
                        @error('githubLink')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Live Preview Link :</label>
                        <input type="text" placeholder="Write here..." name="liveLink" class="input">
                        @error('liveLink')
                            <span class="errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 px-2 my-2">
                <div class="inputContainers">
                    <div class="coolinput">
                        <label for="input" class="text">Languages Used :</label>
                        <div class="languagesContainers d-flex justify-content-around flex-wrap">
                            {{-- loop of lnguages --}}
                            @foreach ($languageData as $item)
                                <div class="m-2">
                                    <label for="{{ $item->language_name }}"
                                        class="languageCheckBoxLabel me-1">{{ $item->language_name }}</label>
                                    <input type="checkbox" name="languages[]" class="language"
                                        id="{{ $item->language_name }}" value="{{ $item->language_id }}">
                                </div>
                            @endforeach
                            {{-- loop of lnguages --}}
                        </div>
                        @error('languages')
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


    <script>
        Swal.fire({
            title: "<strong>Keep in Mind</strong>",
            icon: "info",
            html: `
                    The fields 
                    <b><span class="text-danger">Project Name , Project Category , Github Link , Live Preview Link</span></b> are not editable
                `
        });
    </script>
@endsection
