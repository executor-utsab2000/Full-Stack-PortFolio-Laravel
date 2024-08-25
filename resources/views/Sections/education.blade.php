    <div class="container-fluid my-4" id='education'>
        <div class="container">
            <div class="row">


                <div class="col-lg-6 d-flex justify-content-center flex-column px-3 px-lg-5" data-aos="zoom-in-up">
                    <x-section-header heading="education" subHeading=" Education I Possess"
                        icon="fa-solid fa-graduation-cap" />

                    <div class='row mt-5 desc' data-aos="zoom-in-up">
                        <div class="accordion" id="accordionExample">

                            @foreach ($educationData as $data)
                                <x-education-accordian-component 
                                    :dataBsTarget="$data->education_id" 
                                    :educationStage="$data->education_stage" 
                                    :educationYear="$data->education_year" 
                                    :educationGrade="$data->education_grade" 
                                    :educationInstitute="$data->education_institute" 
                                    :educationHeadInstitute="$data->education_headInstitute" 
                                />
                            @endforeach

                        </div>
                    </div>
                </div>


                <div
                    class='col-lg-6 d-flex justify-content-center my-auto mt-2 mt-lg-0 px-0 px-lg-5
                    imgDiv' data-aos="zoom-in-up">
                    <div class='imgContainer'>
                        <img src="{{ asset('Images/education.gif') }}" alt="" />
                    </div>
                </div>





            </div>
        </div>
    </div>
