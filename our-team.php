<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Tech Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('php-layout-files/css-links.php'); ?>

    <style>
        .center-div .front-logo {
            padding: 10px;
        }

        .center-div .front-logo img {
            width: 230px;
            margin-left: auto;
            margin-right: auto;
            display: block;
            border-radius: 50%;
            border: 10px solid #008080;
        }

        .center-div .front-logo img:hover {
            background-color: #008080;
            transition: all 0.5s
        }

        .center-div .details .heading {
            font-size: 25px;
            font-weight: 500;
        }

        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');


        .card {
            border-radius: 20px;
            height: 500px;
            background: #eeeeee;
            box-shadow: 30px 30px 60px #cacaca, -20px -20px 60px #ffffff;
            border: 2px solid #008080;
        }

        .card img {
            border-radius: 10px!important;
            width: 140px!important;
            height: 140px!important;
            background: linear-gradient(145deg, #d6d6d6, #ffffff);
            box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #ffffff
        }

        .neo-button {
            width: 40px;
            height: 40px;
            outline: 0 !important;
            cursor: pointer;
            color: #fff;
            font-size: 15px;
            border: none;
            margin-right: 10px;
            border-radius: 50%;
            background: linear-gradient(145deg, #d6d6d6, #ffffff);
            box-shadow: 20px 20px 60px #cacaca, -20px -20px 60px #ffffff
        }

        .neo-button:active {
            border-radius: 50%;
            background: linear-gradient(145deg, #d6d6d6, #ffffff);
            box-shadow: inset 20px 20px 60px #cacaca, inset -20px -20px 60px #ffffff
        }

        .fa-facebook {
            color: #3b5998
        }

        .fa-linkedin {
            color: #0077b5
        }

        .fa-google {
            color: #dc4e41
        }

        .fa-youtube {
            color: #cd201f
        }

        .fa-twitter {
            color: #55acee
        }
    </style>
</head>

<body>
    <?php include_once('scripts/mql_connection.php'); ?>
    <?php include_once('php-layout-files/header.php'); ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div p-2">
                    <div class="jumbotron">
                        <div class="front-logo">
                            <img src="images/logo-01.png" alt="" srcset="">
                        </div>
                        <div class="details">
                            <p class="heading text-center ">Meet Our Team</p>
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                        <div class="card p-3 py-4 mt-5 mb-5">
                                            <div class="text-center"> <img src="images/rahat.jpg" width="100" class="rounded-circle">
                                                <h3 class="mt-2">Rahat Uddin Azad</h3> <span class="mt-1 clearfix">Web Developer</span> <span class="mt-1 clearfix">Data Analyst</span> <small class="mt-2">Institute Of Information Technology,Noakhali Science And Technology University</small>
                                                <div class="social-buttons mt-2"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mx-auto">
                                        <div class="card p-3 py-4 mt-5">
                                        <div class="text-center"> <img src="images/Khair.jpg" >
                                                <h3 class="mt-2">Khair Ahmmed</h3> <span class="mt-1 clearfix">Web Developer</span> <span class="mt-1 clearfix">Data Analyst</span> <small class="mt-2">Institute Of Information Technology,Noakhali Science And Technology University</small>
                                                <div class="social-buttons mt-2"> <button class="neo-button"><i class="fa fa-facebook fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> <button class="neo-button"><i class="fa fa-google fa-1x"></i> </button> <button class="neo-button"><i class="fa fa-youtube fa-1x"></i> </button> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="btn-group mx-auto" role="group" aria-label="">

                                <a href="https://www.w3schools.com/cpp/" class="btn btn-success bg-dark text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.java.com/en/" class="btn btn-success bg-dark mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.python.org/" class="btn btn-success bg-dark"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <?php
            include('php-layout-files/right-side-bar.php')
            ?>
        </div>
    </section>


    <?php
    include('php-layout-files/footer.php')
    ?>
    <?php include_once('php-layout-files/js-links.php'); ?>
</body>

</html>