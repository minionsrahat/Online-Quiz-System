<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>User Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('php-layout-files/css-links.php'); ?>

    <style>
        .center-div .card {
            /* width: 350px; */
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s
        }

        .center-div .image img {
            transition: all 0.5s
        }

        .center-div .card:hover .image img {
            transform: scale(1.5)
        }

        .center-div .btn {
            height: 140px;
            width: 140px;
            border-radius: 50%
        }

        .center-div .name {
            font-size: 22px;
            font-weight: bold
        }

        .center-div .idd {
            font-size: 14px;
            font-weight: 600
        }

        .center-div .idd1 {
            font-size: 12px
        }

        .center-div .number {
            font-size: 18px;
            font-weight: bold
        }

        .center-div .follow {
            font-size: 15px;
            font-weight: 500;
            color: #444444
        }

        .center-div .btn1 {
            height: 40px;
            width: 150px;
            border: none;
            background-color: #000;
            color: #aeaeae;
            font-size: 15px
        }

        .center-div .text span {
            font-size: 13px;
            color: #545454;
            font-weight: 500
        }

        .center-div .icons i {
            font-size: 19px
        }

        .center-div hr .new1 {
            border: 1px solid
        }

        .center-div .join {
            font-size: 14px;
            color: #a0a0a0;
            font-weight: bold
        }

        .center-div .about {
            border-bottom: 2px solid #008080;
        }

        .center-div .about span {
            font-size: 18px;
            color: #545454;
            font-weight: 500
        }

        .center-div .date {
            background-color: #ccc
        }
    </style>
</head>

<body>
    <?php include_once('scripts/mql_connection.php'); ?>
    <?php include_once('php-layout-files/header.php'); ?>



    <?php
    if (isset($_GET['profile_id'])) {
        $id = $_GET['profile_id'];
        $sql = "SELECT * FROM `users` WHERE users.user_id='$id'";
        $result = $con->query($sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['fname'] . ' ' . $row['lame'];
            $username = $row['username'];
            $gender = $row['gender'];
            $sql = "SELECT count(*) as total_questions FROM discussion_questions WHERE discussion_questions.posted_by='$id'";
            $result = $con->query($sql);
            $row = mysqli_fetch_array($result);
            $posted_questions = $row['total_questions'];

            $sql = "SELECT count(*) as total_comments FROM discussion_answers WHERE discussion_answers.answer_by='$id'";
            $result = $con->query($sql);
            $row = mysqli_fetch_array($result);
            $posted_comments = $row['total_comments'];
        } else {
            echo '<script> location.replace("index.php"); </script>';
        }
    }
    else {
        echo '<script> location.replace("index.php"); </script>';
    }

    ?>
    <section>
        <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12 center-col col-12">
                <div class="center-div">
                    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                        <div class="card p-4">
                            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary">

                                    <?php
                                    if ($gender == 2) {
                                    ?>
                                        <img src="images/female-profile-icon.png" height="100" width="100" />

                                    <?php
                                    } else {
                                    ?>
                                        <img src="images/male-profile-pic.jpg" height="100" width="100" />

                                    <?php
                                    }
                                    ?>

                                </button> <span class="name mt-3"><?php echo $name ?> </span> <span class="idd"><?php echo $username ?> </span>
                                <!-- <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">Oxc4c16a645_b21a</span> <span><i class="fa fa-copy"></i></span> </div> -->
                                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">10 <span class="follow">Followers</span></span> </div>
                                <div class="d-flex flex-row justify-content-center align-items-center"> <span class="number"><?php echo $posted_comments ?> <span class="follow">Comments</span></span> </div>
                                <div class="d-flex flex-row justify-content-center align-items-center"> <span class="number"><?php echo $posted_questions ?> <span class="follow">Posts</span></span> </div>
                                <?php
                                if ($id == $_SESSION['user_id']) {
                                ?>
                                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>

                                <?php
                                }
                                ?>
                                <div class=" d-flex mt-3 about"><span>About Myself</span></div>
                                <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork. Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
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