<?php  session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Online Quiz System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
<body>
    <?php include_once('mql_connection.php');
    ?>

   <?php include('header.php');?>
    <section>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-12 col-12 left-col">
                <div class="left-div">
                    <div class="left-col-ul mx-auto">
                        <li class="left_col_title">Quiz Test Links</li>
                        <li><a href="">All Quiz Test List</a></li>
                        <li><a href="">Java Online Quiz Test</a></li>
                        <li><a href="/Online%20Quiz%20System/phpscript/quiz.php?id=">C Online Quiz Test</a></li>
                        <li><a href="">C++ Online Quiz Test</a></li>
                        <li><a href="">HTML Online Quiz Test</a></li>
                        <li><a href="">CSS Online Quiz Test</a></li>
                        <li><a href="">JavaScript Online Quiz Test</a></li>
                        <li><a href="">SQL Online Quiz Test</a></li>
                        <li><a href="">PHP Online Quiz Test</a></li>
                        <li><a href="">Perl Online Quiz Test</a></li>
                        <li><a href="">Python Online Quiz Test</a></li>
                        <li><a href="">C# Online Quiz Test</a></li>
                        <li><a href="">Objective-C Online Quiz Test</a></li>
                    </div>
                </div>


            </div>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">

                    <div class="row ">
                        <div class="col-10 mx-auto">
                            <div class="loader">

                                <?php
                               $j=1;
                                // echo $_SESSION['record'];
                                foreach ($_SESSION['record'] as $key => $value) {
                                    // echo $value;
                                ?>
                                <?php
                                $quesql = "SELECT * FROM `questions` where ques_id='$value'";
                                $quesesult = $con->query($quesql);
                                $ques_row = mysqli_fetch_assoc($quesesult);
                                $ques_id = $ques_row['ques_id'];
                                ?>
                                    <div class="mt-5 p-3" id="quiz">
                                        <div class="question">
                                            <p class="text-center"><span class="badge badge-primary" id="qid"><?php echo $j; $j++; ?></span>
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
                                                    <label for="f-option" class="element-animation  <?php
                                                                                                    if ($ans[$i] == $ques_row['ans_id']) {
                                                                                                        echo "text-primary";
                                                                                                    }
                                                                                                    ?>"><?php echo $opt_row['option_det']; ?></label>
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





                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12 right-col">
                <div class="right-div">
                    <div class="right-col-ul">
                        <li class="left_col_main_topic">Give Online Test</li>
                        <li><a href="">All Test List</a></li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>