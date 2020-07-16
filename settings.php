<?php
   require('session.php');
?>
<html>
    <head>
        <title>Settings</title>
        
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
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container style1">
            <div class="row">
            <div class="col-xs-4 col-xs-offset-3">
            
                <form method="POST" action="db2.php">
                    <h2>Change Password</h2>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" required="true" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required="true" placeholder="Old Password">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name="password2" required="true" placeholder="New Password" pattern=".{6,}">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name="password3" required="true" placeholder="Retype new Password" pattern=".{6,}">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            
            </div>
            </div>
        </div>

    </body>
</html>

