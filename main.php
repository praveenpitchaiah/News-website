<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN</title>
</head>
<style>
    section{
  border:2px solid gray;
}
section,article{
        padding: 5px;
      }
      body{
  background-color:black;
  color:white;
}
</style>
<body>
<?php
        $sql="SELECT * FROM main;";        
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){ ?>
<h1 style="font-size:48px;"><?php echo  $row['news_heading'];?></h1>
<?php
echo  "<div class='image'>
        <img src="."uplodedImages/".$row['image_url']."></div>";?>
        <p><?php
   echo $row['news_content'];
        }}?></p>

</section>
<a href="homepage.php">Go Back</a>
</body>
</html>


