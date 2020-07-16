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
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>LOGIN</h2>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="db3.php">
            <p class="text-warning">
                Login to make a purchase
            </p>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required="true">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
                        
                        <div class="panel-footer">
        <p>
            Don't have an account? 
            <a href="signup.php">Register</a>
        </p>
    </div>
                    </div>
                </div>
            </div>
        </div>
        
        
         <footer class="f2">
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


