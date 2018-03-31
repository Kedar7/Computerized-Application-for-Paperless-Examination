<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'online_exam');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $ten = mysqli_real_escape_string($db, $_POST['10th']);
  $twelve = mysqli_real_escape_string($db, $_POST['12th']);
  $special = mysqli_real_escape_string($db, $_POST['special']);
  $degree = mysqli_real_escape_string($db, $_POST['degree']);
  $degree_marks = mysqli_real_escape_string($db, $_POST['degree_marks']);
  $pg_marks = mysqli_real_escape_string($db, $_POST['pg_marks']);
  $jaf=$_FILES['jaf']['name'];
  $fsize=$_FILES['jaf']['size'];

 
if($fsize<2097152 && $fsize>10240){
	
	
	$target= $target_dir .basename($_FILES["jaf"]["name"]);/// change file name later to id	
	move_uploaded_file($_FILES['jaf']['tmp_name'], $target);
  	$query = "INSERT INTO candidate (10th, 12th, special,degree,degree_marks,pg_marks,jaf) 
  			  VALUES('$username', '$email', '$password','$jaf')";
  	mysqli_query($db, $query);
   header('location: student.php');
}

}
}