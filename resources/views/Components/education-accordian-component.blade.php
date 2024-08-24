<style>
    .accordian {
        z-index: 0;
        overflow: hidden;
    }

    .accordian button {
        color: #0d1b2a !important;
        background-color: #dee2e6 !important;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }



    .card {
        color: #6c757d;
        height: 85%;
        padding: 2.2rem 0;
        display: grid;
        place-items: center;
        border-radius: 15px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .cardTitle {
        font-size: 1rem;
        text-transform: uppercase;
        font-weight: 700;
    }

    .cardTxt {
        font-size: 0.7rem;
        font-weight: 800;
        text-transform: uppercase;
    }
</style>

<div class="col-12 d-flex justify-content-center my-2">

    <div class='accordion-item w-100 accordian'>

        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $dataBsTarget }}"
                aria-expanded="true" aria-controls="{{ $dataBsTarget }}">
                {{ $educationStage }}
            </button>
        </h2>

        <div id="{{ $dataBsTarget }}" class="accordion-collapse collapse" data-bs-parent="#educationAcc">
            <div class="accordion-body">
                <div class="row">

                    <div class="col-6 my-2">
                        <div class='card w-100'>
                            <div class="card-body">
                                <p class='card-title cardTitle'>Year of Passing</p>
                                <p class='card-text cardTxt'>{{ $educationYear }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 my-2">
                        <div class='card w-100'>
                            <div class="card-body">
                                <p class='card-title cardTitle'>Grade obtained</p>
                                <p class='card-text cardTxt'>{{ $educationGrade }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 my-2">
                        <div class='card w-100'>
                            <div class="card-body">
                                <p class='card-title cardTitle'>instituation i studied</p>
                                <p class='card-text cardTxt'>{{ $educationInstitute }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 my-2">
                        <div class='card w-100'>
                            <div class="card-body">
                                <p class='card-title cardTitle'>board / university</p>
                                <p class='card-text cardTxt'>{{ $educationHeadInstitute }}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


</div>
