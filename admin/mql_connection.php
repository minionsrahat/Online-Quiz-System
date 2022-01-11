<?php
$username="root";
$password="";
$con=mysqli_connect('localhost',$username,$password,'techQUIZ');
if(!$con)
{
    echo" Connection failed";
}

function get_total_row_counts($table_name,$con)
{
    $query="select * from $table_name";
    $result=$con->query($query);
    $rows=mysqli_num_rows($result);
    return $rows;

}
function getdata($table_name,$con)
{
    $query="select * from $table_name";
    $result=$con->query($query);
    return $result;
}
function get_data_by_id($table_name,$colum,$id,$con)
{
    $query="select * from $table_name where $colum=$id";
    $result=$con->query($query);
    return $result;
}

function delete_data_by_id($table_name,$colum,$id,$con)
{
    $query="DELETE from $table_name where $colum=$id";
    $result=$con->query($query);
    return $result;
}
// $sql="DELETE FROM `options` WHERE opt_id>300";
// $result=$con->query($sql);

// $sql=get_data_by_id("questions",'cat_id',4,$con);
// while($row=mysqli_fetch_array($sql))
// {


//     $desc=$row['ques_title'];
//     $ans_id=$row['ans_id'];
//     $cat_id=$row['cat_id'];
//     $ques_id=$row['ques_id'];

//     $result2=get_data_by_id('options','ques_id',$ques_id,$con);
//     $row2=mysqli_fetch_array($result2);
//     $opt1=$row2['option_det'];
//     $row2=mysqli_fetch_array($result2);
//     $opt2=$row2['option_det'];
//     $row2=mysqli_fetch_array($result2);
//     $opt3=$row2['option_det'];
//     $row2=mysqli_fetch_array($result2);
//     $opt4=$row2['option_det'];
//     $insql="INSERT INTO `questions`(`ques_id`, `ques_title`, `ans_id`, `cat_id`) VALUES (NULL,'$desc','$ans_id','5')";
//     $resultinsql=$con->query($insql);
//     $quessql="SELECT * FROM `questions`";
//     $result=$con->query($quessql);
//     $ques_id=mysqli_num_rows($result);
    
//     $opt1sql="INSERT INTO `options`(`opt_id`, `option_det`, `ques_id`, `ans_id`) VALUES (NULL,'$opt1','$ques_id','$ans_id')";
//     $opt2sql="INSERT INTO `options`(`opt_id`, `option_det`, `ques_id`, `ans_id`) VALUES (NULL,'$opt2','$ques_id','$ans_id')";
//     $opt3sql="INSERT INTO `options`(`opt_id`, `option_det`, `ques_id`, `ans_id`) VALUES (NULL,'$opt3','$ques_id','$ans_id')";
//     $opt4sql="INSERT INTO `options`(`opt_id`, `option_det`, `ques_id`, `ans_id`) VALUES (NULL,'$opt4','$ques_id','$ans_id')";
//     $resultinsql1=$con->query($opt1sql);
//     $resultinsql2=$con->query($opt2sql);
//     $resultinsql3=$con->query($opt3sql);
//     $resultinsql4=$con->query($opt4sql);
// }



















?>