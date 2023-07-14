<?php
session_start();
include 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>WRITER DASHBOARD</title>
    <style>
#header1{
  border-radius:0px;
}
section{
  border:2px solid gray;
}
#content{
  position: relative;
  top: 50px;
  
  
}
footer{
    
    color:#fff;

}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa{
    color:white;
}
body{
  background-color:black;
  color:white;
}
#content-nav li{
  padding-right:80px;
  padding-left:80px;
}
form{
  color:#211f1e;
}
label{
  color:white;
}
}
#cont{
    animation: transitionIn 0.75s;
}
@keyframes transitionIn{
    from{
opacity: 0;
    }
    to{
        opacity: 1;
        
    }
}
    </style>
  </head>
  <body>
  <nav id="header1" class="navbar navbar-inverse  navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand"  style="font-size:36px;" href="#">Daylight News</a>
        </div>
        
        <ul class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li class="nav-item dropdown">
          <a href="#"   class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-info-sign"></span>About</a>
              <div class="dropdown-menu"  style="width:600px;color:#242b04;">
              “We are not afraid to entrust the American people with unpleasant facts, foreign ideas, alien philosophies, and competitive values. For a nation that is afraid to let its people judge the truth and falsehood in an open market is a nation that is afraid of its people."
            </div>
    </li>
    <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-phone"></span>Contact</a>
              <div class="dropdown-menu" style="background-color:black;">
<ul>
    <li>Email:<a href="#">AbcD@gmail.com</a></li>
    <li>Phone:9940045656</li>
    <li>Address: <br>12,4th floor ABC building,Chennai.</li>
</ul>
              </div>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>

          
          
          <li class="nav-item dropdown">
            <a href="#"  class="nav-link dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span> profile</a>
            

              <div class="dropdown-menu" style="width:300px;background-color:#4185b5;color:#242b04;font-size:24px;padding:10px;">
        <?php
        


          $username=$_SESSION["ousername"];



        $sql="SELECT * FROM writer_details WHERE username='$username';";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
             echo "USER ID: ".$row['writer_id']."<br>User Name: ".$row['username']." <br>Name: ".$row['writer_name']."<br> Email: ".$row['email_id']."<br>Qualificaton: ".$row['qualification']."<br> DOB: ".$row['DOB']."<br> Experience: ".$row['experience']."<br>  Phone: ".$row['phone']."<br>Gender: ".$row['gender']."<br> Country: ".$row['country']."<br> ";
              }      
        }

        ?>
        </div>

            </li>
        </ul>
      </div>
    </nav>
    <!-- 
    <nav class="navbar navbar-inverse" style="position:relative;top:55px;">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#national">National</a></li>
      <li><a href="#international">International</a></li>
      <li><a href="#sports">Sports</a></li>
      <li><a href="#politics">Political</a></li>
    </ul>
  </div>
</nav>
 -->
<div id="content-nav" style="position:relative;top:50px;">
<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
    
      <?php
      $sql="SELECT * FROM sections ORDER BY preference;";        
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
echo "<div class='btn-group' role='group'>";
     echo "<a href='#".strtolower($row['sec'])."' type='button' class='btn btn-danger'>".$row['sec']."</a>";
      echo " </div>";
      }}?>
   
    <div class="btn-group" role="group">
      <a  href="addcontent.php" type="button" class="btn btn-primary">Add content <span class='glyphicon glyphicon-plus'></span></a>
    </div>
    <div class="btn-group" role="group">
      <a  href="removecontent.php" type="button" class="btn btn-primary">Remove content <span class='glyphicon glyphicon-minus'></span></a>
    </div>
   

  </div>
  </div>


    <div id="content">
      <div id="cont">
    <h1>Welcome<?php echo " ".$_SESSION["wusername"] ?></h1>
      <div class="container-fluid">
        <section id="flashnews">
<h2>Enter flash news</h2>
<?php

$sql="SELECT * FROM flash;";        
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
 $count=1;

  while($row=mysqli_fetch_assoc($result)){

   echo "<form action='writerdashboardinc.php' method='post'>
     <label for='flash1'>News".$count."</label>
     <textarea name='flash1' id='flash1' cols='47' rows='2'>".str_replace("$%^&*","'",$row['news'])."</textarea>";
  $count++;
    }}?>
    <button  class="btn btn-warning" type="submit" name="flash" value="flash">Submit</button>
     </form>
    </section>
        
        <section id="heading">
        <h2>Main news</h2>
        <form action="writerdashboardinc.php" method="post" enctype="multipart/form-data">
          <label for="mainheading">Heading:</label>
          <?php
        $sql="SELECT * FROM main;";        
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){        
     echo "<input type='text' name='mainheading' id='mainheading' value='".str_replace("$%^&*","'",$row['news_heading'])."'>";?>
  <!-- <input type='text' name='mainheading' id='mainheading'> --> <br>
          <label for="image">Image:</label>
          <input type="file" id="image" name="image">
        <label for="news">News</label><br>
          <textarea name="news" id="news" cols="150" rows="10"><?php
          echo str_replace("$%^&*","'",$row['news_content']);
          ?></textarea>
          <button  class="btn btn-success" type="submit" name="main" value="main">Submit</button>
          <?php
            }
          }
          ?>
        </form>
        </section>




        <?php
        $sql="SELECT * FROM sections ORDER BY preference;";        
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
          echo "<section class='row' id='".strtolower($row['sec'])."'>";
          echo "<h2>".$row['sec']." news</h2>";
        
          $sql1="SELECT * FROM news_details WHERE news_id LIKE '".$row['identification_code']."%';";        
          $result1=mysqli_query($conn,$sql1);
          if(mysqli_num_rows($result1)>0){
              $sum=1;
              while($row1=mysqli_fetch_assoc($result1)){

              echo   "<div class='col-lg-6  col-md-6'>

      <h4>News".$sum."</h4>


    <form action='writerdashboardinc.php' method='post' enctype='multipart/form-data'>
      <label for='heading'>Heading</label>";

      echo "<input type='text' id='heading' name='heading' required value='".str_replace("$%^&*","'",$row1['news_heading'])."'>";
     echo "<br>";
      echo "<label for='image'>Image:</label>
        <input type='file' id='image' name='image' required>
        <label for='news'>News</label><br>
        <textarea name='news' id='news' cols='60' rows='10' required>";
        echo str_replace("$%^&*","'",$row1['news_content']);
        echo "</textarea>";
        echo "<button  class='btn btn-info' name='submit' type='submit' value=".$row1['news_id'].">Submit</button>";
        echo "</form>";
        $sum++;
     
        
        if(isset($_GET['error'])){

         echo "<p>".$_GET['error']."</p>";
        
        
        }
        
       echo "</div>";
      }
    }
   echo "<h2 class='text-center'>
    <a style='border-radius:50%;color:#824b23;border:2px solid red;' href='addone.php?sec=".$row['identification_code']."'><span class='glyphicon glyphicon-plus'></span></a>
    <a style='border-radius:50%;color:#824b23;border:2px solid red;' href='delalert.php?sec=".$row['identification_code']."'><span class='glyphicon glyphicon-minus'></span></a>
   </h2>";
   echo "</section>";
  }}
        ?>   
</div>
    </div>
    <footer style="position:relative;">
       <div style="color: rgb(151, 224, 230);text-align:center">Journalism can never be silent: that is its greatest virtue and its greatest fault. It must speak, and speak immediately, while the echoes of wonder, the claims of triumph and the signs of horror are still in the air</div>
       <div class="container" style="padding:30px 0;" align="center">
       <a href="#" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-twitter"></a>
       <a href="#" class="fa fa-google"></a>
       <a href="#" class="fa fa-linkedin"></a>
       <a href="#" class="fa fa-youtube"></a>
       <a href="#" class="fa fa-instagram"></a>
       <a href="#" class="fa fa-pinterest"></a>
      
    </div>
    <div style="color:#004872;">
           <p style="color: #938ec2; padding:15px 0;" align="center">
                &copy; 2021 Copyright:Created by: Praveen Pitchaiah
           </p>
    </div>
   </footer>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   

<script>
    
$(function() {
  $('nav li').click( function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
});


</script>
  </body>
</html>