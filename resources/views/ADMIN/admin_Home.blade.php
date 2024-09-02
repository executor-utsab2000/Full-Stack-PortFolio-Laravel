<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('CSS/ADMIN/adminStyle.css') }}">
    @include('Components.Fixed.CDN')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container-fluid adminHome">
        <div class="container">

            <div class="row my-2">
                <div class="col lg-5">
                    <div class="contentContainer adminTopLeftHeader py-3">
                        <div class="row ">
                            <div class="col-md-9 my-auto">
                                <div class="mainHeader">Admin DashBoard</div>
                                <div class="subHeader">Full Stack Web Developer</div>
                                <div class="header3">Utsab Sarkar</div>
                            </div>
                            <div class="col-md-3 my-auto">
                                <div class="imgContainer">
                                    <img src="{{ asset('Images/landingPic.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contentContainer">
                        <div class="row">
                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-language"></i>Languages Known
                                        </div>
                                        <div class="contentContent">{{ $countData['languages'] }}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-user-graduate"></i>Education
                                        </div>
                                        <div class="contentContent">{{ $countData['education'] }}</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-list"></i>Categories</div>
                                        <div class="contentContent">{{ $countData['categories'] }}</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-diagram-project"></i>Projects
                                        </div>
                                        <div class="contentContent">{{ $countData['projects'] }}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-gamepad"></i>Hobbies</div>
                                        <div class="contentContent">{{ $countData['hobbies'] }}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4  col-sm-6 my-2">
                                <a href="" class="nav-link">
                                    <div class="contentContainer rightTop">
                                        <div class="contentHeader"><i class="fa-solid fa-hashtag"></i>Socials</div>
                                        <div class="contentContent">{{ $countData['socials'] }}</div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-3">
                <div class="col-lg-9">
                    <div class="contentContainer imageChartContainer">
                        <canvas id="chartData">{{-- chart will go here --}}</canvas>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="contentContainer">
                        <div class="sectionHeader">Project per Category</div>
                        <div class="contentProjectDetails ">
                            <table class="table categoryToProject">
                                <thead>
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Project Count</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categoryToProject as $data)
                                        <tr>
                                            <td>{{ $data->categories_name }}</td>
                                            <td class="text-center">{{ $data->count }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="contentContainer mt-3">
                        <div class="sectionHeader">Recent Contact List</div>
                        <div class="contentProjectDetails">
                            <table class="table contactTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactForm as $data)
                                        <tr>
                                            <td>{{ $data->contact_user_name }}</td>
                                            <td>{{ $data->contact_user_phone }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            @include('Components.Fixed.footer')
        </div>
    </div>
</body>

<script>
    // convert php data to js data
    const chartData = @json($chartData);

    const ctx = document.getElementById("chartData");
    const languageNameArray = [];
    const languagePercentageArray = [];

    const array = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T",
        "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"
    ]


    chartData.forEach(elm => {
        languageNameArray.push(elm.language_name)
        languagePercentageArray.push(elm.language_knowledge)
    });

    console.log(languageNameArray);
    console.log(languagePercentageArray);

    // function hexCodeGenerate(){

    // }



    new Chart(ctx, {
        type: "bar",
        data: {
            labels: languageNameArray,
            datasets: [{
                label: "Name of Languages",
                data: languagePercentageArray,
                borderWidth: 2,

            }, ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>

</html>
