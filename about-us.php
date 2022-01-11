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
        .center-div .details .details-heading{
            font-size: 18px;
            font-weight: 600;

        }
        .center-div .details .details-text{
           text-align: justify;
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
                            <p class="heading text-center ">About Us</p>
                            <p class="details-heading">
                            Online Quiz System
                            </p>
                            <p class="details-text">
                                Online Quiz System refers to the system as conduct online MCQ test. It will use for students' progress in their evaluation by answering modern computer programming questions. It replaced the paperwork and overcome the outcomes of the traditional way of MCQ test. It is a web-based platform where users have to answer some fixed questions on specific time-bound based on a particular topic. Users can immediately know his/her score after submitting their answer and also can review their answer sheet to know which question they answered wrong and right.

                            </p>

                            <p class="details-heading">
                            Online Discussion Forum
                            </p>
                            <p class="details-text">
                            Our Proposed system has a module named “Online Discussion Forum”. Where users can share their problems and make discussions on various topics. It’s a technical discussion forum, where users will be able to enter questions and get answers on various technical and other topics. For example, the topic can be related to any topic in computer science like database, operation system, programming language, etc. Moreover, users will be allowed to provide answers to the questions, make a reply to other existing posts, etc.
                            </p>
                        </div>



                        <div class="row">
                            <div class="btn-group mx-auto" role="group" aria-label="">

                                <a href="https://www.w3schools.com/cpp/" class="btn btn-success bg-dark"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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