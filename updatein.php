<?php
include 'connection.php';
if(isset($_GET['submit'])){
$prefeence=$_GET['pre'];
$sec=$_GET['submit'];
$sql="UPDATE sections SET preference='$prefeence' WHERE sec='$sec';";
$result=mysqli_query($conn,$sql);
header('Location:preference.php');
}
?>