<?php
	//include("../../connection.php");
 	$con=mysqli_connect("localhost","root","","online_exam");
	$ExamID=$_GET['ExamID'];
	$query="select * from results where `ExamID`='$ExamID'";
	$result=mysqli_query($con,$query);
	while ($data=mysqli_fetch_array($result)) 
	{
		chdir("../admin/results");
		$filename=$ExamID.".csv";
		//echo $filename;
		header('content-type: application/csv');
		header("Content-Disposition:Attachment ; filename=$filename");
		//header('content-transfer-encoding:binary');
		@readfile($filename);
		
	}
?>