    // convert php data to js data
    // const chartData = @json($chartData);

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
