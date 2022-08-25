<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'css/style4.php' ?>

    <title>Admin Dashboard</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 300px;
            height: 450px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Smart Library</a>
            </div>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
            <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="change1_password.php">Change password</a></li>
                <li class="nav-item"><a class="nav-link" href="logout1.php">Logout</a></li>
            </ul>
        </div>
    </nav><br>
    <span><marquee>This is a Smart Library Management System.</marquee></span><br><br>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Smart Library | Admin Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line text-center">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="text-center">
                            <i class="fa fa-book fa-5x"></i>


                            <form action="addbook.php">
                            <h3><?php echo htmlentities($addbooks);?></h3>
                      <button class="button button1">Add Books</button>
                  </form>
                        </div>
                    </div>

                   <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="text-center">
                            <i class="fa fa-book fa-5x"></i>


                            <form action="removebook.php">
                            <h3><?php echo htmlentities($removebooks);?></h3>
                      <button class="button button2">Remove Books</button>
                  </form>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <div class="text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <form action="searchbook.php">
                            <h3><?php echo htmlentities($search);?></h3>
                           <button class="button button4">Search Book</button> 
                        
                        </form>
                    </div>
                    </div>
                    

                   <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="text-center">
                            <i class="fa fa-book fa-5x"></i>

                            
                        
                            <form action="addmag.php">
                            <h3><?php echo htmlentities($addmagzine);?></h3>
                      <button class="button button1">Add Magzine</button>
                  </form>
                        </div>
                    </div>

                    

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="text-center">
                            <i class="fa fa-book fa-5x"></i>


                            <form action="removemagzine.php">
                            <h3><?php echo htmlentities($removemagzine);?></h3>
                      <button class="button button2">Remove Magzine</button>
                  </form>
                        </div>
                    </div>

                

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="text-center">
                        <i class="fa fa-user fa-5x"></i>
                        <form action="searchmag.php">
                            <h3><?php echo htmlentities($search);?></h3>
                            <button class="button button4">Search Magzine</button>
                        </form>
                    </div>
                   </div>

                    <div class="col-md-12 col-sm-0 col-xs-0">
                      <div class="text-center">
                            <i class="fa fa-recycle fa-5x"></i>

                            <form action="registration.php">
                            <h3><?php echo htmlentities($adduser);?></h3>
                         <button class="button button3">Add User</button> 
                        </form>
                        </div>
                    </div>
               




             
        
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
                 
               
             
               
            
             

     <!-- CONTENT-WRAPPER SECTION END-->

      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</head>
</body>
</html>

    
