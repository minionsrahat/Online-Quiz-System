<?php
include('mql_connection.php');
include('header.php');
?>
<?php
$success=False;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `user_info` WHERE `username` LIKE '$username' AND `password` LIKE '$pass'";
    $result=$con->query($sql);
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['loggedin']=True;
        $_SESSION['username']=$row['username'];
        $_SESSION['user_id']=$row['user_id'];
        header('Location:/iit_forum');

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
            <form name="myForm" action='login.php' method='POST' onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type='text' name='name' class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name='pass' class="form-control" id="pass">
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
  if (x == ""||y=="") {
    alert("Please Fill All Required Field");
    return false;
  }
}

</script>

<?php
 include('footer.php');
 ?>