<?php
$con = mysqli_connect("localhost", "root", "", "final","3308") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    echo "wrong email";
    header('location: signup.php');
  
}
$password = $_POST['password'];
if (strlen($password) < 6) {
        echo "wrong password!";
  header('location: signup.php');

}

$contact=$_POST['contact'];
if(strlen($contact)!=10)
{
        echo "wrong contact";
    header('location: signup.php');

}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$password= md5($password);
$name= mysqli_real_escape_string($con, $_POST['name']);
$city= mysqli_real_escape_string($con, $_POST['city']);
$address= mysqli_real_escape_string($con, $_POST['address']);
//
$login_query = "insert into signup(email, name, password, contact, city, address) values ('$email', '$name', '$password', '$contact', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $login_query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
if (isset($_SESSION['id'])) {
     header('location: home.php');
} 
?>

