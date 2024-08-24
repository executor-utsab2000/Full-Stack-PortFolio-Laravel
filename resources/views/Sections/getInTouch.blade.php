<style>
    .content i {
        font-size: 3.5rem;
        color: #3a86ff;
    }

    .content p:nth-child(1) {
        color: #3a86ff;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 1px;
    }

    .content p:nth-child(2) {
        color: #6c757d;
        font-weight: 600;
        font-size: 0.8rem;
    }


    .contactBtn button{
        text-transform: capitalize;
        font-weight: 700;
        font-size: 0.8rem;
        padding: 1rem 3rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background-color: #74c69d;
        color: #1b4332;
    }
</style>





<div class="container-fluid" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-12 d-flex justify-content-center flex-column">
                <x-section-header heading="Contact" subHeading=" Don't be shy, Hit me up !!"
                    icon="fa-solid fa-hand-point-down" />
            </div>


            <div class="container w-75">
                <div class="row px-0 mx-0">
                    <div class="col-lg-6 content">
                        <div class="row">
                            <div class="col-6 my-auto d-flex justify-content-center ">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column">
                                <p>Location</p>
                                <p>Kolkata, West Bengal, India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 content">
                        <div class="row">
                            <div class="col-6 my-auto d-flex justify-content-center ">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                            <div class="col-6 d-flex justify-content-center flex-column">
                                <p>email</p>
                                <p>utsab********@*****.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 my-3 d-flex justify-content-center contactBtn">
                <a href="" target="__blank">
                    <button class="btn">
                        Click here to get in touch
                        <i class="fa-solid fa-hand-point-right ms-2"></i>
                    </button>
                </a>
            </div>














        </div>
    </div>
</div>
