<?php
$username="root";
$password="";
$con=mysqli_connect('localhost',$username,$password,'techQUIZ');
if(!$con)
{
    echo" Connection failed";
}
?>