<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Online Quiz System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
footer {
  /* position: fixed!important; */
  left: 0!important;
  bottom: 0!important;
  width: 100%!important;
  background-color: red;
  color: white;
  text-align: center!important;
  margin-bottom: 0!important;
}
</style>

    </head>

<body>
<?php if (!isset($_SESSION['login'])) {
    header('Location:login.php');
} ?>


 <?php include_once('mql_connection.php');
if(isset($_GET['result_id']))
{
    $result_id=$_GET['result_id'];
    $sql="SELECT * FROM `results` WHERE result_id='$result_id'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
    $total=$row['total_ques'];
    $ans=$row['right_ans'];
    $wrans=$row['wrong_ans'];
    $points=$row['points'];
}
?>

    <?php include('header.php') ?>
    <section>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-12 col-12 left-col">
            <div class="left-div">
                    <div class="left-col-ul mx-auto">
                        <li class="left_col_title">Quiz Test Links</li>
                        <li><a href="/Online%20Quiz%20System/scripts/all_test.php">All Quiz Test List</a></li>
                        <!-- <li><a href="">Java Online Quiz Test</a></li> -->
                        <li><a href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=5">C Online Quiz Test</a></li>
                        <li><a href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=4">C++ Online Quiz Test</a></li>
                        <!-- <li><a href="vquiz.php?cat_id=6">HTML Online Quiz Test</a></li> -->
                        <!-- <li><a href="">CSS Online Quiz Test</a></li> -->
                        <li><a href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=3">Javascript Online Quiz Test</a></li>
                        <!-- <li><a href="">SQL Online Quiz Test</a></li> -->
                        <li><a href="/Online%20Quiz%20System/scripts/indi_quiz_test.php?cat_id=2">PHP Online Quiz Test</a></li>
                        <!-- <li><a href="">Perl Online Quiz Test</a></li>
                        <li><a href="">Python Online Quiz Test</a></li>
                        <li><a href="">C# Online Quiz Test</a></li>
                        <li><a href="">Objective-C Online Quiz Test</a></li> -->
                    </div>
                </div>


            </div>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                    <div class="row pt-3">
                        <div class="col-6 mx-auto text-center">
                            <h4>Online Quiz (<?php echo $total ?> Ques)</h4>
                            <h4>Topic: <span><?php echo $row['cat_name'] ?></span></h4>
                            <h4>Time:  min</h4>
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
                                        <td class="text-danger"><?php echo ($total-($wrans+$ans )); ?></td>

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
                                    <a href="/Online%20Quiz%20System/scripts/quiz.php?cat_id=<?php echo $row['cat_id'] ?>&limit=<?php echo $total?>" class="btn btn-success ">Restart Quiz</a>
                                    <div class="p-1"></div>
                                    <a href="/Online%20Quiz%20System/scripts/view_answer.php" class="btn btn-success">View Answer</a>
                                </div>

                            </div>
                     </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12 right-col">
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
            </div>
        </div>
    </section>
    
<footer class="bg-dark text-white mt-5">
   <div class="container p-2">
       <h6 class="text-center">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> <span>minionsRAHAT</span> | 2020 All Rights Reserved</h6>
   </div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>