<!DOCTYPE html>
<!-- Julien Ngo Jun Ang 19007457 -->



<!-- Details for logging in:

        Username: TestAcc
        Password: Test12345


-->


<?php
session_start();
include("dbFunctions.php");
include 'navbar.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .carousel-inner{
                width: 600px;
            }
            .carousel-item img{
                width: 594px;
                height: 344px;
            }
            #myCarousel{
                width: 600px;
                height: 350px;
                border: 3px solid green;
                margin: 0 auto;
                margin-top: 15px;
            }
            .card {
                background-color: darksalmon;
                border-radius: 5px;
                color: black;
                height: 200px;
                width: 260px;
                padding: 10px;
            }
            body{
                background-image: url(./images/ych.png);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size:cover;
            }
        </style>
        <title>Yishun Community Hospital</title>
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/ych.png">
                </div>
                <div class="carousel-item">
                    <img src="images/ych2.jpg">
                </div>
                <div class="carousel-item">
                    <img src="images/ych3.jpg">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col col-sm-6 col-lg-3">            
                    <div class="card">
                        Yishun Community Hospital
                        <hr>
                        <p style="font-weight:bold; font-size: 15px; text-align: center;">COVID-19 Updates</p>
                        <p class="card-text" style="font-size:18px;">Head <a href='https://www.moh.gov.sg/covid-19' target="_blank">here</a> to receive the latest updates on the pandemic!</p>
                    </div>
                </div>

                <div class="col col-sm-6 col-lg-3">            
                    <div class="card">
                        Yishun Community Hospital
                        <hr>
                        <p style="font-weight:bold; font-size: 15px; text-align: center;">Want to find out the latest news?</p>
                        <p class="card-text" style="font-size:18px;">Head to our <a href='https://www.facebook.com/YishunCommunityHospital/' target="_blank">Facebook</a> to find out more!</p>
                    </div>
                </div>
                <div class="col col-sm-6 col-lg-3">            
                    <div class="card">
                        Yishun Community Hospital
                        <hr>
                        <p class="card-text" style="font-size:18px; text-align: center; margin-top: 20px;"><a href='https://www.yishuncommunityhospital.com.sg/contactus/Pages/Contact-Us-Directions.aspx'>Contact Us</a></p>
                    </div>
                </div>
                <div class="col col-sm-6 col-lg-3">            
                    <div class="card">
                        Yishun Community Hospital
                        <hr>
                        <p class="card-text" style="font-size:18px;">Send us your <a href='https://www.ktph.sg/feedback/home/index/3'>feedbacks</a> here!</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- Julien Ngo Jun Ang 19007457 -->