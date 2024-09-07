<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || @yield('pageName')</title>
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminPagesGeneral.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminAddUpdateForm.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/inputField.css') }}">
    @yield('css_js')
    @include('Components.Fixed.CDN')
</head>

<body>

    <div class="container-fluid px-0">

        @include('ADMIN.Components.Fixed Components.navbar')
        {{-- nav section end --}}

        {{-- ----------------------------------------------------- --}}

        <div class="mainDiv">
            <div class="innerDiv">
                <div class="heading">@yield('formHeader')</div>
                <div class="subHeader">@yield('subHeader')</div>
                <div class="formContainer mt-4">
                    @yield('formInputs')
                </div>
            </div>
        </div>



        {{-- ----------------------------------------------------- --}}
    </div>

    @if (session('message'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Thank You",
                text: @json(session('message'))
            });
        </script>
    @endif
</body>

</html>
