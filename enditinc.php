<?php
session_start();
include 'connection.php';
?>
<?php
$username=$_SESSION["username"];
$password=$_POST['password'];
$gender=$_POST['gender'];
$catagory=$_POST['catagory'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$sql="UPDATE user_details SET password='$password',gender='$gender',catagory='$catagory',email='$email',phone='$phone' WHERE username='$username';";
$result=mysqli_query($conn,$sql);
if($result){
header('location:homepage.php?update=success');
}
else{
    echo "failed";
}

?>