<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Quiz Results History</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php if (!isset($_SESSION['login'])) {
                header('Location:/login.php');
            } ?>


    <?php include_once('scripts/mql_connection.php');
    ?>

    <?php include('php-layout-files/header.php') ?>
    <section>
        <div class="row mt-4">
    <?php include('php-layout-files/left-side-bar.php') ?>
            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">


                    <div class="mx-auto p-3">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Catagory name</th>
                                    <th>Total Ques</th>
                                    <th>Time</th>
                                    <th>Right answer</th>
                                    <th>Wrong answer</th>
                                    <th>Points</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $user_id = $_SESSION['user_id'];
                                $query = "SELECT * FROM `results` where u_id=$user_id";
                                $result = $con->query($query);
                                $nrows = mysqli_num_rows($result);
                                if ($nrows == 0) {
                                ?>
                                    <p class="lead text-center mt-5">You havent participated in any quizes yet.</p>
                                    <?php
                                } else {
                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>
                             <tr>
                                 <td><?php echo $row['cat_name'] ?></td>
                                 <td><?php echo $row['total_ques'] ?></td>
                                 <td><?php echo $row['time'] ?> Min</td>
                                 <td><?php echo $row['right_ans'] ?></td>
                                 <td><?php echo $row['wrong_ans'] ?></td>
                                 <td><?php echo $row['points'] ?>/25</td>
                                 <td><?php echo $row['date'] ?></td>
                             </tr>



                                <?php

                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
           
    <?php include('php-layout-files/right-side-bar.php') ?>
        </div>
    </section>
    <?php include('php-layout-files/footer.php') ?>  
    <?php include('php-layout-files/js-links.php') ?>
</body>

</html>