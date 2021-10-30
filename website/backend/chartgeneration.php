<?php

function chart($name,$dates,$values){
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
            labels:'.$dates.',
            datasets: [{
                label: "Evolution du portfolio : '.$name.'",
                data: '.$values.',
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