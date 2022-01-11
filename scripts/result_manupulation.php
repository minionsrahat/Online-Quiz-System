<?php include_once('mql_connection.php');
session_start();
$user_id=$_SESSION['user_id'];
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cat_id = $_POST['cat_id'];
    if (!isset($_POST['selector'])) {
        echo "Error";
    } else {
        $selector = $_POST['selector'];
        $time = $_POST['time'];
        $time_points = $_POST['time_points'];
        # $selector = isset($selector[2]) ? $selector[2] : 'o';
        $count = count($_POST['selector']);

        $quesql = "SELECT * FROM `questions` where cat_id=$cat_id";
        $quesesult = $con->query($quesql);
        $total = $_POST['limit'];
        $ans = 0;
        $i = 1;
        $wrans = 0;
        while ($ques_row = mysqli_fetch_assoc($quesesult)) {
            if (isset($selector[$ques_row['ques_id']])) {
               
                if ($selector[$ques_row['ques_id']] == $ques_row['ans_id']) {
                    $ans = $ans + 1;
                } else {
                    $wrans = $wrans + 1;
                }
            }
            $i = $i + 1;
        }

        $sql = "SELECT * FROM `categories_quiz` WHERE cat_id='$cat_id'";
        $result = $con->query($sql);
        $row = mysqli_fetch_array($result);
        $cat_name = $row['cat_name'];
        // echo $cat_name . '<br>';
        $points = ceil(((20 / $total) * $ans) + $time_points);
        $query = "INSERT INTO `results` (`result_id`, `cat_name`, `cat_id`, `total_ques`, `right_ans`, `wrong_ans`, `u_id`, `time`, `date`,`points`) VALUES (NULL,'$cat_name', $cat_id,$total,$ans,$wrans,$user_id, $time, current_timestamp(),$points)";
        $result = $con->query($query);
        $sql2 = "SELECT result_id FROM `results` WHERE result_id=(SELECT MAX(result_id) FROM `results`)";
        $result2 = $con->query($sql2);
        $row2 = mysqli_fetch_array($result2);
        echo $row2['result_id'];
        //   echo $con->error;


    }
}

?>