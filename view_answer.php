<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Quiz Answer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <?php include('php-layout-files/css-links.php') ?>
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <?php include_once('scripts/mql_connection.php');
    ?>

    <?php include('php-layout-files/header.php') ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php') ?>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">

                    <div class="row ">
                        <div class="col-10 mx-auto">
                            <div class="loader">

                                <?php
                                $j = 1;
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
                                            <p class="text-center"><span class="badge badge-primary" id="qid"><?php echo $j;
                                                                                                                $j++; ?></span>
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
            <?php include('php-layout-files/left-side-bar.php') ?>
        </div>
    </section>


    <?php include('php-layout-files/footer.php') ?>
    <?php include('php-layout-files/js-links.php') ?>
</body>

</html>