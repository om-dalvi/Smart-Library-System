<?php
$host = "localhost";
$port = "5432";
$dbname = "smartdb";
$user = "postgres";
$password = "password"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
      $sql = "insert into register(name,email,password,mobno)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."','".$_POST['mobno']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
          header("location: ./login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<?php include 'css/style.php' ?>
		<?php include 'links/links.php' ?>
	</head>
	<body>
		<form action="registration.php" method=POST>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin.php">Smart Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin.php">Admin Login</a>
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
		<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4><br>
		<p class="text-center">Get started with your free account</p>
		
		<form action="login.php" method="POST">
			<br></form>
			<div class="form-group input-group">
				<div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-user"></i> </span>
			</div>
			<input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
			</div> <!--form-group//-->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				</div>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
			</div> <!-- form-group//-->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-phone"></i>
					</span>
				</div>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="">	

			</div> <!--form-group//-->
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i > </span> 
				</div>
				<input type="text" name="mobno" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" id="mobno" class="form-control" maxlength="10"    placeholder="Enter Mobile Number"  required="">

				 
				</div> <!-- form-group// -->
				
				<div class="form-group"> <br>
    <input type="submit" name="submit" class="btn btn-primary" value="Create Account">
					</div> <!--form-group//-->
					<br><p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
				</form>
			</article>
		</div> <!-- card.// -- >
</body>
</html>
