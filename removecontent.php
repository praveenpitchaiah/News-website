<?php
include 'connection.php';
session_start();
$username=$_SESSION["wusername"];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>REMOVE CONTENT</title>
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
          <h2>Contents</h2>
   <?php
   $sql="SELECT * FROM sections;";
   $result=mysqli_query($conn,$sql);
   echo "<table><tr><th>Content</th><th>Del</th></tr>";
           
   if(mysqli_num_rows($result)>0){
       while($row=mysqli_fetch_assoc($result)){
           echo "<tr>
           <td>".$row['sec']."</td>
           <td><a href='deletecont.php?sec=".$row['sec']."' class='btn btn-danger'>Delete</a></td>
           </tr>"; 
           echo "<br>";
       }
   }
   echo "</table>";
  
   ?>

</div>
<a href="writerdashboard.php" class="btn btn-secondary">Back</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>