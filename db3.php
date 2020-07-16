<?php
$con = mysqli_connect("localhost", "root", "", "final","3308") or die(mysqli_error($con));
session_start();

 $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
     
      
      $sql = "SELECT id FROM signup WHERE email = '$email' and password = '$password'";
      $sql2="select id from signup where email='$email'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);

      
      $count = mysqli_num_rows($result);
      
      $result2=mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2);
      $count2 = mysqli_num_rows($result2);
		
      if($count == 1) {
//         session_register("myusername");
         $_SESSION['email'] = $email;
         
         header("location: home.php");
      }else if($count2==1) {
         echo "Your Password is invalid";
      }
      else
      {
          echo"Invalid username!";
      }

