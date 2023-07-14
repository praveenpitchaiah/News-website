<?php
include 'connection.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
      *{
        position: relative;
      }
      section,article{
        padding: 5px;
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
#header1{
  border-radius:0px;
}

#content{
  position: relative;
  top: 50px;
  height: 450px;
  
}


.navbar-fixed-left{
  position:fixed;
  width:16.67%;
  border-radius:0;
  height:100%;
}
.navbar-fixed-left .navbar-nav>li{
float:none;
  width: 16%;
}
section{
  border:2px solid gray;
}
article{
  border:0.5px solid black;
  border-style:dashed;
  margin:5px;
}
#flash{
  border:none;
  font-weight:bold;
  font-size:20px;
}
#flash1{
  margin-left:50px;
  margin-right:50px;
  color:blue;
}
img:hover {
  opacity: 0.5;
}
body{
  background-color:black;
  color:white;
}
    </style>
    <link rel="stylesheet" href="animation.css">
    <title>HOMEPAGE</title>
  </head>
  <body>
  <nav id="header1" class="navbar navbar-inverse navbar-fixed-top">
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
      <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">
           </span> Profile</a>
        <div class="dropdown-menu" style="width:300px;background-color:#4185b5;color:#242b04;font-size:24px;padding:10px;">
        <?php
        $username=$_SESSION["username"];
        $sql="SELECT * FROM user_details WHERE username='$username';";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){
                   echo "USER ID: ".$row['user_id']."<br>User Name: ".$row['username']." <br>Catagory: ".$row['catagory'].
                    "<br> Email: ".$row['email']."<br> Phone: ".$row['phone']."<br>";
              }
        }
        ?>
        <a href="edit.php" class="btn btn-danger">Edit</a>
        </div>
        </li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div id="content" class="container-fluid">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2" style="position:relative;left:-40px;">
  <nav class="navbar navbar-inverse navbar-fixed-left">
    <div>
      <div>

       <?php
      $sql="SELECT * FROM sections ORDER BY preference;";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          echo "<li> <a style='font-size:24px;' href='#".$row['sec']."' class='btn btn-secondary'>".$row['sec']."</a></li>";
        }}
      ?>
    </div>
    </div>
  </nav>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 ">
    <h1 class="heading" data-0-top="opacity:0;left:100px;" data-200-top="opacity:1;left:0px;">Welcome<?php echo " ".$_SESSION["username"]; ?></h1>
    <section id="flash">
      <h2>Flash news</h2>
<marquee behavior="scroll" direction="left">
  
  <?php
  $sql="SELECT * FROM flash;";        
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  
      while($row=mysqli_fetch_assoc($result)){
 echo "<span id='flash1'>".str_replace("$%^&*","'",$row['news'])."</span>";
      }}
  ?>
</marquee>
    </section>
    <div id="cont">
<section>
<?php
        $sql="SELECT * FROM main;";        
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){ ?>
<h1 style="font-size:48px;"><?php echo  $row['news_heading'];?></h1>
<?php
echo  "<div class='image'>
        <img src="."uplodedImages/".str_replace("$%^&*","'",$row['image_url'])."></div>";?>
        <p><?php
   echo implode(' ', array_slice(explode(' ',str_replace("$%^&*","'",$row['news_content'])), 0, 30))."\n";
        }}?><a href="main.php">Read more</a></p>

</section>

<?php
$sql="SELECT * FROM sections ORDER BY preference;"; 
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
echo "<section id='".$row['sec']."'>";
echo "<h1>".$row['sec']."</h1>";

$sql1="SELECT * FROM news_details WHERE news_id LIKE '".$row['identification_code']."%';";        
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){

    while($row1=mysqli_fetch_assoc($result1)){
      echo "<article data-center-center='opacity:1;bottom:0;' data-0-bottom='opacity:0;bottom:-200px;'>";
        echo  "<div class='image'>
     <img src="."uplodedImages/".$row1['image_url']." class='img-rounded'  height=350px width=350px></div>"; 
        
        echo "<h3>".str_replace("$%^&*","'",$row1['news_heading'])." ".$row1['date']."</h3><p>".str_replace("$%^&*","'",$row1['news_content'])."</p>";
        echo "</article>";
      }
}
echo "</section>";
    }}
?>
<section  style="color:blue;">
<form action="comment.php" method="get">
  <label for="comment">Entere your comments:</label><br>
  <textarea name="comment" id="comment" cols="80%" rows="5"></textarea><button class="btn btn-warning" type="submit">Submit</button>
</form>

</section>
<section>
  
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
</section>
 </div>


</div>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="skrollr.js"></script>
    <script>
      var s = skrollr.init();
    </script>
  

<script type="text/javascript">
$(function() {
  $('nav li').click( function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
});


</script>  
</body>
</html>