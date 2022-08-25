<?php
$host = "localhost";
$port = "5432";
$dbname = "smartdb";
$user = "postgres";
$password = "password"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    $name = trim($_POST["name"]); 
    $hashpassword = ($_POST['pwd']);
    $sql ="select * from admin where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    $userdata = pg_fetch_assoc($data);
    $email = $userdata['email'];
    $name = $userdata['name'];
    $id = $userdata['id'];
    if($login_check > 0){ 
        session_start();
      $_SESSION["login"] = true;
     $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $id;
      header("location: admin_dashboard.php");
    }else{
        
        echo "Invalid Details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'css/style2.php' ?>
<?php include 'css/style.php' ?>
<?php include 'links/links.php' ?>
</head>
<body>
	 <form action="admin.php" method="post">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="registration.php">Smart Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="registration.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
  
  <span><marquee><h5>This is a Smart Library Management System.</h5></marquee></span><br><br>
<div class="main">
 <section class="sign-in">
<div class="container">
<div class="signin-content"> 
 <div class="signin-image">
<figure>
<img src="assets/img/admin-img.png" alt="sign-up-image" ezimgfmtrs rscb2 sc ng ngcb2>
</figure>
<a class="signup-image-link" href="registration.php">Create an account</a>

</div>
<div class="signin-form">
<h2 class="form-title">Login</h2>
<form id="login-form" class="register-form" method="post">
<div class="form-group">
<label for="your_name">
<i class="zmdi zmdi-account material-icons-name">

</i>
</label>

<input id="email_id" type="email" name="email" placeholder="Email ID" autocomplete="on" required="">
</div>
<div class="form-group">
<label for="your_pass">
<i class="zmdi zmdi-lock">

</i>
</label>

<input id="pass" type="password" name="pwd" placeholder="Password" required="">
</div>
<div class="form-group form-button">
<input id="signin" class="form-submit" type="submit" name="submit" value="Log in">
</div>
</form>
</div>
</div>
</html>
</div>
</section>
</html>
