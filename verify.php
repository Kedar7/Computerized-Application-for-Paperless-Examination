<?php

$dbh = new mysqli("localhost","root","","hackathon");

$email = $_GET["email"];
$token = $_GET["token"];
$check_sql = "SELECT *  from recruiters where `email` = '$email' and `token` = '$token'";

$res = $dbh->query($check_sql);

if($dbh->errno){
	echo $dbh->error;
	die();
}else{
	echo "Number of rows returned \t".$res->num_rows;
	
	if($res->num_rows>0){
			
			$update_sql = "UPDATE recruiters SET approved = 1, token='' WHERE email = '$email'   ";
			$dbh->query($update_sql);
			
			if($dbh->errno){
				echo $dbh->error;
				
			}else{
				echo "Verified users successfullly";
			}
	}
	
	
}


