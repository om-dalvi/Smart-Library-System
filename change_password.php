<?php
session_start();
$host = "localhost";
$port = "5432";
$dbname = "smartdb";
$user = "postgres";
$password = "password"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$user_id=$_SESSION["id"];
if ($_SERVER['REQUEST_METHOD']=="POST")  {
    $data = pg_query($dbconn, "SELECT *from register WHERE id='$user_id'");
    $userdata = pg_fetch_array($data);
    $pass=md5($_POST["currentPassword"]);
    $pass1=md5($_POST["newPassword"]);
    $pass2=md5($_POST["confirmPassword"]);
    echo $pass."<br>";
    echo $userdata['password']."<br>";
    if ($pass == $userdata["password"]) {
        $result=pg_query($dbconn, "UPDATE register set password='$pass1' WHERE id='" . $_SESSION["id"] . "'");
        echo pg_last_error($dbconn);
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<!DOCTYPE html>
<html>
<head>
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
  <script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}   
return output;
}
</script>
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
    <div class="col-md-12">
      <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-8">
        <div class="card bg-light" style="width: 500px">
          <div class="card-body">
      <h1> Change Password </h1>
   <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">

</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</p>
</div>
</div>
</body>
</html>