<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   require('session.php');
?>
<html>
    <head>
        <title>Home</title>
        
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
        
          <div class="container-fluid style1" >
           
              <div class="row">
                  
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>Vivo V17</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://static.toiimg.com/photo/73078527.cms" alt="vivo-1">
                               <div class="caption">
                                <p>Performance: Snapdragon 675, Storage:128 GB, Camera: 48+8+2+2 MP, Battery: 4500 mAh</p>
                                <p>Price: Rs24,990.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>Vivo V9 Pro</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://i.gadgets360cdn.com/products/large/1523605585_635_vivo_y71_db.jpg" alt="vivo-2">
                               <div class="caption">
                                <p>Performance: Snapdragon 712, Storage:128 GB, Camera: 48+8+2+2 MP, Battery: 5000 mAh</p>
                                <p>Price: Rs22,799.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>Vivo V17</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://static.toiimg.com/thumb/msid-70806196,width-220,resizemode-4,imgv-6/Vivo-Z1x.jpg" alt="vivo-3">
                               <div class="caption">
                                <p>Performance: Snapdragon 712, Storage: 64 GB, Camera: 48+8+2 MP, Battery: 4500 mAh</p>
                                <p>Price: Rs24,433.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>    
                  
              </div>
              
              <div class="row">
                  
                 <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>One Plus 6</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://5.imimg.com/data5/VW/QW/MY-39447185/oneplus-6-a6000-dual-sim-8gb-ram-128gb-lte-28mirror-black-29-500x500.jpg" alt="one-1">
                               <div class="caption">
                                <p>Performance: Snapdragon 712, Storage: 64 GB, Camera: 16+16 MP, Battery: 4500 mAh</p>
                                <p>Price: Rs28,000.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>One Plus 7</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://images-na.ssl-images-amazon.com/images/I/512xYZ5OjGL._SX569_.jpg" alt="one-2">
                               <div class="caption">
                                <p>Performance: Snapdragon 712, Storage: 128 GB, Camera: 32+16 MP, Battery: 5000 mAh</p>
                                <p>Price: Rs35,000.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>
                                  
                   <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h1>One Plus 8</h1>
                      </div>
                         <div class="panel-body">
                           <div class="thumbnail">
                             <img src="https://www.gizmochina.com/wp-content/uploads/2019/10/oneplus_8_pro--600x600.png" alt="one-2">
                               <div class="caption">
                                <p>Performance: Snapdragon 712, Storage: 64 GB, Camera: 32+16 MP, Battery: 5500 mAh</p>
                                <p>Price: Rs42,000.00</p>
                                <button type="submit" class="btn btn-primary btn-block">Add to Cart!</button>
                               </div>
                           </div>
                         </div>
                    </div>
                  </div>
                  
              </div>
              
          </div>
        
      

    </body>
</html>


