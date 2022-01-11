<?php session_start()?>
<!doctype html>
<html lang="en">

<head>
    <title>Quiz links</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once('php-layout-files/css-links.php');?>
   

</head>
<?php    include('scripts/mql_connection.php') ;     ?>
<?php  if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];
    $sql="SELECT * FROM `categories_quiz` WHERE cat_id='$cat_id'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
}
else{
    echo '<script> location.replace("index.php"); </script>';
}

?>

<body>
<?php include_once('php-layout-files/header.php');?>
    <section>
        <div class="">
            <div class="row mt-5">
            <?php include('php-layout-files/left-side-bar.php')  ?>
                <div class="col-lg-6 col-md-12 left-col col-12">
                    <div class="left-div">
                        <div class="left-col-ul mx-auto">
                            <li class="left_col_title"> Quiz Test Links : <?php echo $row['cat_name'] ?></li>
                            <div class="m-2"></div>
                            <?php 
                            $limit=array(5,10,15,20);
                            for ($i=0; $i <4 ; $i++) {  ?>
                            <!-- <li><a href="">Java Online Quiz Test</a></li> -->
                            <li><a href="/Online%20Quiz%20System/quiz.php?cat_id=<?php echo $row['cat_id'] ?>&limit=<?php echo $limit[$i];?>"><?php echo $row['cat_name'] ?> Online Quiz Test: <?php echo $limit[$i];?> Questions</a>
                            </li>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php include_once('php-layout-files/right-side-bar.php');?>
            </div>
        </div>

    </section>
    <?php include_once('php-layout-files/footer.php');?>
    <?php include_once('php-layout-files/js-links.php');?>
</body>

</html>