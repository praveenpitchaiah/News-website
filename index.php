<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mini Project</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="sec.css">
<link rel="stylesheet" href="loginform.css">



<style>
 #cont{
  position: relative;
}

#cont{
    animation: transitionIn 0.75s;
}
@keyframes transitionIn{
    from{
opacity: 0;
right:300px;

    }
    to{
        opacity: 1;
        left:0px;   
    }
}

#login-form{
  animation: transitionIn1 0.75s;
  position: relative;
}
@keyframes transitionIn1{
    from{
opacity: 0;
left:300px;

    }
    to{
        opacity: 1;
        left:0px;   
    }
} 


footer{
   position: relative;
 margin-top: 75px;
}




body{
  background-color:black;
  color:white;
}
</style>



  </head>
  <body>
    <nav id="header1" class="navbar navbar-inverse  navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
         <a class="navbar-brand"  style="font-size:24px;" href="#">Daylight News</a>
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
              <div class="dropdown-menu" style="background-color:black;border-radius:3px;">
<ul>
    <li>Email:<a href="#">AbcD@gmail.com</a></li>
    <li>Phone:9940045656</li>
    <li>Address: <br>12,4th floor ABC building,Chennai.</li>
</ul>
              </div>
        </li>
  
  </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="writerlogin.php"><span class="glyphicon glyphicon-pencil"></span> writer</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
         <li><a href="adminlogin.php">Admin</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
        </ul>
      </div>
    </nav>

    <div id="sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div id="cont"style="margin-top:180px;">
            <div class="parent-div d-flex align-items-center justify-content-center">
              <h1 class="child-div" style="color:rgb(4,4,105);">Daylight News</h1>
              <p style="font-style:20px;" class="child-div">“We are not afraid to entrust the American people with unpleasant facts, foreign ideas, alien philosophies, and competitive values. For a nation that is afraid to let its people judge the truth and falsehood in an open market is a nation that is afraid of its people."
            </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">

          <div id="login-form">
            
          <div>
          <h3  style="text-align:center;color:#6b0518">Login!!</h3>
            <img src="img/user.jpg" alt="" height="75px" width="75px"  class="center-block" ></div>
            <div style="color:black;">
  <form action="loginin.php" method="post">
    <label for="username">Username:</label><i class="glyphicon glyphicon-user"></i>
    <input type="text" name="username" id="username" required ><br><br>
    <label for="password">Password</label><i class="glyphicon glyphicon-lock"></i>
    <input type="password" name="password" id="password"  required ><br><br>
    <button type="submit" name='submit' class="btn btn-danger" style="width:100%;">LOGIN</button><br><br>
    <a class="btn btn-info" href="signup.php">New user</a>
  </form>
  </div>
</div>

          </div>
        </div>
      </div>
    </div>


    <footer>
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





    

  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript">
$(function() {
  $('nav li').click( function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
});


</script>
  </body>

  </html>
