<style>
    .menuDiv {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 5;
    }

    .menuDiv button {
        padding: 8px 13px;
        border-radius: 50%;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background-color: #ffba08;
        font-size: 1.1rem;
        color: red;
    }

    .menuDiv button:hover {
        background-color: #ffba08;
    }

    .menuBarSide {
        max-width: 320px !important;
    }

    .menuBarSide .offcanvas-header {
        padding-bottom: 1.85rem;
        border-bottom: 1.5px solid #e3d5ca;
        /* background-color: #fefae0; */
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;
    }

    .menuBarSide .offcanvas-header img {
        width: 4vw;
        min-width: 50px;
        filter: drop-shadow(5px 5px 6px #000000);
    }


    .menuBarSide .offcanvas-header span div:first-child {
        font-family: "Bungee Tint", sans-serif;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .menuBarSide .offcanvas-header span div:last-child {
        font-family: "Lilita One", sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .menuBarSide .offcanvas-body .menuTabs {
        font-family: "Nerko One", cursive;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        font-weight: 700;
        font-size: 1.1rem;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
        display: flex;
        justify-content: space-between;
        color: #6c757d;
        letter-spacing: 1px;
        text-transform: capitalize;
    }


    .menuBarSide .offcanvas-body .menuTabs .icon {
        border-radius: 50%;
        display: flex;
        justify-content: center;
        place-items: center;
        height: 40px;
        width: 40px;
        background-color: #4cc9f0;
        color: white;
    }

    .menuBarSide .offcanvas-body .menuTabs:hover {
        background-color: #ede0d4;
        color: black;
    }
</style>

{{-- ----------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- ----------------------------------------------------------------------------------------------------------------------------------- --}}
{{-- ----------------------------------------------------------------------------------------------------------------------------------- --}}



<div class="menuDiv">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>


<div class="offcanvas offcanvas-end menuBarSide" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <div class="d-flex">
            <img src="https://png.pngtree.com/png-clipart/20240202/original/pngtree-alphabet-u-written-down-with-gold-png-image_14215548.png"
                alt="" class="img-fluid">
            <span class="ms-2">
                <div>admin panel</div>
                <div>menu bar</div>
            </span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <a href="{{ route('admin') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa fa-dashboard" aria-hidden="true"></i>
                </span>
                <span class="me-2 my-2">Dashboard</span>
            </div>
        </a>

        <a href="{{ route('language.index') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-language"></i>
                </span>
                <span class="me-2 my-2">languages known</span>
            </div>
        </a>

        <a href="{{ route('education.index') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-user-graduate"></i>
                </span>
                <span class="me-2 my-2">education</span>
            </div>
        </a>

        <a href="{{ route('category.index') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-list"></i>
                </span>
                <span class="me-2 my-2">categories</span>
            </div>
        </a>

        <a href="" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-diagram-project"></i>
                </span>
                <span class="me-2 my-2">projects</span>
            </div>
        </a>

        <a href="{{ route('hobby.index') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-gamepad"></i>
                </span>
                <span class="me-2 my-2">hobbies</span>
            </div>
        </a>

        <a href="{{ route('social.index') }}" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-hashtag"></i>
                </span>
                <span class="me-2 my-2">socials</span>
            </div>
        </a>

        <a href="" class="nav-link">
            <div class="menuTabs my-2">
                <span class="icon my-auto">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <span class="me-2 my-2">contact</span>
            </div>
        </a>

    </div>
</div>
