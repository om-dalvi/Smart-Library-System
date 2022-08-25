<?php
session_start();
error_reporting(0);
$host = "localhost";
$port = "5432";
$dbname = "smartdb";
$user = "postgres";
$password = "password"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include 'css/style4.php' ?>
	<title>User Dashboard</title>
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
				<li class="nav-item"><a class="nav-link" href="change_password.php">Change Password</a></li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
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
    <title>Smart Library | User Dash Board</title>
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
                <h4 class="header-line text-center">USER DASHBOARD</h4>
                
                            </div>

        </div>
             <div class="row">

 <div class="col-md-6 col-sm-3 col-xs-3">
                      <div class="text-center">
                            <i class="fa fa-book fa-5x"></i>

                            <form action="issuebook.php">

                            <h3><?php echo htmlentities($issue);?></h3>
                      <button class="button button1">Download a book </button>
                          </form>
                        </div>
                    </div>

            
                 <div class="col-md-6 col-sm-3 col-xs-3">
                                       <div class="text-center">
                            <i class="fa fa-bars fa-5x"></i>
                            <form action="issuemag_.php">

                            <h3><?php echo htmlentities($issuemag);?> </h3>
                           <button class="button button2">Download a magzine</button>
                        </form>
                      </div>
                    </div>
          
              <br>
             <div class="row">
<br></br>
 
             <div class="col-md-7 col-sm-5 col-xs-0">
                      
                    </div>
               
                    </div> 
            
             
               
              <div class="col-md-6 col-sm-3 col-xs-3">
                      <div class="text-center">
                            <i class="fa fa-recycle fa-5x"></i>
                            <form action="search1.php">

                            <h3><?php echo htmlentities($search);?></h3>
                         <button class="button button4">Search Books</button> 
                      </form>
                        </div>
                    </div>
               
                      <div class="col-md-6 col-sm-3 col-xs-3">               
                    <div class="text-center">
                            <i class="fa fa-recycle fa-5x"></i>
                            <form action="search2.php">

                            <h3><?php echo htmlentities($search);?></h3>
                         <button class="button button4">Search Magzines</button> 
                      </form>
                        </div>
                    </div>

                    </div>
                   
        </div>



 

        </div>
             











        </div>             
			
                   
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
                 
               
             
               
            
             </div>
            
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

	
