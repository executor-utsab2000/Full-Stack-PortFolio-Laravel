<style>
    .skillContainer {
        padding: 1.3rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
        /* background-color: #e9ecef */
        height: 25rem;
        overflow-y: scroll;
    }

    .skillContainer::-webkit-scrollbar {
        display: none;
    }

    .skillSubHeading {
        font-weight: 700;
        font-size: 1.1rem;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin-bottom: 2rem;
    }

    i {
        font-size: 1.5rem;
        color: #fca311;
    }

    .softSkills{
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 0.8rem;
    }
</style>


@php
    $softSkills = [
        'Attentive',
        'Systemetic',
        'Strong Work Ethics',
        'Multi-Tasking',
        'Cooperative',
        'Idealistic',
        'Practical',
    ];
@endphp


<div class="container-fluid my-4" id='skills'>
    <div class="container">
        <div class="row">

            <div class='col-12 d-flex justify-content-center flex-column my-auto mt-2 mt-lg-0 px-0 px-lg-5 '>
                <x-section-header heading="Skills" subHeading="Technical and Soft Skills I Aquire"
                    icon="fa-solid fa-award" />
            </div>

            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="skillContainer">
                            <div class="skillSubHeading">Soft Skills <i class="fa-solid fa-users-line ms-2"></i></div>
                            @foreach ($softSkills as $item)
                            <div class="my-3 softSkills">
                                <i class="fa-solid fa-crosshairs text-danger me-2"></i>{{ $item }}
                            </div>                                
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="skillContainer">
                            <div class="skillSubHeading">Technical Skills <i class="fa-solid fa-microchip ms-2"></i>
                            </div>
                            @foreach ($languages as $languageData)
                                <x-progress-bar :progressPercentage="$languageData->language_knowledge" :languageName="$languageData->language_name" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>










        </div>
    </div>
</div>
