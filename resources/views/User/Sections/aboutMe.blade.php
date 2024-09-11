<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap');


    .desc {
        color: #adb5bd;
        font-family: 'Kanit', sans-serif;
        font-size: 0.8rem;
        letter-spacing: 1px;
        word-spacing: 2px;
        text-align: justify;
    }



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


    .imgContainer>div {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        overflow: hidden;
        position: absolute;
        height: 40%;
        width: 30%;
        /* border: 2px solid black; */
        bottom: -10%;
        right: -10%;
        border-radius: 50%;

    }

    .img2 {
        height: 100%;
        width: 100%;
    }
</style>

<div class="container-fluid " id='about'>
    <div class="container">
        <div class="row">



            <div class='col-lg-6 d-flex justify-content-lg-center my-auto  px-0 px-lg-5 imgDiv' data-aos="zoom-in-up">
                <div class='imgContainer'>
                    <img src="{{ asset('Images/aboutVideo.gif') }}" alt="" />
                    <div>
                        <img src="{{ asset('Images/animatedTxt.gif') }}" alt="" class='img2' />
                    </div>
                </div>
            </div>



            <div class="col-lg-6 d-flex justify-content-center flex-column px-3 px-lg-5" data-aos="zoom-in-up">

                <x-section-header 
                        heading="about me" 
                        subHeading="A dedicated Front-end Developer based in WestBengal, India" 
                        icon="fa-solid fa-map-pin" 
                />


                <div class='mt-5 desc' data-aos="zoom-in-up">
                    <p>Creative and detail-oriented Web Designer with a strong passion for creating visually stunning
                        and user-friendly websites being well versed with the knowledge I have gained and am confident
                        in my field. I also designed several websites in my Project some of which are mentioned below. I
                        will always give my best to my company. Adapt multitasker with the ability to bring innovative
                        and eye-catching designs to complete the project with efficiency and accuracy within the
                        stipulated time. Able to work well independently or as a member of a professional web design
                        team.</p>
                </div>
            </div>





        </div>
    </div>
</div>
