<style>
    .imgContainer {

        margin: 10px;
        position: relative;
        width: 80%;
        /* background-color: yellow; */

    }

    .imgContainer>img {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 1.5rem;
        width: 100%;
    }
</style>







<div class="container-fluid " id='hobby'>
    <div class="container">
        <div class="row">


            <div class="col-lg-6 d-flex justify-content-center my-auto  px-0 px-lg-5 imgDiv" data-aos="zoom-in-up">
                <div class="imgContainer">
                    <img src="{{ asset('Images/hobbies/hobbies.gif') }}" alt="" />
                </div>
            </div>



            <div class="col-lg-6 d-flex justify-content-center flex-column px-3 px-lg-5" data-aos="zoom-in-up">
                <x-section-header heading="Hobbies" subHeading="My field of mind refreshment & break"
                    icon="fa-solid fa-champagne-glasses" />



                <div class="mt-5 cardContent" >

                    <div class="row">
                        @foreach ($hobbyData as $hobby)
                            <div class="col-md-6 d-flex justify-content-center my-3" data-aos="zoom-in-up">
                                <x-hobby-card :hobbyImage="$hobby->hobby_image" :caption="$hobby->hobby_name" />
                            </div>
                        @endforeach
                    </div>
                    
                </div>


            </div>





        </div>
    </div>
</div>
