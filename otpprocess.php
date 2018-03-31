<?php
	session_start();
	// $url='localhost';
	// $username = "root";
	// $password = "";
	// $dbname = "hackathon";
	// $conn = mysqli_connect($url, $username, $password, $dbname);

	$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
	if (!$con)
	{
		echo "Failed to connect to MySQL: " . mysqli_error();
	}

	/*$_SESSION['name']=$_POST['email'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['num']=$_POST['num'];
	$_SESSION['password']=$_POST['password'];
	$_SESSION['sex']=$_POST['sex'];
	$_SESSION['address']=$_POST['address'];
	$_SESSION['dob']=$_POST['dob'];
	$_SESSION['aadhar']=$_POST['aadhar'];*/

	//$_SESSION['otp']=$rndno;
	//header("Location: index.php");

		$name=$_POST['name'];
		$email=$_POST['email'];
		$num=$_POST['num'];
		$password=md5($_POST['password']);
		$sex=$_POST['sex'];
		$address=$_POST['address'];
		$aadhar=$_POST['aadhar'];
		$dob=$_POST['dob'];
		$dist=$_POST['dist'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];

		$_SESSION['username'] 	= $email;
		$_SESSION['Name']	= $name;	


	$rno = $_SESSION['otp'];
	$urno=$_POST['otpvalue'];
	if(!strcmp($rno,$urno))
	{
		
		$res1 = mysqli_query($con, "SELECT Email FROM login_jobseeker WHERE Email='".$email."'");
		if($res1)
		{
			echo "Email already exist";
		}
		


		$sql = "INSERT INTO candidate (Name,Address,District,State,Mobile,Pincode,DOB,Gender,EmailID,Password,AadharCard)
		VALUES ('$name','$address','$dist','$state','$num','$pincode','$dob','$sex','$email','$password','$aadhar')";

		

		if (mysqli_query($con, $sql)) {

			$sql1 = "insert into login_jobseeker(Email,Password) values ('$email','$password')";
			if(mysqli_query($con, $sql1)){

//				$_SESSION['username'] = $email;
				header( "Location: dashboard/student.php");
				exit();
			}

			/*$username = "shivu.k.n.1996@gmail.com";
			$hash = "b643e19e6a83bbed6d33e557ad79a58d0088af7ac49ddde5bb5096bd59002941";

			$test = "0"; 

			$sender = "TXTLCL"; 
			$message = urlencode("Thank u for register with us. we will get back to u shortly.");

			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&num=".$num."&test=".$test; 
			$ch = curl_init('http://api.textlocal.in/send/'); 
			curl_setopt($ch, CURLOPT_POST, true); 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($ch);  
			curl_close($ch); 
			echo($result); 



			if(curl_errno($ch))
			{
				echo 'error:' . curl_error($ch);
			}
			curl_close($ch);
			header( "Location: dashboard/admin.php");*/
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}

		mysqli_close($con);
		return true;


	}
	else
	{
		echo "Entered OTP do not match";
		return false;
	}
?>





	