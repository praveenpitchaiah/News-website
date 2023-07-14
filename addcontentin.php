<?php
include 'connection.php';
if(isset($_GET['submit'])){
    $content=$_GET['content'];
    $ident=strtolower($content);
    $sql="INSERT INTO sections (sec,identification_code) VALUES(' $content','$ident');";
$result=mysqli_query($conn,$sql);
$ident=strtolower($content).'1';
$sql1="INSERT INTO news_details(news_id) VALUES('$ident');";
$result=mysqli_query($conn,$sql1);
if($result){
    header('location:preference.php?insert=sucess');
}
else{
    header('location:addcontent.php?insert=fail');
}
}
?>