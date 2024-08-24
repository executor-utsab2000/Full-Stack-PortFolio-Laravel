<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio of a Web developer">
    <meta name="author" content="Utsab Sarkar">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Jquery, Mysql, PHP, Web Developer, Portfolio">
    @yield('css_js')
    <style>
        .container {
            margin-top: 1rem;
            padding: 3rem 0.6rem !important;
            margin-bottom: 5rem;
        }
    </style>

    @include('Components.Fixed.CDN')
    <link rel="shortcut icon"
        href="https://cdni.iconscout.com/illustration/premium/thumb/coder-illustration-download-in-svg-png-gif-file-formats--programmer-developer-developing-programming-businex-colorful-pack-business-illustrations-2895977.png?f=webp"
        type="image/x-icon">
    <title>𝐔𝗍𝗌αᑲ 𝐒α𝗋𝗄αr || @yield('subTitle') </title>
</head>

<body>
    @include('Components.Fixed.navbar')

    <div class="container-fluid px-0">

        @yield('content')

    </div>

    @include('Components.Fixed.footer')

</body>

</html>
