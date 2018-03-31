<?php

//include("connection.php");
 $con=mysqli_connect("localhost","root","","online_exam");
$examid="2gi14"; // $_SESSION['ExamID'];


    //get the csv file
    //$file = $_FILES[csv][tmp_name];
    //$examid=$_SESSION['ExamID'];
    chdir("qns");
    $handle = fopen("2gi14.csv","r") or die("defe");
    
    //loop through the csv file and insert into database
    do
	{
        if ($data[0]) {
            mysqli_query($con,"INSERT INTO questions (ExamID, Question, Opt1, Opt2, Opt3, Opt4, Answer, Marks, Duration) VALUES
                (
                	'".addslashes($examid)."',
                    '".addslashes($data[0])."',
                    '".addslashes($data[1])."',
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."',
                    '".addslashes($data[4])."',
                    '".addslashes($data[5])."',
                    '".addslashes($data[6])."',
                    '".addslashes($data[7])."'
                    
                )
            ");
        }
    }while ($data = fgetcsv($handle,1000,",","'")); 

    header('location:exam.php');
    exit();


?>



