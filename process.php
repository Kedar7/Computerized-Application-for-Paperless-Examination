<?php
session_start();

// Authorisation details. 
$username = "shivu.k.n.1996@gmail.com";
$hash = "b643e19e6a83bbed6d33e557ad79a58d0088af7ac49ddde5bb5096bd59002941";

$test = "0"; 

$sender = "TXTLCL"; 
$numbers = $_POST['num']; 
$rndno=rand(1000, 9999);
$message = urlencode("otp number.".$rndno); 


// $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test; 
// $ch = curl_init('http://api.textlocal.in/send/'); 
// curl_setopt($ch, CURLOPT_POST, true); 
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
// $result = curl_exec($ch);  
// curl_close($ch); 
// echo($result);
 $_SESSION['otp'] = 1234;//$rndno;
 
	

// $_SESSION['name']=$_POST['email'];
// $_SESSION['email']=$_POST['email'];
// $_SESSION['num']=$_POST['num'];

// $_SESSION['password']=$_POST['password'];
// $_SESSION['sex']=$_POST['sex'];
// $_SESSION['address']=$_POST['address'];
// $_SESSION['dob']=$_POST['dob'];
// $_SESSION['aadhar']=$_POST['aadhar'];

//header("Location: index.php");

 //} 
 ?>


