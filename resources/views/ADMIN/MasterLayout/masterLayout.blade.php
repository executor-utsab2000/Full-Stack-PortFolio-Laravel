<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || @yield('pageName')</title>
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminPagesGeneral.css') }}">
    @yield('css_js')
    @include('Components.Fixed.CDN')
</head>

<body>

    <div class="container-fluid">
        {{-- nav section start --}}
        <div class="row">
            <div class=" ps-3 adminAllPageTopNavbar d-flex">
                <img src="https://png.pngtree.com/png-clipart/20240202/original/pngtree-alphabet-u-written-down-with-gold-png-image_14215548.png"
                    alt="">
                <span class="navContent ms-3 my-auto">
                    <div>Portfolio</div>
                    <div>Utsab Sarkar</div>
                    <div>admin Panel</div>
                </span>
            </div>
        </div>

        @include('ADMIN.Components.Fixed Components.navbar')
        {{-- nav section end --}}


        {{-- --------------------------------------------------------------------------------------------------------------------------- --}}
        {{-- --------------------------------------------------------------------------------------------------------------------------- --}}

        <div class="container">
            <div class="adminPageHeader">@yield('pageHeader')</div>



            <div class="adminContent">
                @yield('adminContent')
            </div>

        </div>
        {{-- ----------------------------------------------------- --}}

        <div class="row mt-5">
            @include('Components.Fixed.footer')
        </div>
    </div>
</body>

</html>
