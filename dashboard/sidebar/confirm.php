<?php
	$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
	  if (!$con)
	  {
	    echo "Failed to connect to MySQL: " . mysqli_error();
	  }

  	$var=$_GET['id'];
	$query ="select emailid from examiner where ExaminerID='$var'";
	$records = mysqli_query($con,$query);
	while ($obj=mysqli_fetch_object($records))
	{
		$to=$obj->emailid;
	}
	$subject = 'You have successfully registered.To verify your account please login    '; 
	$message = 'add';
		$headers = 'From:Git@edu.com' . "\r\n" .
    	'Reply-To: Hackthon@example.com' . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();
		$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
		$str = str_shuffle($str);
		$str = substr($str, 0, 15);

	
			
		$url = "http://localhost/hakathon/index.php?token=$str&emailid=$to";

		mail($to, "Verification", "To verify Please click on this link : $url", $headers);

			//$connect->query("replace into examiner(token) values ('$str')");
				
		$connect->query("UPDATE Examiner SET token = '$str' WHERE emailid='$to'");
		

		header("Location: admin.php");
		exit();
	?>