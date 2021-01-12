<!DOCTYPE html>
<!-- Julien Ngo Jun Ang 19007457 -->
<?php
session_start();
include("dbFunctions.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Add An Exercise</title>
        <style>


            .slider {
                -webkit-appearance: none;
                width: 100%;
                height: 25px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                appearance: none;
                width: 25px;
                height: 25px;
                background: #4CAF50;
                cursor: pointer;
            }

            form { 
                margin: 0 auto; 
                width:500px;
                padding: 30px;
                text-align: center;
                margin-top: 10%;
                border: 2px solid yellow;
            }
        </style>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <div class="input-group">
            <form action="doAddExercise.php" method="POST">
                <label>Enter your exercise and its duration</label><br>
                <label for="eType">Exercise Type:</label>
                <select id="eType" name="exercisetype">
                    <option value="Walk">Walk</option>
                    <option value="Run">Run</option>
                    <option value="Cycle">Cycle</option>
                </select>
                <br/><br/>
                <input type="range" min="5" max="120" value="5" class="slider" id="duration" name="durationSlideValue">
                <p>Duration: <span id="durationValue" name="dValue"></span> minutes</p>
                <script>
                    var slider = document.getElementById("duration");
                    var output = document.getElementById("durationValue");
                    output.innerHTML = slider.value;

                    slider.oninput = function () {
                        output.innerHTML = this.value;
                    };
                </script>

                <input type="submit" name="Submit">
            </form>
        </div>
    </body>
</html>
<!-- Julien Ngo Jun Ang 19007457 -->