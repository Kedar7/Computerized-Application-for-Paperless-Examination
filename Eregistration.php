
<?php

	$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
	if (!$con)
	{
		echo "Failed to connect to MySQL: " . mysqli_error();
	}

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$Designation=$_POST['Designation'];
$Organization=$_POST['Organization'];
$OrganizationID=$_POST['OrganizationID'];
$Gender=$_POST['Gender'];
$dob=$_POST['dob'];
$mobileNo=$_POST['mobileNo'];
$address=$_POST['address'];



$sql = "insert into Examiner (Name,Designation,Organisation,OrganizationID,dob,gender,emailid,phone,address,password) values ('$name','$Designation','$Organization','$OrganizationID','$dob','$Gender','$email','$mobileNo','$address','$password')";
// "insert into examiner (Name,Designation,Organisation,OrganizationID,dob,gender,emailid,phone,address,password) values ('abc','gnation','Organization','OrganizationID','12/05/95','Gender','email','mobileNo','address','password')";


	
 $res =  mysqli_query($con,$sql);
 //echo $res;
if ($res) {

	echo "true";
	// echo "<script>
 // 			alert('your request has been registered plesae wait for conformation');
 // 			</script>";
 // 	header('location:index.php');
 // 	exit();
}
else{
	echo "Error";
	// echo "<script>
 	// 		alert('Error while inserting');
 	// 		</script>";
}
 	





?>

