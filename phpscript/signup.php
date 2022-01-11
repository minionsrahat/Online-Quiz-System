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
    echo "SUCCESSFULL";
    }
}



?>

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5 ">
        <h3 class='mx-auto mb-5 text-primary'>Sign up Form</h3>
        <hr class="bg-primary my-2">
           
            <form name="myForm" action='/iit_forum/php_script/Signup.php' method='POST' onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type='text' name='name' class="form-control" id="name" aria-describedby="emailHelp">
    <?php
    if($nameerror)
    {
       echo "<p class='text-danger' role='alert'>Username already taken </p>";
    }
    ?>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name='pass' class="form-control" id="pass">
                </div>
                <div class="form-group">
                    <label for="cnpass">Confirm Password</label>
                    <input type="password" name='cnpass' class="form-control" id="cnpass">
                    <?php
    if($cnerror)
    {
       echo "<p class='text-danger' role='alert'>Invalid Password Matching</p>";
    }
    ?>
                </div>
                <button type="submit" name='btn1' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</section>
<script>
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

</script>
<?php
 include('footer.php');
 ?>