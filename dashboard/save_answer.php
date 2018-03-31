<?php
	// save_answer.php
	$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
  	if (!$con)
  	{
    	echo "Failed to connect to MySQL: " . mysqli_error();
  	}

	$ExamID  		= $_GET['examid'];
	$QuestionID 	= $_GET['questionid'];
	$JobSeekerID 	= $_GET['jobseekerid'];
	$AnswerSelected = $_GET['answerselected'];
	//echo $ExamID;

	$enc = md5($AnswerSelected);

	$sql1 = "select Answer, Marks from questions where QuestionID='$QuestionID' and ExamID ='$ExamID'";
  
  	$res1 = mysqli_query($con,$sql1);
  	$arr = mysqli_fetch_array($res1);
   	//echo $arr[0];

   	if($arr[0] == $enc)
   		$Marks = $arr[1]; 
   	else
   		$Marks = 0;


   	echo $Marks;
	// write code to write to the answers given table
	$sql  = "Replace Into answers(ExamID,JobSeekerID,QuestionID,Answer,Marks) ";
	$sql .= " Values('$ExamID','$JobSeekerID','$QuestionID','$AnswerSelected','$Marks')";
	if($result = mysqli_query($con,$sql)) {
		echo "Success";
	} else {
		echo "Failure";
	}
?>