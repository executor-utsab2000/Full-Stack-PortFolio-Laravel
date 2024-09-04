console.log(contactInfoData);

// convert php data to js data
// const chartData = @json($chartData);

const chartContact = document.getElementById("contactInfoDataChart");
chartData.forEach((elm) => {
    languageNameArray.push(elm.language_name);
    languagePercentageArray.push(elm.language_knowledge);
});
// function hexCodeGenerate(){

// }

new Chart(chartContact, {
    type: "bar",
    data: {
        labels: ["Total" , 'Contacted' , 'Not Contacted'],
        datasets: [
            {
                label: "Contact Users",
                data: [contactInfoData.total , contactInfoData.contacted , contactInfoData.notContacted],
                borderWidth: 2,
                backgroundColor:['#ef233c' , '#ffbe0b' , '#3a86ff']
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
