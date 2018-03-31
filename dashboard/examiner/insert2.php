<?php
session_start();

// initializing variables


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'online_exam');

// REGISTER USER
if (isset($_POST['abc'])) {
  // receive all input values from the form
  $Name= mysqli_real_escape_string($db, $_POST['examname']);
  $Postname  = mysqli_real_escape_string($db, $_POST['name']);
  $ExamDate = mysqli_real_escape_string($db, $_POST['date']);
  $FromTime = mysqli_real_escape_string($db, $_POST['fromtime']);
  $ToTime = mysqli_real_escape_string($db, $_POST['totime']);
  $NoofQuestion = mysqli_real_escape_string($db, $_POST['totalquestions']);
  $TotalMarks = mysqli_real_escape_string($db, $_POST['totalmarks']);
  $createdby = mysqli_real_escape_string($db, $_POST['createdby']);
  $ten = mysqli_real_escape_string($db, $_POST['10th']);
  $twelve  = mysqli_real_escape_string($db, $_POST['12th']);
  $degree  = mysqli_real_escape_string($db, $_POST['degree']);
  $Specialization = mysqli_real_escape_string($db, $_POST['Specialization']);


 

	
	
	
  	$query = "INSERT INTO exams (Name,Postname,ExamDate,FromTime,ToTime,NoofQuestions,TotalMarks,ExaminerID,10th,12th,degree,specialization) 
  			  VALUES('$Name', '$Postname', '$ExamDate','$FromTime','$ToTime','$NoofQuestion','$TotalMarks','$createdby','$ten','$twelve','$degree','$specialization')";
  	mysqli_query($db, $query);
   header('location: exam2.php');


}
