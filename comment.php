<?php
include 'connection.php';

session_start();

$user_name=$_SESSION['username'];
$comment=$_GET['comment'];
$sql="INSERT INTO comments(user_id,comment) VALUES('$user_name','$comment');";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:homepage.php?insert=sucess');
}
else{
    header('location:homepage.php?insert=fail');
}
?>