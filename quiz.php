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
   <?php include('php-layout-files/css-links.php') ?>
    <link rel="stylesheet" href="style1.css">
</head>

<?php if (!isset($_SESSION['login'])) {
    header('Location:login.php');
} ?>

<body>
    <?php include_once('scripts/mql_connection.php');
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
    else{
        echo '<script> location.replace("index.php"); </script>';
    }
    ?>
    <script>
        cat_id = '<?php echo $cat_id ?>'
        limit = '<?php echo $limit ?>'
        time = '<?php echo $time[$limit] ?>'
    </script>

<?php include('php-layout-files/header.php') ?>

    <section>
        <div class="row mt-4">
        <?php include('php-layout-files/left-side-bar.php') ?>
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
                                <div class="loader some-list">

                                    <?php
                                    $quesql = "SELECT * FROM `questions` where cat_id='$cat_id' ORDER BY RAND() LIMIT $limit";
                                    $quesesult = $con->query($quesql);
                                    $id = 1;
                                    while ($ques_row = mysqli_fetch_assoc($quesesult)) {
                                        $ques_id = $ques_row['ques_id'];
                                        $_SESSION['record'][$_SESSION['count']] =  $ques_id;
                                        $_SESSION['count'] = $_SESSION['count'] + 1;
                                    ?>
                                        <div class="mt-2 p-3 single-item" id="quiz">
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
                            <button name="submit" id="submit" class="my-2 btn post-btn text-white  mx-auto" href="#" role="button">Finished
                                quiz</button>
                        </div>
                    </form>

                </div>
            </div>
            <?php 
           }
           ?>
          <?php include('php-layout-files/right-side-bar.php') ?>
        </div>
    </section>
    <?php include('php-layout-files/footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
     <script src="static-load-more/jquery.simpleLoadMore.min.js"></script>
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
            $('.some-list').simpleLoadMore({
                item: '.single-item',
                count: 5,
                counterInBtn: true,
                btnHTML:'<a name="" id="" class="btn topic-btn text-white load-more__btn"  href="" role="button">View More {showing}/{total} <i class="fas fa-angle-down"></i></a>',
                btnText: 'View More {showing}/{total}',
            });


            time = Number(60 * time)
            // time=5
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
                    url: "scripts/result_manupulation.php",
                    data: data,

                    success: function(response) {
                        console.log(response);
                        var error = "Error";
                        var n = error.localeCompare(response);
                        if (n == 0) {
                            alert('You have to at least answer 1 Question');

                        } else {
                            window.location.href = "http://localhost/Online%20Quiz%20System/result.php?result_id=" + response;
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