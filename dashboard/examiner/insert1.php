<?php
session_start();

// initializing variables


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'online_exam');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Question = mysqli_real_escape_string($db, $_POST['question']);
  $Opt1 = mysqli_real_escape_string($db, $_POST['opt1']);
  $Opt2 = mysqli_real_escape_string($db, $_POST['opt2']);
  $Opt3 = mysqli_real_escape_string($db, $_POST['opt3']);
  $Opt4 = mysqli_real_escape_string($db, $_POST['opt4']);
  $Marks = mysqli_real_escape_string($db, $_POST['marks']);
  $Duration = mysqli_real_escape_string($db, $_POST['duration']);


 

	
	
	
  	$query = "INSERT INTO questions (question, opt1, opt2,opt3,opt4,marks,duration) 
  			  VALUES('$Question', '$Opt1', '$Opt2','$Opt3','$Opt4','$Marks','$Duration')";
  	mysqli_query($db, $query);
   header('location: exam.php');


}
}