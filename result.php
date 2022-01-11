<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Quiz Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include('php-layout-files/css-links.php') ?>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <?php if (!isset($_SESSION['login'])) {
        header('Location:login.php');
    } ?>


    <?php include_once('scripts/mql_connection.php');
    if (isset($_GET['result_id'])) {
        $result_id = $_GET['result_id'];
        $sql = "SELECT * FROM `results` WHERE result_id='$result_id'";
        $result = $con->query($sql);
        $row = mysqli_fetch_array($result);
        $total = $row['total_ques'];
        $ans = $row['right_ans'];
        $wrans = $row['wrong_ans'];
        $points = $row['points'];
    }
    else{
        echo '<script> location.replace("index.php"); </script>';
    }
    ?>

    <?php include('php-layout-files/header.php') ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php') ?>
            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                    <div class="row pt-3">
                        <div class="col-6 mx-auto text-center">
                            <h4>Online Quiz (<?php echo $total ?> Ques)</h4>
                            <h4>Topic: <span><?php echo $row['cat_name'] ?></span></h4>
                            <h4>Time: min</h4>
                        </div>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="row p-3">
                        <div class="col-6 mx-auto ">
                            <h3 class="mb-3">Your Result:</h3>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td scope="row">Test Name</td>
                                        <td><span><?php echo $row['cat_name'] ?></span> Quiz Test</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Total Question</td>
                                        <td><?php echo $total ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Correct Answer</td>
                                        <td class="text-success"><?php echo $ans  ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Wrong Answer</td>
                                        <td class="text-danger"><?php echo $wrans  ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Not Answered</td>
                                        <td class="text-danger"><?php echo ($total - ($wrans + $ans)); ?></td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Your Time</td>
                                        <td><?php echo $row['time'] ?> Min</td>

                                    </tr>
                                    <tr>
                                        <td scope="row">Your Points</td>
                                        <td><span class="text-success"><?php echo $points ?></span>/<span class="text-primary">25</span></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row p-5">
                            <p class="lead">Hopefully, you have enjoyed the <?php echo $row['cat_name'] ?> Quiz. We hope you would like solving the
                                different question related to the <?php echo $row['cat_name'] ?> programming concept. We want to thank you for taking
                                the time to run through this quiz.</p>
                        </div>


                    </div>
                    <div class="row pb-3">
                        <div class="mx-auto">
                            <div class="btn-group" role="group" aria-label="">
                                <a href="/Online%20Quiz%20System/quiz.php?cat_id=<?php echo $row['cat_id'] ?>&limit=<?php echo $total ?>" class="btn btn-success ">Restart Quiz</a>
                                <div class="p-1"></div>
                                <a href="/Online%20Quiz%20System/view_answer.php" class="btn post-btn text-white">View Answer</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-12 col-12 right-col">
                <div class="right-div">
                    <div class="heading text-center p-3">
                        <h3>Recent Post</h3>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-2">
                        <div class="col-12">
                            <img src="logo.png" alt="" srcset="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h4>Post title</h4>
                            <p>Post description</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <?php include('php-layout-files/right-side-bar.php') ?>
        </div>
    </section>

    <?php include('php-layout-files/footer.php') ?>
    <?php include('php-layout-files/js-links.php') ?>
</body>

</html>