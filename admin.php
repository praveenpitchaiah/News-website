<?php
include 'connection.php';
session_start();
$username=$_SESSION["username"];
if($username!='admin'){
  header('Location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin Page</title>
    <style>
*{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
}
td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
  </head>
  <body>
      <div>
          <h1>Welcome </h1>
      </div>
      <div>
          <h2>Writer details</h2>
   <?php
   $sql="SELECT * FROM writer_details WHERE del_status IS NULL;;";
   $result=mysqli_query($conn,$sql);
   echo "<table><tr><th>WRITER ID</th><th>WRITER NAME</th><th>USERNAME</th><th>QUALIFICATION</th><th>DOB</th><th>EXPERIENCE</th><th>COUNTRY</th><th>GENDER</th><th>LANGUAGE</th><th>EMAIL ID</th><th>PHONE</th></tr>";
           
   if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc($result)){
           echo "<tr>
           <td>".$row['writer_id']."</td>
           <td>".$row['writer_name']."</td>
           <td>".$row['username']."</td>
           <td>".$row['qualification']."</td><td>".$row['DOB']."</td>
           <td>".$row['experience']."</td><td>".$row['country']."</td>
           <td>".$row['gender']."</td>
           <td>".$row['language']."</td><td>".$row['email_id']."</td>
           <td>".$row['phone']."</td>
           <td><a href='delete.php?writer_id=".$row['writer_id']."' class='btn btn-danger'>Delete</a></td>
           </tr>"; 
           echo "<br>";
       }
   }
   echo "</table>";
  
   ?>

</div>
<div>
          <h2>Reader details</h2>
   <?php
  
  $sql="SELECT * FROM user_details WHERE del_status IS NULL;;";
   $result=mysqli_query($conn,$sql);
   echo "<table><tr><th>USER ID</th><th>USERNAME</th><th>GENDER</th><th>EMAIL ID</th><th>CATAGORY</th><th>PHONE</th></tr>";
           
   if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc($result)){
           echo "<tr>
           <td>".$row['user_id']."</td>
           <td>".$row['username']."</td>
           <td>".$row['gender']."</td>
           <td>".$row['email']."</td>
           <td>".$row['catagory']."</td>
           <td>".$row['phone']."</td>
           <td><a href='delete.php?user_id=".$row['user_id']."' class='btn btn-danger'>Delete</a></td>
           </tr>";

           

           echo "<br>";
       }
   }
   echo "</table>";
  
   ?>

</div>

<div>
          <h2>Comments:</h2>
   <?php
  
  $sql="SELECT * FROM comments;";
   $result=mysqli_query($conn,$sql);
   echo "<table><tr><th>USER NAME</th><th>COMMENTS</th></tr>";
           
   if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc($result)){
           echo "<tr>
           <td>".$row['user_id']."</td>
           <td>".$row['comment']."</td>
           </tr>";

           

           echo "<br>";
       }
   }
   echo "</table>";
  
   ?>

</div>
<a href="logout.php" class="btn btn-success">Logout</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>