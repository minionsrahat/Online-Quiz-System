<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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



  <?php
 include('mql_connection.php');
include('header.php');
?>
<?php

$nameerror=False;
$cnerror=False;
$success=False;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['name'];
    $pass=$_POST['pass'];
    $cnpass=$_POST['cnpass'];
    $sql="SELECT username FROM `user_info` WHERE username='$username'";
    $result=$con->query($sql);
    if(mysqli_num_rows($result)>0)
    {
     $nameerror=True;
    }
    elseif($pass!=$cnpass)
    {
     $cnerror=True;
    }
    else
    {
    $sql="INSERT INTO `user_info` (`user_id`, `username`, `password`) VALUES (NULL, '$username', '$pass')";
    $result=$con->query($sql);
    $success=TRUE;
    }
}



?>

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5 ">
        <h3 class='mx-auto mb-5 text-primary'>Sign up Form</h3>
        <hr class="bg-primary my-2">
           
            <form name="myForm" action='/Online%20Quiz%20System/scripts/signup.php' method='POST'>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type='text' required name='name' class="form-control" id="name" aria-describedby="emailHelp">
    <?php
    if($nameerror)
    {
       echo "<p class='text-danger' role='alert'>Username already taken </p>";
    }
    ?>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input required type="password" name='pass' class="form-control" id="pass">
                </div>
                <div class="form-group">
                    <label for="cnpass">Confirm Password</label>
                    <input required type="password" name='cnpass' class="form-control" id="cnpass">
                    <?php
    if($cnerror)
    {
       echo "<p class='text-danger' role='alert'>Invalid Password Matching</p>";
    }
    ?>
                </div>
                <button type="submit" name='btn1' class="btn btn-primary">Submit</button>
            </form>
          <?php if($success) {?>
            <p class="text-center text-success">Signup successfully Press <a href="/Online%20Quiz%20System/scripts/login.php">login</a> to log in your account.</p>
          <?php }  ?>
          </div>
    </div>
</div>
</section>
<!-- <script>
    function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["pass"].value;
  var z = document.forms["myForm"]["cnpass"].value;
  if (x == ""||y==""||z=="") {
    alert("Please Fill All Required Field");
    return false;
  }
}
function srcvalidateForm() {
  var x = document.forms["srcForm"]["query"].value;

  if (x == "") {
    alert("Your Search must have atleast 3 character");
    return false;
  }
}

</script> -->
<!-- <?php
 include('footer.php');
 ?> -->
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