 <?php

if (isset($_SESSION['id'])) {
     header('location: home.php');
} else {
  echo "Hello Guest";
}
?>
<html>
    <head>
        <title>SignUp</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="finalstyle.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        //<?php
//        // put your code here
//        
//        ?>
        
         <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-login"></span>Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container style1">
            <div class="row">
                <div class="col-xs-6">
                    <img src="data:image/jpeg;base64,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" class="imagee">
                </div>
                <div class="col-xs-6">
                    <form method="POST" action="db.php">
                        <h1>SIGN UP</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                    
                </div>
                 <div class="form-group">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true" pattern=".{6,}">
                     
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required="true" pattern="[1-9]{1}[0-9]{9}">
                    
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required="true">
                </div>
                 <div class="form-group">
                     <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="true">
                </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
            </div>
        </div>
       
        
        <footer >
            <center>
              <div class="row">
                <div class="col-xs-4">
                    <h3>Information</h3>
                </div>
                <div class="col-xs-4">
                    <h3>My Account</h3>
                </div>
                <div class="col-xs-4">
                    <h3>Contact Us</h3>
                </div>
              </div>
            </center>
            
            <center>
              <div class="row">
                <div class="col-xs-4">
                    <a href="about.php">About Us</a>
                </div>
                <div class="col-xs-4">
                    <a href="login.php">Login</a>
                </div>
                <div class="col-xs-4">
                    <p>Contact: +91-9717614538</p>
                </div>
              </div>
            </center>
          
            <center>
              <div class="row">
                <div class="col-xs-4">
                    <a href="contact.php">Contact Us</a>
                </div>
                <div class="col-xs-4">
                    <a href="signup.php">SignUp</a>
                </div>
              </div>
            </center>
        </footer>

    </body>
</html>


