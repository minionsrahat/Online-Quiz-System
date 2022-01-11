<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Sign Up
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include('php-layout-files/css-links.php') ?>
  <style>
        .card {
            width: 270px !important;
            border-radius: 20px !important;
        }
        .card-title {
            font-size: 20px;
        }

        .card-text {
            font-size: 20px;
            color: #da1f1f !important;
            font-weight: bolder;
        }

        .padding {
            padding: 0 40px !important;
        }
        .reg-form{
          background-color: white!important;
        }
       
        .reg-form .fa {
            color: black !important;
            font-size: 24px !important;
        }

        .reg-form .input-group-prepend span {
            width: 45px !important;
            text-align: center;
        }

        .reg-form .heading {
            font-size: 25px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .reg-form .top-bottom {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .reg-form .top-bottom .first-part {
            width: 200px;
            border-bottom: 3px solid black;
        }

        .reg-form .top-bottom .second-part {
            width: 50px;
            border-bottom: 4px solid #4d90db;

        }

        .reg-form .top-bottom .third-part {
            width: 200px;
            border-bottom: 3px solid black;
        }

        .reg-form .divider {
            width: 200px;
            border-bottom: 3px solid black;
        }

        .col-md-7 {
            border-radius: 10px;
        }
    </style>
</head>

<body>



  <?php
  include('scripts/mql_connection.php');
  include('scripts/php_query_functions.php');
  ?>

  <?php include('php-layout-files/header.php') ?>
  <?php
    $error = array(
        'error' => False,
        'msg' => ''
    );
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $cn_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $phonenum = $_POST['phone'];
        // $date=$_POST['date'];
        // echo $fname;
        // echo $lname;
        // echo $password;
        // echo $gender;
        // echo $address;
        // echo $email;
        // echo $phonenum;
        // echo $date;

        $sql="SELECT * FROM `users` WHERE users.username='$email'";
        $rows=$con->query($sql);
        if(mysqli_num_rows($rows)>0){
            $error['error'] = True;
            $error['msg'] = "Username Already Exists.<br>";
        }
      
        if (!preg_match("/^(?:\+88|01)?(?:\d{11}|\d{13})$/", $phonenum)) {
            $error['error'] = True;
            $error['msg'] =    $error['msg']."Invalid Phone Number.<br>";
            // echo "error"
        }
        if ($password != $cn_password) {
            $error['error'] = True;
            $error['msg'] =   $error['msg']. "Invalid Password Match.<br>";
        }

        if ($error['error'] == false) {
            $columns = array('user_id', 'fname', 'lame', 'gender', 'username', 'password', 'address', 'phone_num');
            $values = array(null, $fname, $lname, $gender, $email, $password, $address, $phonenum);
            // echo "done";
            PushData($con, 'users', $columns, $values);
            $id = $con->insert_id;
            $_SESSION['user_id'] = $id;
            $_SESSION['login'] = True;
            $_SESSION['name'] = $fname;
            $_SESSION['gender']=$gender;
            echo $con->error;
            echo '<script> location.replace("index.php"); </script>';
        }
    }

    ?>


  <section>
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto mt-5 ">
          <h3 class='mx-auto mb-5 text-primary'>Sign up Form</h3>
          <hr class="bg-primary my-2">

          <form name="myForm" action='/Online%20Quiz%20System/scripts/signup.php' method='POST'>
            <div class="form-group">
              <label for="name">Username</label>
              <input type='text' required name='name' class="form-control" id="name" aria-describedby="emailHelp">
              <?php
              if ($nameerror) {
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
              if ($cnerror) {
                echo "<p class='text-danger' role='alert'>Invalid Password Matching</p>";
              }
              ?>
            </div>
            <button type="submit" name='btn1' class="btn btn-primary">Submit</button>
          </form>
          <?php if ($success) { ?>
            <p class="text-center text-success">Signup successfully Press <a href="/Online%20Quiz%20System/scripts/login.php">login</a> to log in your account.</p>
          <?php }  ?>
        </div>
      </div>
    </div> -->
    <div class="row mt-4">
            <?php include('php-layout-files/left-side-bar.php')  ?>

            <div class="col-lg-6 col-md-12 center-col col-12">
            <div class="container my-5">
        <?php
        if ($error['error']) {
        ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php
                        echo $error['msg']
                        ?></strong>
            </div>

        <?php
        }
        ?>

        <div class="row mb-5">
            <div class="col-md-10 mx-auto py-3 rounded reg-form shadow mb-5">
                <h3 class="text-center heading">Create An Account</h3>
                <div class="top-bottom">
                    <span class="first-part"></span>
                    <span class="second-part"></span>
                    <span class="third-part"></span>
                </div>
                <form action="signup.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="address" placeholder="Address" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        </div>
                        <input type="date" name="date" class="form-control" placeholder="Date Of Birth" aria-label="Date Of Birth" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-square" aria-hidden="true"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="text-center mb-3">
                        <h5>Gender</h5>
                        <div class="divider mx-auto mb-3"></div>
                        <!-- Material inline 1 -->
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="materialInline1" name="gender" value="1"  checked>
                            <label class="form-check-label" for="materialInline1">Male</label>
                        </div>

                        <!-- Material inline 2 -->
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="materialInline2"name="gender" value="2">
                            <label class="form-check-label" for="materialInline2">Female</label>
                        </div>

                        <!-- Material inline 3 -->
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="materialInline3" name="gender" value="3">
                            <label class="form-check-label" for="materialInline3">Others</label>
                        </div>
                    </div>

                    <div class="text-center mb-3">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="materialInline3" name="agree" required="required">
                            <label class="form-check-label" for="materialInline3">I agree The Terms And
                                Conditions</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"  name="submit" class="btn post-btn text-white">Register</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
            </div>

            <?php
            include('php-layout-files/right-side-bar.php')
            ?>
        </div>


   

  </section>
 

<?php include('php-layout-files/footer.php') ?>
<?php include('php-layout-files/js-links.php') ?>
<script>
    if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
</script>
</body>

</html>