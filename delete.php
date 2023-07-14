<?php
include 'connection.php';
if(isset($_GET['user_id'])){

    $uid=$_GET['user_id'];
$sql="UPDATE user_details SET del_status='YES' WHERE user_id='$uid';";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:admin.php?res=successs');
}
else{
    header('location:admin.php?res=fail');
}
}
if(isset($_GET['writer_id'])){

    $uid=$_GET['writer_id'];
$sql="UPDATE writer_details SET del_status='YES' WHERE writer_id='$uid';";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:admin.php?res=successs');
}
else{
    header('location:admin.php?res=fail');
}
}
?>
