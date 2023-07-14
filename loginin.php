<?php
include 'connection.php';

?>
<?php
if(isset($_POST['submit'])){
$uname=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM user_details WHERE username='$uname';";
$result=mysqli_query($conn,$sql);
$pwd="";
while($row=mysqli_fetch_assoc($result)){
    $pwd=$row['password'];
}

if(mysqli_num_rows($result)>0&&$pass==$pwd){
  
   session_start();
   $_SESSION["username"]=$uname;
   header('location:homepage.php');
}
else{

   header('location:login.php?error=some');

}
}
?> 