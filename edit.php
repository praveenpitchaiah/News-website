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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>EDIT</title>
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
       <form action="enditinc.php" method="post">
       
           <h3>Edit!!!</h3>
           <?php

$username=$_SESSION["username"];
$sql="SELECT * FROM user_details WHERE username='$username';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){?>
         <!--  echo "USER ID: ".$row['user_id']."<br>User Name: ".$row['username']." <br>Catagory: ".$row['catagory'].
            "<br> Email: ".$row['email']."<br> Phone: ".$row['phone']."<br>";-->





           <label for="username">Username:</label><i class="glyphicon glyphicon-user"></i>
           <?php  echo "<input type='text' name='username' id='username' disabled value=".$row['username']."><br>";?>
           <label for="">Password:</label><i class="glyphicon glyphicon-lock"></i>
    <?php      echo "<input type='password' id='password' name='password' value=".$row['password']."><br>";?>
           <label for="gender">Gender:</label>

      <?php
      $gender=$row['gender'];
      if($gender=='M'){
      echo    "<input type='radio' name='gender'  value='M' checked>Male";
        echo "<input type='radio' name='gender'  value='F' >female <br>";
     }
        else{
          echo    "<input type='radio' name='gender'  value='M'>Male";
          echo "<input type='radio' name='gender'  value='F' checked>female <br>"; 
        }?>

           <label for="catagory">Catagory</label>
           <select name="catagory" id="catagory">
           <?php   $catagory=$row['catagory'];
           if($catagory=='student'){
           echo "<option value='student' selected>Student</option>
               <option value='working'>Working</option>
               <option value='others'>Others</option>";
           }
           elseif($catagory=='working'){
            echo "<option value='student'>Student</option>
            <option value='working' selected>Working</option>
            <option value='others'>Others</option>";
           }
           else{
            echo "<option value='student' >Student</option>
            <option value='working'>Working</option>
            <option value='others' selected>Others</option>";
           }?>
           </select><br>
           <label for="email">Email:</label><i class="glyphicon glyphicon-envelope"></i>
          <?php echo "<input type='email' name='email' id='email' value='".$row['email']."'><br>";?>
           <label for="phone">Phone:</label><i class="glyphicon glyphicon-earphone"></i>
          <?php echo "<input type='number' id='phone' name='phone' value='".$row['phone']."'><br>";?>
           <button type="submit" name='submit' class="btn btn-danger" style="width:100%;">Save</button><br><br>
           <?php
     }
    }
           ?>
           
    <a class="btn btn-danger" href="homepage.php">back</a>

       </form>
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