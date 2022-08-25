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
        <li class="nav-item"><a class="nav-link" href="change_password.php">Change Password</a></li>
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
                <h4 class="header-line text-center">Admin DASHBOARD</h4>
                
                            </div>

        </div>
        
<div class="row">
  <center>
          <form class="d-flex my-2" action="" method="get">
            <input class="form-control me-2" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>"type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
           </center>
        </div>
         <div class="row">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Book_ID.</th>
                <th scope="col">Book_Name</th>
                <th scope="col">Author</th>
                <th scope="col">Publication</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              if(isset($_GET['search']) || $_GET['search']!="")
              {
                echo $_GET['search'];
                $con_s_sql=pg_query($dbconn,"select * from books where concat(bookid,name,author,publication) like '%$_GET[search]%'");
                echo pg_last_error($dbconn);
                //$con_s_res=pg_fetch_assoc($con_s_sql);
                //print_r($con_s_res);
                $n=1;
                while($con_s_res=pg_fetch_assoc($con_s_sql))
                {
                  
                  echo '<tr>
                  <th scope="row">'.$n.'</th>
                  <td>'.$con_s_res['bookid'].'</td>
                  <td>'.$con_s_res['name'].'</td>
                  <td>'.$con_s_res['author'].'</td>
                  <td>'.$con_s_res['publication'].'</td>';
                  $n++;
                }
              }
              else{
              ?>
              <?php
                  $con_sql=pg_query($dbconn,"select * from books");
                    $n=1;
                    while ($con_res=pg_fetch_assoc($con_sql)) {
                      
                      echo '<tr>
                      
                      <td>'.$con_res['bookid'].'</td>
                  <td>'.$con_res['name'].'</td>
                  <td>'.$con_res['author'].'</td>
                  <td>'.$con_res['publication'].'</td>';
                      $n++;
                    }
                  }
                  pg_close($dbconn);
               ?>
          </table>
        </div>
     </tbody>
   </table>
 </div>
</div>
</div>
</body>
</html>