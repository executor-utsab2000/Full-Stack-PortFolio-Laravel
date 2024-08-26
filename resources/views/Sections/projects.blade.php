<style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,500;0,600;0,800;1,500;1,600;1,800&family=Titillium+Web:wght@400;600&display=swap');


    .navTabs {
        border: none;
    }

    .navTabs>li>button {
        font-size: 0.8rem;
        /* margin: 0 1rem; */
        border: none !important;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
        color: #9db4c0;
    }

    .navTabs>li>button:hover {
        border-bottom: 2px solid #9db4c0 !important;
    }
</style>



<div class="container-fluid" id="projects">
    <div class="container">
        <div class="row mt-4">


            <div class='col-12 d-flex justify-content-center flex-column my-auto mb-4' data-aos="zoom-in-up">
                <x-section-header heading="projects" subHeading=" Each piece of projects is solely a creation of myself"
                    icon="fa-solid fa-puzzle-piece" />
            </div>



            <div class="col-12" id="myTabContent" data-aos="zoom-in-up">
                <div className="col-12">
                    <ul class='nav nav-tabs d-flex justify-content-between justify-content-lg-start navTabs'
                        id="myTab" role="tablist">
                        @php
                            $tabsIfActive = 0;
                        @endphp
                        @foreach ($projects['categoryNames'] as $categoryName)
                            <li class="nav-item me-0 me-md-3" role="presentation">
                                <button class="nav-link {{ $tabsIfActive == 0 ? 'active' : '' }} " id="profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#{{ strtolower($categoryName->categories_name) }}" type="button" role="tab"
                                    aria-controls="responsive"
                                    aria-selected="false">{{ $categoryName->categories_name }}</button>
                            </li>
                            @php
                                $tabsIfActive++;
                            @endphp
                        @endforeach


                    </ul>
                </div>
            </div>
            
            <x-projectTabs />






















        </div>
    </div>
</div>


{{-- {{ dd($projects['categoryNames']) }} --}}
{{-- @foreach ($projects['categoryNames'] as $item)
    <h1>
        {{ $item->categories_name }}
    </h1>
@endforeach --}}
{{-- {{ dd($projects['category_project_data']) }} --}}
