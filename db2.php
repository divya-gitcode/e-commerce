<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "final","3308") or die(mysqli_error($con));



$password = $_POST['password']; 
$email= mysqli_real_escape_string($con,$_POST['email']);     
      
      $sql = "SELECT id FROM signup WHERE password = '$password' and email='$email";
     
      $result = mysqli_query($con,$sql);
        
      $row = mysqli_fetch_array($result);

      
      $count = mysqli_num_rows($result);
      
     $p2=$_POST['password2'];
     $p2=md5($password);
     $p3=$_POST['password3'];

if($sql!=$password)
{
    echo "current password wrong!";
   
}
 else {
    if($p2 == $p3)
        {
        
mysqli_query($con,"UPDATE signup set password='$p2' WHERE email='$email'");
echo "Password Changed Sucessfully";
header('location:logout.php');
}
else
{
 echo "Password is not correct";
 
}
}


?>


