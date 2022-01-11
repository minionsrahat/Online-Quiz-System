<!doctype html>
<html lang="en">

<head>
  <title>Log In</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <?php include('php-layout-files/css-links.php') ?>
</head>

<body>

  <?php
  include('scripts/mql_connection.php');
  ?>
  <?php
  $error = array(
    'error' => False,
    'msg' => ''
  );

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `users` WHERE `username` LIKE '$username' AND `password` LIKE '$pass'";
    $result = $con->query($sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['login'] = True;
      $_SESSION['name'] = $row['fname'];
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['gender']=$row['gender'];
      header('Location:/Online Quiz System');
    } else {
      $error['error'] = True;
      $error['msg'] = "Invalid Password Or Username";
    }
  }
  ?>

  <?php include('php-layout-files/header.php') ?>

  <section>

    <!-- <div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto mt-5">
            <h3 class='mx-auto mb-5 text-primary'>Log in</h3>
            <hr class="bg-primary my-2">
            <?php
            if ($success) {
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
</div> -->
    <div class="row mt-4">
      <?php include('php-layout-files/left-side-bar.php')  ?>

      <div class="col-lg-6 col-md-12 center-col col-12">
      <div class="signup-form ">
      <?php
      if ($error['error']) {
      ?>
        <div class="alert alert-danger" role="alert">
          <strong><?php echo $error['msg']  ?></strong>
        </div>
      <?php
      }
      ?>

      <form action="login.php" method="post">
        <h2>Log In</h2>

        <hr>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <span class="fa fa-user"></span>
              </span>
            </div>
            <input type="text" class="form-control" name="name" placeholder="Username/Email" required="required">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
          </div>
        </div>


        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
        <div class="text-center text-primary">Dont have an account? <a href="signup.php">Signup here</a></div>
      </form>
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