<?php
include 'connection.php';

if(isset($_GET['sec'])){

    $sec=$_GET['sec'];
    
    $sec1=strtolower($sec);
    $sec1 = str_replace(' ', '', $sec1);

$sql="DELETE FROM sections WHERE sec='$sec';";
$result=mysqli_query($conn,$sql);
$sql1="DELETE FROM news_details WHERE news_id LIKE '".$sec1."%';";

$result1=mysqli_query($conn,$sql1);
if($result1){
    header('location:removecontent.php?res=successs');
}
else{
    header('location:removecontent.php?res=fail');
}
}
?>