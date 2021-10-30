<?php

function chart($name){
    echo('<div width="50%">
    <canvas id="myChart"></canvas>
    <script>
    const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "Jun", "Jul"],
        datasets: [{
            label: "'.$name.'",
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>
    </div>');
}



?>