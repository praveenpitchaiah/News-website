<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $n1= $_POST['submit'];
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $error=$_FILES['image']['error'];
    if($error===0){
        if($img_size>250000){
            $em="Sorry,your file is too large.";
            header("Location:writerdashboard.php?error=$em");
        }
        else{
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$allowed_exs=array("jpg","jpeg","png","jfif");
if(in_array($img_ex_lc,$allowed_exs)){
    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path='uplodedImages/'.$new_img_name;
    move_uploaded_file($tmp_name,$img_upload_path);
}else{
    $em="you cannot upload this type of file";
    header("Location:writerdashboard.php?error=$em");
}
        }
    }
    else{
        $em="unknown error occured!";
        header("Location:writerdashboard?error=$em");
    }
    $date = date('Y/m/d H:i:s');
    $newsheading=str_replace("'","$%^&*",$_POST['heading']);
    $newscontent=str_replace("'","$%^&*",$_POST['news']);
    $sql="UPDATE news_details SET news_heading = '$newsheading', news_content = '$newscontent',image_url='$new_img_name',date='$date'  WHERE news_id='$n1';";
    $result=mysqli_query($conn,$sql);
    header('location:writerdashboard.php?update=success');
}

if(isset($_POST['flash'])){
    str_replace("'","$%^&*",$flash1=$_POST['flash1']);
    str_replace("'","$%^&*",$flash2=$_POST['flash2']);
    str_replace("'","$%^&*",$flash3=$_POST['flash3']);

$sql1="UPDATE flash SET news='$flash1' WHERE news_id=1001;";
$sql2="UPDATE flash SET news='$flash2' WHERE news_id=1002;";
$sql3="UPDATE flash SET news='$flash3' WHERE news_id=1003;";
$result=mysqli_query($conn,$sql1);
$result=mysqli_query($conn,$sql2);
$result=mysqli_query($conn,$sql3);
header('location:writerdashboard.php?update=successflash');
}

if(isset($_POST['main'])){
   $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $error=$_FILES['image']['error'];
    if($error===0){
        if($img_size>250000){
            $em="Sorry,your file is too large.";
            header("Location:writerdashboard.php?error=$em");
        }
        else{
$img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
$img_ex_lc=strtolower($img_ex);
$allowed_exs=array("jpg","jpeg","png","jfif");
if(in_array($img_ex_lc,$allowed_exs)){
    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path='uplodedImages/'.$new_img_name;
    move_uploaded_file($tmp_name,$img_upload_path);


}else{
    $em="you cannot upload this type of file";
    header("Location:writerdashboard.php?error=$em");
}
        }
    }
    else{


        $em="unknown error occured!";
      header("Location:writerdashboard.php?error=$em");
    }




   
  
     $newsheading=str_replace("'","$%^&*",$_POST['mainheading']);
     $newscontent=str_replace("'","$%^&*",$_POST['news']);
  echo $new_img_name;
     $sql="UPDATE main SET news_heading='$newsheading',news_content='$newscontent',image_url='$new_img_name';";
     $result=mysqli_query($conn,$sql);
     header('location:writerdashboard.php?update=success');

}

?>