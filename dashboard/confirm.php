<?php

	session_start();
	$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
  if (!$con)
  {
    echo "Failed to connect to MySQL: " . mysqli_error();
  }

  $jobseekerid = $_SESSION['JobSeekerID'];
  $examid = $_GET['ExamID'];

  $sql  = "insert Into registration(Examid,JobSeekerID) Values('$examid','$jobseekerid')";
	if($result = mysqli_query($con,$sql)) {
		echo "Success";
	} else {
		echo "Failure";
	}
	header("location:student.php")

	//$sq = "select * from exams where ExamID = '$examid'";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	alert("You have successfully registered ")
</script>
</body>
</html>