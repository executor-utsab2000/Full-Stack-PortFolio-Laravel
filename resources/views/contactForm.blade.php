<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Portfolio of a Web developer">
    <meta name="author" content="Utsab Sarkar">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Jquery, Mysql, PHP, Web Developer, Portfolio">

    <link rel="stylesheet" href="CSS/ContactForm.css">
    <link rel="stylesheet" href="CSS/inputField.css">

    @include('Components.Fixed.CDN')
    <link rel="shortcut icon"
        href="https://cdni.iconscout.com/illustration/premium/thumb/coder-illustration-download-in-svg-png-gif-file-formats--programmer-developer-developing-programming-businex-colorful-pack-business-illustrations-2895977.png?f=webp"
        type="image/x-icon">
    <title>𝐔𝗍𝗌αᑲ 𝐒α𝗋𝗄αr || 𝗖𝗼𝗻𝘁𝗮𝗰𝘁 𝗙𝗼𝗿𝗺 </title>
</head>

<body>
    {{-- {{ $errors }} --}}
    <div class="container-fluid px-0">
        <div class="contactMain">
            <div class="innerDiv">
                <div class="row">
                    <div class="col-lg-7">

                        <div class="heading">lets's chat</div>
                        <div class="subHeader">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sit perferendis nisi omnis
                            saepe
                            aspernatur rerum sequi aperiam ad reiciendis?
                        </div>
                        <div class="socialMedia my-2">
                            <a href="">
                                <button class="btn">
                                    <img src="{{ asset('Images/Socials/social media contactform/in.png') }}"
                                        alt="" class="img-fluid socialBtn">
                                </button>
                            </a>
                            <a href="">
                                <button class="btn">
                                    <img src="{{ asset('Images/Socials/social media contactform/fb.png') }}"
                                        alt="" class="img-fluid socialBtn">
                                </button>
                            </a>
                            <a href="">
                                <button class="btn">
                                    <img src="{{ asset('Images/Socials/social media contactform/insta.png') }}"
                                        alt="" class="img-fluid socialBtn">
                                </button>
                            </a>
                        </div>

                        <div class="formContainer mt-2">
                            <form action="{{ route('userFormSubmit') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12 my-2">
                                        <div class="inputContainers">
                                            <div class="coolinput">
                                                <label for="input" class="text">Name (IN CAPS):</label>
                                                <input type="text" placeholder="Write here..." name="userName"
                                                    class="input">
                                                @error('userName')
                                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-2">
                                        <div class="inputContainers">
                                            <div class="coolinput">
                                                <label for="input" class="text">Email :</label>
                                                <input type="text" placeholder="Write here..." name="email"
                                                    class="input">
                                                @error('email')
                                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-2">
                                        <div class="inputContainers">
                                            <div class="coolinput">
                                                <label for="input" class="text">Contact Number:</label>
                                                <input type="text" placeholder="Write here..." name="contactNumber"
                                                    class="input">
                                                @error('contactNumber')
                                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 my-2">
                                        <div class="inputContainers">
                                            <div class="coolinput">
                                                <label for="input" class="text">Residence :</label>
                                                <input type="text" placeholder="Write here..." name="residence"
                                                    class="input">
                                                @error('residence')
                                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="inputContainers">
                                            <div class="coolinput">
                                                <label for="input" class="text">Reason of Query (Max 50
                                                    words):</label>
                                                <textarea type="text" rows="5" placeholder="Write here..." name="query" class="input query"></textarea>
                                                @error('query')
                                                    <span class="errorMsg text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="inputContainers">
                                            <input type="submit" value="Submit" class="submitBtn btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>










                    </div>



                    <div class="col-lg-5 imageContainer d-none d-lg-block my-auto">
                        <img src="{{ asset('Images/contactform.png') }}" alt="" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
