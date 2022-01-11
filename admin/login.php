<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
footer {
  position: fixed!important;
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
 
 <?php
include('mql_connection.php');
?>
<?php
$success=False;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `admin` WHERE `admin_user_name` LIKE '$username' AND `password` LIKE '$pass'";
    $result=$con->query($sql);
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['admin_login']=True;
        $_SESSION['username']=$row['username'];
        $_SESSION['user_id']=$row['user_id'];
        header('Location:index.php');

    }
    else{
        $success=True;
    }

}



?>

<section>

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5">
            <h3 class='mx-auto mb-5 text-primary'>Log in</h3>
            <hr class="bg-primary my-2">
            <?php
            if($success)
            {
               echo '  <p class="text-center text-danger" id="success">The password or username you have entered is incorrect</p>';
            }
          ?>
            <form name="myForm" action='login.php' method='POST'>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type='text' required name='name' class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" required name='pass' class="form-control" id="pass">
                </div>
                <button type="submit" name='btn1' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</section>


<!-- <?php
 include('footer.php');
 ?> -->

<footer class="bg-dark text-white mt-5">
   <div class="container p-2">
       <h6 class="text-center">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> <span>techquiz</span> | 2021 All Rights Reserved</h6>
   </div>
</footer>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>


