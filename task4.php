<?php

$employees = [
    ["name" => "Ahmed", "salary" => 5000, "age" => 30 , "insurance" => "Yes"],
    ["name" => "Sara"  , "salary" => 6000, "age" => 28 , "insurance" => "No" ],
    ["name" => "Ali"  , "salary" => 4500, "age" => 35 , "insurance" => "Yes"] 
];

?>

<html>  
    <head>
        <style>
           body{
                background-color: #b39d80;
                border-top: 100px solid #54423b;
                border-left: 50px groove #54423b;
                border-right: 50px groove #54423b;
            }
            .all {
                opacity: 0;
                display: flex; 
                animation: alll 1s ease 4s normal forwards;
            }

            @keyframes alll {
                to {
                    opacity: 1;
                }
            }

            .card {
                border-radius: 50%;
                background-color: burlywood;
                width: calc(100% / 3);
                height: 200px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                transform:  scale(0.7);
                animation: cardd 1s ease 4.5s  normal forwards;
            }

            @keyframes cardd {
                to {
                    transform:translateY(-400px) scale(0.9);
                }
            }
           .container {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                  
              }

            .start {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background-color: white;
                display: flex;
                align-items: center;
                text-align: center;
                animation: startt 3s ease 1s normal forwards;
            }
        
         
            @keyframes startt {
                0% {
                    transform: rotate(0deg) scale(1);
                }
                50% {
                    transform: rotate(1440deg) scale(0.25);
                }
                100% {
                    transform: rotate(1440deg) scale(1);
                    opacity: 0;
                    visibility: hidden;
                }
            }

            img {
                width: 75px;
                height: 75px;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="start">WELCOME!, TO OUR WORLD</div>
        </div>
        <div class="all">
            <?php foreach ($employees as $person): ?>
                <div class="card">
                    <img src="https://c1.staticflickr.com/9/8724/16976740485_fe1579c5a5_b.jpg" alt="man" />
                    <?php foreach ($person as $key => $value): ?>
                        <div>
                            <?php echo "$key : $value"; ?>
                            <br>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
