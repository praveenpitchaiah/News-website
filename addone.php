<?php
include 'connection.php';
if(isset($_GET['sec'])){
    $sec=$_GET['sec'];
    $sql="SELECT * FROM news_details where news_id LIKE '".$sec."%';";


    $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
       

          while($row=mysqli_fetch_assoc($result)){
             $sec1=$row['news_id'];
           
          }
}
 $sec1++;


 $sql="INSERT INTO news_details (news_id) VALUES('".$sec1."')";
$result=mysqli_query($conn,$sql);
header('Location:writerdashboard.php');
}
?>