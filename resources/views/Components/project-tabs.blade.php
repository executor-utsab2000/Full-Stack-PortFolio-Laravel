<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap');



    .parentWala {
        margin-top: 2rem;
        padding: 0.5rem 2rem
    }

    .projectContainer {
        margin-top: 0.5rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        background: rgb(255, 255, 255);
        background: linear-gradient(180deg, rgba(255, 255, 255, 1) 45%, rgba(0, 0, 0, 0.5523459383753502) 96%);
    }

    .projectContainer i {
        color: #6c757d !important;
    }

    .imgContainerProj {
        border-radius: 10px;
        padding: 8px;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        display: flex;
        justify-content: center;
        background-color: white;
    }

    .image {
        width: 100%;
        height: 16rem;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .projSummary .heading {
        font-weight: 800;
        letter-spacing: 1px;
        font-family: "Archivo Black", sans-serif;
        font-size: 1.05rem;
        text-align: center;
        text-transform: uppercase;
    }

    .projSummary .description {
        font-weight: 700;
        color: #6c757d;
        font-size: 0.7rem;
        text-align: justify;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: calc(3 * 1.2em);
        /* Adjust the line height here */
        line-height: 1.2em
    }

    .projSummary .languageUsed {
        font-weight: 700;
        font-size: 0.7rem;
    }

    .projSummary .languageUsed img {
        height: 20px;
        margin: 0 0.3rem;
        filter: drop-shadow(5px 5px 7px #000000);
    }

    .btnDiv .btn {
        padding: 0.5rem 1.3rem;
        font-weight: 700;
        font-size: 0.8rem;
        color: black;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background-color: whitesmoke;
        width: 10rem;
    }

    .btnDiv i {
        font-size: 1rem;
        margin: auto
    }
</style>



{{-- {{ $count }} --}}





@php
    $orderImg = 1;
@endphp


<div class="tab-pane fade show {{ $count == 0 ? 'active' : '' }}" id="{{ $categoryName }}" role="tabpanel"
    aria-labelledby="{{ $categoryName }}-tab" tabindex="0">
    @foreach ($projectData as $item)
        <div class="parentWala" data-aos="zoom-in-up">
            <div class="projectContainer">
                <div class="row">
                    <div class="col-md-5 my-auto {{ $orderImg % 2 == 0 ? 'order-lg-2   ' : '' }}">
                        <div class="imgContainerProj">
                            <img src='{{ asset("Images/Projects Backgrounds/$item->project_backgroundImage") }}'
                                alt="" class='image'>
                        </div>
                    </div>


                    <div class="col-md-7 projSummary px-lg-5 my-auto">
                        <div class="container py-2">
                            <div class="heading mb-3">{{ $item->project_name }}</div>
                            <div class="description mb-3">{{ $item->project_description }} </div>
                            <div class="languageUsed my-5">
                                <div class="row">
                                    <div class="col-2">Language Used </div>
                                    <div class="col-1"><i class="fa-solid fa-grip-lines-vertical mx-3"></i> </div>
                                    <div class="col-md-9 my-2 my-md-0 d-flex justify-content-around flex-wrap">

                                        @foreach ($item->imageArray as $projImgs)
                                            <img src='{{ asset("Images/language/$projImgs") }}' alt=""
                                                class="img-fluid mb-2">
                                        @endforeach

                                    </div>
                                    <div class="col-8 mx-auto btnDiv mt-5 d-flex justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 d-flex justify-content-center my-2 my-md-0">
                                                <a href="" class="nav-link">
                                                    <button class="btn">
                                                        <i class="fa-brands fa-github me-2"></i></i>Source Code
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-center my-2 my-md-0">
                                                <a href="{{ route('projectDetailsPage', $item->project_id) }}"
                                                    class="nav-link">
                                                    <button class="btn">
                                                        <i class="fa-solid fa-circle-info me-2"></i>Case Study
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>













                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
            $orderImg++;
        @endphp
    @endforeach
</div>
