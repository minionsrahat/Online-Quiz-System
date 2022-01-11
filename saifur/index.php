<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Tech Quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <?php include_once('php-layout-files/css-links.php');?>
</head>

<body>
<?php include_once('scripts/mql_connection.php'); ?>
    <?php include_once('php-layout-files/header.php'); ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                    <div class="font-img">
                        <img src="images/bg.png" alt="" srcset="">
                    </div>
                    <div class="details">
                        <p>Search for the Best <span class="text-danger"> Programming</span> and <span class="text-primary">Testing Blogs</span> on various topics – Python, Java, JS Tutorials, Software Testing, C/C++,PHP,ANGULARjs etc.</p>
                        <hr>
                        <p>Besides Blogs, update yourself with the latest <span class="text-primary"> interview questions </span> and <span class="text-primarY">quizzes</span> on skills like Python, Java, and C/C++.</p>
                        <hr>
                    </div>



                    <div class="row">
                        <div class="btn-group mx-auto" role="group" aria-label="">

                            <a href="https://www.w3schools.com/cpp/" class="btn btn-success bg-dark">C++</a>
                            <a href="https://www.java.com/en/" class="btn btn-success mx-2">JAVA</a>
                            <a href="https://www.python.org/" class="btn btn-success">PYTHON</a>
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
    <?php include_once('php-layout-files/js-links.php');?>
</body>

</html>