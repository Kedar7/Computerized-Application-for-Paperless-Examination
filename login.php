<?php
session_start();
$username = $_POST['username'];
//if(!isset($_SESSION['flag']))
	//$_SESSION['flag']=0;
$password=md5($_POST['password']);
require_once("../connection.php");

$q1="select * from login_jobseeker where Email='$username' and Password='$password'";
$q2="select * from login_examiner where username='$username' and password='$password'";
$q3="select * from login_admin where username='$username' and password='$password'";
  //echo "$username.$password";

$res1=mysqli_query($con,$q1);
if(mysqli_num_rows($res1))
{
  $_SESSION['username']=$username;
  $_SESSION['password']=($password);
  header("location:dashboard/student.php");
  exit();
}
$res2=mysqli_query($con,$q2);

if(mysqli_num_rows($res2))
{
  $_SESSION['username']=$username;
  $_SESSION['password']=($password);
  header("location:dashboard/examiner/exam1.php");
  exit();
}
$res3=mysqli_query($con,$q3);

if(mysqli_num_rows($res3))
{
  $_SESSION['username']=$username;
  $_SESSION['password']=($password);
  header("location:admin.php");
  exit();
}
echo '
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script> alert("Invalid Credentials"); </script>
</body>
</html>';
mysqli_close($con);
//$_SESSION['flag']=1;
//echo "Invalid Credentials";

header("Refresh:1;url=index.php");
exit();

?>
