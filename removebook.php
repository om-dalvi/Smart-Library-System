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
if($dbconn)


if(isset($_POST['submit'])){
    
    
$sql = "DELETE FROM books WHERE bookid ='" . $_POST["bookid"] . "'";

    $ret = pg_query($dbconn, $sql);
    echo pg_last_error($dbconn);
    if($ret){
        
          header("location: ./admin_dashboard.php");
    }
}
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
                <li class="nav-item"><a class="nav-link" href="change1_password.php">Change Password</a></li>
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

            <center><h2>Smart Library Management System</h2></center>
    
    <form action="" method="POST">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter BOOK ID :</td>
            <td> <input type="text" name="bookid" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Name :</td>
            <td> <input type="text" name="name" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            
            <tr>
            <td> Enter Publication: </td>
            <td> <input type="text" name="publication" size="48"> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <button class="btn btn-primary" name="submit">Remove Book</button>
            </td>
            </tr>
        </table>
    </form>
</body>
</html>

