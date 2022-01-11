<?php
include('mql_connection.php');
include('header.php');
$id=$_GET['prob_id'];
$login=False;
if(isset($_SESSION['loggedin']))
{
    $login=True;
}

?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST['submit']))
    {
        $desc=$_POST['prob_desc'];
        $desc=str_replace('<','&lt;',$desc);
        $desc=str_replace('>','&gt;',$desc);
        $desc=mysqli_real_escape_string($con,$desc);
        $user_id=$_SESSION['user_id'];
        echo $user_id;
        $query="INSERT INTO `comments` (`cmnt_it`, `comment`, user_id, `prob_id`, `timestamp`) VALUES (NULL, '$desc', '$user_id', '$id', current_timestamp())";
        $result=$con->query($query);
        
    }
    elseif(isset($_POST['replay'])){
        $desc=$_POST['replay_desc'];
        $desc=str_replace('<','&lt;',$desc);
        $desc=str_replace('>','&gt;',$desc);
        $desc=mysqli_real_escape_string($con,$desc);
        $cat_id=$_POST['hidden'];
        $user_id=$_SESSION['user_id'];
        $query="INSERT INTO `replays` (`replay_id`, `cmnt_id`, `replay`, user_id, `timestamp`) VALUES (NULL, '$cat_id', '$desc', '$user_id', current_timestamp());";
        $result=$con->query($query);
    }
   
}


?>

<?php
$sql="SELECT * FROM problems WHERE problem_id=$id";
$result=$con->query($sql);
$row = mysqli_fetch_assoc($result);
?>
<?php
$prob_user_id=$row['user_id'];
$sql="SELECT username FROM user_info WHERE user_id='$prob_user_id'";
$usernameresult=$con->query($sql);
$prob_user= mysqli_fetch_assoc($usernameresult)
?>
<section>
    <div id="demo" class="container">
        <div class="row mx-auto mt-4">
            <div class="col-lg-10">
                <div class="jumbotron">
                    <h1 class="display-4"><?php echo $row['problem_title']?></h1>
                    <p class="lead"><?php echo $row['problem_desc']?></p>
                    <hr class="my-4">
                    <p class="text-left">Posted By <b><?php echo var_dump($prob_user);?></b></p>
                </div>
            </div>

        </div>
        <?php
         if($login)
         {
    ?>
        <div class="row mx-auto">
            <div class="col-md-8">
                <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" name="myForm"
                    onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="description">Post Comment</label>
                        <textarea class="form-control" name="prob_desc" id="description" rows="3"
                            placeholder="Elavorate your Problem"></textarea>
                    </div>
                    <button class="btn btn-primary px-5" name='submit' id='submit'>Post</button>
                </form>
            </div>
        </div>
        <?php
        }
      ?>

        <h3 class="display-5 mt-5">Discussion</h3>
        <?php
    $sql="SELECT * FROM comments WHERE prob_id=$id";
    $result=$con->query($sql);
    $rowcount=mysqli_num_rows($result);
    if($rowcount==0)
    {
    ?>
        <div class="jumbotron">

            <h1>No Comments Found</h1>
            <p>Be the First person to post a comment.......</p>

        </div>

        <?php
    }
    else{
    while($row2= mysqli_fetch_assoc($result))
    {
    ?>
        <div class="row mx-auto mt-3">
            <div class="col-lg-8">
                <div class="media">
                    <img src="user.png" width="34px" class="mr-3" alt="...">
                    <div class="media-body">

                        <?php
                    $cmnt_user_id=$row2['user_id'];
                    $sql="SELECT username FROM user_info WHERE user_id='$cmnt_user_id'";
                    $usernameresult=$con->query($sql);
                    $cmnt_user= mysqli_fetch_assoc($usernameresult)
                    ?>
                        <h5 class="ml-2 mt-0"><?php  echo var_dump($cmnt_user); ?></h5>
                        <p><?php echo $row2['comment']; ?></p>
                        <?php
                    $cmnt_id=$row2['cmnt_it'];
                    $sql2="SELECT * FROM replays WHERE cmnt_id='$cmnt_id'";
                    $result2=$con->query($sql2);
                    while($row3= mysqli_fetch_assoc($result2))
                    {
                    ?>
                        <div class="media mt-3">
                            <a class="mr-3" href="#">
                                <img src="user.png" width="34px" class="mr-3" alt="...">
                            </a>
                            <?php
                        $replay_user_id=$row3['user_id'];
                        $sql="SELECT username FROM user_info WHERE user_id='$replay_user_id'";
                        $usernameresult=$con->query($sql);
                        $replay_user= mysqli_fetch_assoc($usernameresult);
                        ?>
                            <div class="media-body">
                                <p class="ml-2"><?php echo var_dump($replay_user); ?></p>
                                <p><?php echo $row3['replay']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                        <?php
                    if($login)
                    {
                ?>
                        <div class="media mt-3">
                            <a class="mr-3" href="#">
                                <img src="user.png" width="34px" class="mr-3" alt="...">
                            </a>
                            <div class="media-body">
                                <p>Replay</p>
                                <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" class="form-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='replay_desc' id="title"
                                            placeholder="Write your problem heading">
                                    </div>
                                    <button class="btn btn-primary" name="replay">SEND</button>
                                    <input type="hidden" name='hidden' value="<?php echo $row2['cmnt_it'];?>">
                                </form>
                            </div>
                        </div>
                        <?php
                   }
                ?>

                    </div>
                </div>
            </div>

        </div>
        <?php
}
}
?>
        <script>
        function validateForm() {
            var x = document.forms["myForm"]["prob_desc"].value;
            if (x == "") {
                alert("Comment box must be filled before clicking post button");
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

</section>
</div>
<?php
 include('footer.php');
 ?>