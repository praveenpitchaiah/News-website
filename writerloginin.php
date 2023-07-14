<?php
include 'connection.php';

?>
<?php
if(isset($_POST['submit'])){
$uname=$_POST['username'];
$pass=$_POST['password'];

$sql="SELECT * FROM writer_details WHERE username='$uname';";
$result=mysqli_query($conn,$sql);
$pwd="";
while($row=mysqli_fetch_assoc($result)){
    $pwd=$row['password'];
    $name=$row['writer_name'];
}

if(mysqli_num_rows($result)>0&&$pass==$pwd){
  
   session_start();
   $_SESSION["wusername"]=$name;
   $_SESSION["ousername"]=$uname;
   header('location:writerdashboard.php');
}
else{

   header('location:writerlogin.php?error=some');

}
}
?> 