    <style>
        .LDcontainer {
            position: relative;
            margin-top: 10rem !important;
        }

        .txt1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .txt2 {
            font-size: 1rem;
        }

        .icons span i {
            color: black;
            font-size: 1.5rem;
        }

        svg {
            position: relative;
            top: -6rem;
            filter: drop-shadow(rgba(0, 0, 0, 0.35) 0px 5px 20px);
        }


        .techarea {
            margin-top: 4rem;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1px;
        }


        .techarea img {
            height: 1.3rem;
        }


        .resume button {
            padding: 0.6rem 2rem;
            border-radius: 10px;
            outline: none;
            border: #ced4da 2px solid;
            letter-spacing: 1px;
            font-size: 1rem;
            box-shadow: rgba(67, 36, 36, 0.24) 0px 3px 8px;
            transition: all 0.3s;
        }

        .resume button:hover {
            transform: scale(0.95);
        }


        .imageLangLogo{
            filter: drop-shadow(5px 5px 5px #000000);
        }
    </style>


    <div class="container-fluid " id='landing'>
        <div class='container w-75 LDcontainer'>
            <div class="row">


                <div class="col-lg-6 d-flex justify-content-center order-1 order-lg-0">
                    <div>
                        <p class='txt1'>𝗙𝘂𝗹𝗹 𝗦𝘁𝗮𝗰𝗸 𝗗𝗲𝘃𝗲𝗹𝗼𝗽𝗲𝗿</p>
                        <p class='txt2'>𝐇𝐢𝐢 , 𝐈'𝐦 𝐔𝐭𝐬𝐚𝐛 𝐒𝐚𝐫𝐤𝐚𝐫, 𝐚 𝐩𝐚𝐬𝐬𝐢𝐨𝐧𝐚𝐭𝐞
                            𝗙𝘂𝗹𝗹 𝗦𝘁𝗮𝗰𝗸 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 𝐛𝐚𝐬𝐞𝐝 𝐢𝐧 𝐖𝐞𝐬𝐭 𝐁𝐞𝐧𝐠𝐚𝐥, 𝐈𝐧𝐝𝐢𝐚
                            <i class="fa-solid fa-map-pin mx-2 mt-1" style="color:red; font-size: 1.5rem"></i>
                        </p>

                        <p class='icons'>
                            <span>
                                <a target="__blank" href="https://github.com/executor-utsab2000"><i
                                        class="fa-brands fa-github mx-2"></i></a>
                            </span>
                            <span>
                                <a target="__blank" href="https://www.linkedin.com/in/utsab-sarkar-971bb5184/"><i
                                        class="fa-brands fa-linkedin mx-2"></i></a>
                            </span>
                        </p>

                        <div class='row techarea'>
                            <div class="col-3 my-auto">
                                <span>𝗧𝗲𝗰𝗵 𝗦𝘁𝗮𝗰𝗸</span>
                                <span class="mx-3"><i class="fa-solid fa-grip-lines-vertical"></i></span>
                            </div>
                            <div class="col-9 ">
                                <div class="row">
                                    @foreach ($languages as $language)
                                    <div class="col-2 mb-4 d-flex justify-content-center">
                                        <img src='{{ "Images/language/$language->language_image"}}' alt="" class=" imageLangLogo img-fluid">
                                    </div>
                                @endforeach
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <a href="{{ asset('/Files/My Resume.pdf') }}" class='nav-item resume'
                                            target="__blank">
                                            <button>𝐃𝐨𝐰𝐧𝐥𝐨𝐚𝐝 𝐑𝐞𝐬𝐮𝐦𝐞 </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6 d-flex justify-content-center order-0 order-lg-1">
                    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" height="500">
                        <defs>
                            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1"
                                y2="0">
                                <stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop>
                                <stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <mask id="mask1" mask-type="alpha">
                            <path fill="url(#sw-gradient)"
                                d="M25.4,-31C31.2,-25.3,33.1,-15.7,33.9,-6.6C34.7,2.5,34.4,11.1,30.5,17.4C26.6,23.7,19.1,27.7,10.8,31.5C2.6,35.3,-6.4,38.8,-14.4,37C-22.3,35.2,-29.3,28.1,-32.8,19.9C-36.4,11.8,-36.5,2.7,-35.4,-6.7C-34.3,-16,-31.9,-25.6,-25.8,-31.3C-19.7,-36.9,-9.8,-38.7,0,-38.6C9.8,-38.6,19.5,-36.7,25.4,-31Z"
                                width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                style="transition: all 0.3s ease 0s"></path>
                        </mask>
                        <g mask="url(#mask1)">
                            <path fill="url(#sw-gradient)"
                                d="M25.4,-31C31.2,-25.3,33.1,-15.7,33.9,-6.6C34.7,2.5,34.4,11.1,30.5,17.4C26.6,23.7,19.1,27.7,10.8,31.5C2.6,35.3,-6.4,38.8,-14.4,37C-22.3,35.2,-29.3,28.1,-32.8,19.9C-36.4,11.8,-36.5,2.7,-35.4,-6.7C-34.3,-16,-31.9,-25.6,-25.8,-31.3C-19.7,-36.9,-9.8,-38.7,0,-38.6C9.8,-38.6,19.5,-36.7,25.4,-31Z"
                                width="100%" height="100%" transform="translate(50 50)" stroke-width="0"
                                style="transition: all 0.3s ease 0s"></path>
                            <image href="{{ asset('Images/landingPic.png') }}" x="-2" y="11.5" height="100"
                                width="100" style="height: 5rem" />
                        </g>
                    </svg>

                    {{--     
                    <div class='socialIcons'>
                        <i class="fa-brands fa-linkedin mx-2"></i>
                    </div> --}}



                </div>
            </div>
        </div>
    </div>
