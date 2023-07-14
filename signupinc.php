<?php
session_start();
?>
<?php
include 'connection.php';
?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$catagory=$_POST['catagory'];
$rptpass=$_POST['rptpassword'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql1="SELECT * FROM user_details WHERE username='$username';";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result1)){
    if(mysqli_num_rows($result1)>0){
        header('location:signup.php?insert=already');
        exit();
    }
}
if(!($password==$rptpass)){
    header('location:signup.php?insert=pass');
    exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header('location:signup.php?insert=email');
    exit();
}
if(!(strlen($phone)==10)){
    header('location:signup.php?insert=phn');
    exit();
}



$sql="INSERT INTO user_details(username,password,gender,catagory,email,phone) VALUES('$username','$password','$gender','$catagory','$email','$phone');";
$result=mysqli_query($conn,$sql);
if($result){
    header('location:login.php?insert=sucess');
}
else{
    header('location:signup.php?insert=fail');
}
?>