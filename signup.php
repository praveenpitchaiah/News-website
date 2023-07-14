<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>REMOVE CONTENT</title>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        #signup-form{
    margin-top:80px;
    background-color:rgb(256, 256, 256);
    width: 400px;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  }
  #signup-form label{
    
          width:100px;
          display: inline-block;
      }
      #signup-form div{
  
  
  padding:10px;
  width: 400px;
      }
      #signup-form button{
          
          /* background-color:green; */
          color:white;
      }
      #signup-form button:hover{
          /* background-color:green; */
          color:purple;
      }
    </style>
  </head>
  <body>
   <div>
       <div id="signup-form" class="container">
           <div>
       <form action="signupinc.php" method="post">
       
           <h3>Signup!!!</h3>
           <label for="username">Username:</label><i class="glyphicon glyphicon-user"></i>
           <input type="text" name="username" id="username" required><br>
           <label for="">Password:</label><i class="glyphicon glyphicon-lock"></i>
           <input type="password" id="password" name="password" required><br>
           <label for="rptpassword">Repeat </label><i class="glyphicon glyphicon-lock"></i>
           <input type="password" name="rptpassword" id="rptpassword" required><br>
           <label for="gender">Gender:</label>
           <input type="radio" name="gender"  value="M">Male
           <input type="radio" name="gender"  value="F" >female <br>
           <label for="catagory">Catagory</label>
           <select name="catagory" id="catagory" required>
               <option value="student">Student</option>
               <option value="working">Working</option>
               <option value="others">Others</option>
               
           </select><br>
           <label for="email">Email:</label><i class="glyphicon glyphicon-envelope"></i>
           <input type="email" name="email" id="email" required><br>
           <label for="phone">Phone:</label><i class="glyphicon glyphicon-earphone"></i>
           <input type="number" id="phone" name="phone" required><br>
           <button type="submit" name='submit' class="btn btn-danger" style="width:100%;">Signup</button><br><br>
           By signup you accept the <a href="terms.php"> terms&conditions</a><br>
    <a class="btn btn-danger" href="index.php">back</a>

       </form>
       <?php
    if(isset($_GET['insert'])){
      $err=$_GET['insert'];
      if($err=='already'){
        echo "<h3 style='color:red;'>USERNAME ALREADY EXISTS</h3>";
      }
      if($err=='pass'){
        echo "<h3 style='color:red;'>PASSWORD IS NOT EQUAL TO REPEAT PASSWORD</h3>";
      }
      if($err=='email'){
        echo "<h3 style='color:red;'>INVALID EMAIL ID</h3>";
      }
      if($err=='phn'){
        echo "<h3 style='color:red;'>INVALID PHONE NUMBER</h3>";
      }
    }
    ?>
       </div>
       </div>
   </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>