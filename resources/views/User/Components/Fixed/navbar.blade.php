{{-- {{ $navBarData }} --}}

<style>
    .navbar {
        position: fixed;
        top: 0;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        padding: 1rem;
        background-color: white !important;
        width: 100%;
        z-index: 10 !important;
    }

    .navBrand {
        color: black !important;
        font-size: 1.2rem;
        font-weight: 700;
        text-decoration: none;
    }

    .navbar .nav-link,
    .navbar .dropdown-item {
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 1px;
        color: black;
        text-transform: capitalize;
    }

    .navbar .nav-link:hover {
        text-decoration: underline;
        color: gray
    }

    .subMenu{
        font-size: 0.6rem !important;
    }


    @media (min-width:992px) {
        .navbar .navbar-nav {
            margin-left: 35%;
        }
    }

</style>


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand navBrand" href="#">𝘂𝘁𝘀𝗮𝗯｡𝗱𝗲𝘃</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link px-4 active" aria-current="page" href="{{ route('home') }}#top">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#about">About Me</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#skills">Skills</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#education">Education</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link px-4 dropdown-toggle" data-bs-auto-close="outside" href="{{ route('home') }}#projects" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu mt-2">
                        @foreach ($navBarData as $category)
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                    href="">{{ $category->categories_name }}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($category->projects as $project)
                                        <li><a class="nav-link subMenu" href="{{ route('projectDetailsPage' , $project->project_id) }}">{{ $project->project_name }}</a></li>
                                    @endforeach
                                </ul>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#hobby">Hobby
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#social">Socials
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-4" href="{{ route('home') }}#contact">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

{{-- @foreach ($navBarData as $category)
    <h2> {{ $category->categories_name }}</h2>


    @foreach ($category->projects as $project)
        @php
            var_dump($project)
        @endphp
    @endforeach
@endforeach --}}
