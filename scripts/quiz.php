<?php
session_start();
$_SESSION['count'] = 0;
$_SESSION['record'][$_SESSION['count']] = array();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Techquiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">

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

<?php if (!isset($_SESSION['login'])) {
    header('Location:login.php');
} ?>

<body>
    <?php include_once('mql_connection.php');
    $time = array(
        5 => 5,
        10 => 8,
        15 => 15,
        20 => 18
    );
    if (isset($_GET['cat_id'])) {
        $cat_id = $_GET['cat_id'];
        $limit = $_GET['limit'];



        $sql5 = "SELECT * FROM `categories_quiz` WHERE cat_id='$cat_id'";
        $result5 = $con->query($sql5);
        $row5 = mysqli_fetch_array($result5);
        $cat_name = $row5['cat_name'];
    }
    ?>
    <script>
        cat_id = '<?php echo $cat_id ?>'
        limit = '<?php echo $limit ?>'
        time = '<?php echo $time[$limit] ?>'
    </script>

    <?php include('header.php')  ?>

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
           <?php
           if($cat_id==5 || $cat_id==6)
           {
               ?>
        <div class="col-lg-6 center-col">
        <h3 class="text-center-mt-5">No Quiz available for this catagory.Please choose another catagory</h3>

        </div>



           <?php
           }
           else{
           ?>
            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                    <div class="row p-3">
                        <div class="col-6 mx-auto text-center">
                            <h3><?php echo $cat_name ?> ONLINE QUIZ</h3>
                        </div>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="row p-2">
                        <div class="col-6 mx-auto text-center">
                            <h4>Remaining Time: <span id="time"></span></h4>
                            <input type="hidden" id="min">
                            <input type="hidden" id="sec">
                        </div>
                    </div>
                    <!-- action="result.php?limit=5&cat_id=<?php echo $cat_id ?>" -->
                    <form id="form" method="post">
                        <div class="row ">
                            <div class="col-10 mx-auto">
                                <div class="loader">

                                    <?php
                                    $quesql = "SELECT * FROM `questions` where cat_id='$cat_id' ORDER BY RAND() LIMIT $limit";
                                    $quesesult = $con->query($quesql);
                                    $id = 1;
                                    while ($ques_row = mysqli_fetch_assoc($quesesult)) {
                                        $ques_id = $ques_row['ques_id'];
                                        $_SESSION['record'][$_SESSION['count']] =  $ques_id;
                                        $_SESSION['count'] = $_SESSION['count'] + 1;
                                    ?>
                                        <div class="mt-2 p-3" id="quiz">
                                            <div class="question mb-3">
                                                <p class="text-center"><span class="badge badge-primary" id="qid"><?php echo $id;
                                                                                                                    $id++; ?></span>.
                                                    <span id="question"><?php echo $ques_row['ques_title']; ?></span>
                                                </p>
                                            </div>
                                            <ul>
                                                <?php
                                                $i = 0;
                                                $ans = ['a', 'b', 'c', 'd'];
                                                $optsql = "SELECT * FROM `options` where ques_id='$ques_id'";
                                                $optresult = $con->query($optsql);
                                                while ($opt_row = mysqli_fetch_assoc($optresult)) {
                                                ?>
                                                    <li>
                                                        <input type="radio" id="" name="selector[<?php echo $ques_id; ?>]" value="<?php echo $ans[$i]; ?>">
                                                        <label for="f-option" class="element-animation"><?php echo $opt_row['option_det']; ?></label>
                                                        <div class="check"></div>
                                                    </li>
                                                <?php
                                                    $i = $i + 1;
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button name="submit" id="submit" class="btn btn-primary mx-auto" href="#" role="button">Finished
                                quiz</button>
                        </div>
                    </form>

                </div>
            </div>
            <?php 
           }
           ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script src="https://github.com/mgalante/jquery.redirect/blob/master/jquery.redirect.js"></script> -->

    <script>
        // function result() {
        //     var data = $('#form').serializeArray();
        //     data.push({
        //         name: 'time',
        //         value: time
        //     });
        //     data.push({
        //         name: 'cat_id',
        //         value: cat_id
        //     });
        //     data.push({
        //         name: 'limit',
        //         value: limit
        //     });
        //     $.redirect('result.php', {
        //         data: data
        //     });
        // }

        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                $('#min').val(minutes);
                $('#sec').val(seconds);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }
        $(document).ready(function() {
            // time = Number(60 * time)
            time=5
            display = document.querySelector('#time');
            startTimer(time, display);
            // console.log(time);

            $('#form').on('submit', function(e) {
                e.preventDefault();
                var min = $('#min').val();
                var sec = $('#sec').val();
                // console.log(min*60+sec)
                var consumed_time = Number(time) - (Number(min * 60) + Number(sec))
                var time_points = Number(consumed_time)
                consumed_time = Number(consumed_time) / 60;
                // time_points=(Number(time_points)/Number(60));
                time_points = Number(time) - time_points;
                time_points = (Number(time_points) * 5) / Number(time);
                console.log(time_points)
                var data = $('#form').serializeArray();
                data.push({
                    name: 'time',
                    value: consumed_time
                });
                data.push({
                    name: 'time_points',
                    value: time_points
                });
                data.push({
                    name: 'cat_id',
                    value: cat_id
                });
                data.push({
                    name: 'limit',
                    value: limit
                });
                console.log(data)
                $.ajax({
                    type: "post",
                    url: "result_manupulation.php",
                    data: data,

                    success: function(response) {
                        console.log(response);
                        var error = "Error";
                        var n = error.localeCompare(response);
                        if (n == 0) {
                            alert('You have to at least answer 1 Question');

                        } else {
                            window.location.href = "http://localhost/Online%20Quiz%20System/scripts/result.php?result_id=" + response;
                        }
                    }
                });
            });
            setTimeout(() => {
                var consumed_time =time;
                var time_points=0;
                var data = $('#form').serializeArray();
                data.push({
                    name: 'time',
                    value: consumed_time
                });
                data.push({
                    name: 'time_points',
                    value: time_points
                });
                data.push({
                    name: 'cat_id',
                    value: cat_id
                });
                data.push({
                    name: 'limit',
                    value: limit
                });

                $.ajax({
                    type: "post",
                    url: "result_manupulation.php",
                    data: data,

                    success: function(response) {
                        console.log(response);
                        var error = "Error";
                        var n = error.localeCompare(response);
                        if (n == 0) {
                            alert('You have to at least answer 1 Question');

                        } else {
                            window.location.href = "http://localhost/Online%20Quiz%20System/scripts/result.php?result_id=" + response;
                        }
                    }
                });
            }, time*1000);
        });
    </script>

</body>

</html>