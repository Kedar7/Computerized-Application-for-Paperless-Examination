<?php
  $connect=mysqli_connect("localhost","root","","online_exam");
	$sql = "DELETE FROM candidate where OrganisationID='$_GET[OrganisationID]'";
	if(mysqli_query($connect,$sql))
		header("refresh:1; url=admin3.php");
	else
		echo"Not deleted";
		
	

?>


