<?php 
 include('mql_connection.php');
 if(isset($_POST['action']))
 {
     if($_POST['action']=='get_edit_cat_data')
     {
        //  echo "hi";
        $id=$_POST['id'];
        $result=get_data_by_id("categories_quiz",'cat_id',$id,$con);
        $row=mysqli_fetch_array($result);
        $output=array(
            'cat_name'=>$row['cat_name']
        );
        echo json_encode($output);

     }
     if($_POST['action']=='edit_cat_data')
     {
        //  echo "hi";
        $id=$_POST['id'];
        $val=$_POST['val'];
        $query="UPDATE `categories_quiz` SET `cat_name` = '$val' WHERE cat_id='$id'";
        $result=$con->query($query);
        echo $con->error;
     }
     if($_POST['action']=='get_edit_ques_data')
     {
        //  echo "hi";
        $id=$_POST['id'];
        $result=get_data_by_id("questions",'ques_id',$id,$con);
        $row=mysqli_fetch_array($result);
        $output=array(
            'ques_title'=>$row['ques_title'],
            'ans_id'=>$row['ans_id'],
            'cat_id'=>$row['cat_id']
        );
        echo json_encode($output);

     }
     if($_POST['action']=='edit_ques_data')
     {
        //  echo "hi";
        $id=$_POST['id'];
        $title=$_POST['title'];
        $ans_id=$_POST['ans_id'];
        $cat_id=$_POST['cat_id'];
        $query="UPDATE `questions` SET `ques_title`='$title',`ans_id`='$ans_id',`cat_id`='$cat_id' WHERE ques_id='$id'";
        $result=$con->query($query);
        echo $con->error;
     }
     
 }

?>