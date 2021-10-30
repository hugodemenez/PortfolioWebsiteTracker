<?php

function chart($name,$date,$value){
    $random_color1 =(rand(0, 255));
    $random_color2 =(rand(0, 255));
    $random_color3 =(rand(0, 255));
    echo('<center><div style="width:75%;height:50%">
    <canvas id="'.$name.'"></canvas>
    <script>
    const '.$name.' = document.getElementById("'.$name.'").getContext("2d");
    new Chart('.$name.', {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Jun", "Jul"],
            datasets: [{
                label: "Evolution du portfolio : '.$name.'",
                data: [15, 19, 3, 5, 2, 3],
                backgroundColor: "rgba('.$random_color1.', '.$random_color2.', '.$random_color3.', 1)",
                borderColor: "rgba('.$random_color1.', '.$random_color2.', '.$random_color3.', 1)",
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
    </div>
    </center>');
}



?>