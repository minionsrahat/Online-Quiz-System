<?php session_start()?>
<!doctype html>
<html lang="en">

<head>
    <title>Tech_quiz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<?php    include('mql_connection.php') ;     ?>
<?php  if(isset($_GET['cat_id']))
{
    $cat_id=$_GET['cat_id'];
    $sql="SELECT * FROM `categories_quiz` WHERE cat_id='$cat_id'";
    $result=$con->query($sql);
    $row=mysqli_fetch_array($result);
} ?>

<body>
    <?php include_once('header.php') ?>
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-10 col-md-12 col-12 left-col mx-auto">
                    <div class="left-div">
                        <div class="left-col-ul mx-auto">
                            <li class="left_col_title"> Quiz Test Links : <?php echo $row['cat_name'] ?></li>
                            <div class="m-2"></div>
                            <?php 
                            $limit=array(5,10,15,20);
                            for ($i=0; $i <4 ; $i++) {  ?>
                            <!-- <li><a href="">Java Online Quiz Test</a></li> -->
                            <li><a href="/Online%20Quiz%20System/scripts/quiz.php?cat_id=<?php echo $row['cat_id'] ?>&limit=<?php echo $limit[$i];?>"><?php echo $row['cat_name'] ?> Online Quiz Test: <?php echo $limit[$i];?> Questions</a>
                            </li>
                        
                            <?php 
                            }
                            ?>
                            
                           
                            <!-- <li><a href="">SQL Online Quiz Test</a></li> -->
                           
                            <!-- <li><a href="">Perl Online Quiz Test</a></li>
                        <li><a href="">Python Online Quiz Test</a></li>
                        <li><a href="">C# Online Quiz Test</a></li>
                        <li><a href="">Objective-C Online Quiz Test</a></li> -->
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <!-- <?php include_once('footer.php')  ?> -->
    <footer class="bg-dark text-white mt-5">
   <div class="container p-2">
       <h6 class="text-center">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> <span>minionsRAHAT</span> | 2020 All Rights Reserved</h6>
   </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>