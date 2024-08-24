<style>
    .socialImage {
        width: 10rem !important;
        filter: drop-shadow(rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset) !important;

    }
</style>




<div class="container-fluid my-4" id='education'>
    <div class="container">
        <div class="row">

            <div class='col-lg-6 d-flex justify-content-center flex-column my-auto mt-2 mt-lg-0 px-0 px-lg-5 imgDiv'>
                <x-section-header heading="Socials" subHeading=" Social Media platforms where you can get in touch with me"
                    icon="fa-solid fa-thumbs-up" />

            <div class="row socialIconDiv my-3">
                @foreach ($socialData as $social)
                    <div class="col-6 d-flex justify-content-center my-3">
                            <a href="{{ $social->social_link }}" target='_blank'>
                                <img src='{{ asset("Images/Socials/$social->social_image") }}'
                                    class="img-fluid socialImage" />
                            </a>
                    </div>
                @endforeach
            </div>

            </div>



            <div class='col-lg-6 d-flex justify-content-center my-auto mt-2 mt-lg-0 px-0 px-lg-5 imgDiv'>
                <div class='imgContainer'>
                    <img src="{{ asset('Images/Socials/socials.jpg') }}" alt="" class="img-fluid" />
                </div>
            </div>





        </div>
    </div>
</div>
