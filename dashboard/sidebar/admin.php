<?php
	if (isset($_POST["forgotPass"])) {
		//$connection = new mysqli("localhost", "root", "", "online_exam");
		$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
  if (!$con)
  {
    echo "Failed to connect to MySQL: " . mysqli_error();
  }
		$email = $connection->real_escape_string($_POST["email"]);
		
		$data = $connection->query("SELECT id FROM registration WHERE email='$email'");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url = "http://localhost/hakathon/resetPassword.php?token=$str&email=$email";

			mail($email, "Reset password", "To reset your password, please visit this: $url", "From: kedarkulkarn@nm,.com\r\n");

			$connection->query("UPDATE registration SET token='$str',  WHERE email='$email'");

			echo "Email sent";
		} else {
			echo "Please check your inputs!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
           
      font-size: 20px;
      color: #111;
  }
   

  .btn {
      padding: 10px 20px;
      background-color: #e77637;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #e77637;
      background-color: #fff;
      color: #000;
  }
  
  
  .nav-tabs li a {
      color: #777;
	  
  }


  footer {
      background-color: #e77637;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }

 </style>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
<h3 style="text-align:center;color:#777777;">Welcome to Online Examination <strong style="color:#e77637;"><?php echo $_SESSION['email'];?></strong></h3>

<h4 style="margin-top:-30px;float:right;"><a href="logout.php"> Logout  </a></h4>
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">List of examiner</a>
  <a href="admin2.php" class="w3-bar-item w3-button">Examiners conducting online exams</a>
  <a href="admin3.php" class="w3-bar-item w3-button">Online Users</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container" style="background-color:white;color:#777777">
    <h1 style="margin-top:-5px;">List of examiners :
      <?php
          $connect=mysqli_connect("localhost","root","","online_exam");
          $sq1 = "SELECT COUNT(ExaminerID) from Examiner";
          $re1 = mysqli_query($connect,$sq1);
          $ro1 = mysqli_fetch_array($re1);
          echo $ro1[0];

    ?>
    </h1>
  </div><hr>
</div>

<div class="w3-container">
<input id="myInput" type="text" placeholder="Search..">
<div class="container">
  <h4 style="color:#777777;"><strong>Examiners</strong></h4>
                                                                                    
  <div class="table-condensed" style="border:1px  black;width:93%;height:300px;overflow:scroll;">          
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Exam ID</th>
        <th> Name</th>
        <th>Designation</th>
        <th>Organisation</th>
        <th>OrganizationID</th>             
        <th>emailid</th>
        <th>phone</th>
        

      
      </tr>
    </thead>
	
    <tbody  id="myTable">
     <?php
  $con=mysqli_connect("localhost","root","","online_exam");
  
  $sql="select * from Examiner";

  $records = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($records))
{
	echo "<tr>";

  echo "<td>". $row[0]."</td>";
	echo "<td>". $row['Name']."</td>";
	echo "<td>". $row['Designation']."</td>";
	echo "<td>". $row['Organisation']."</td>";
  echo "<td>". $row['OrganizationID']."</td>";
	echo "<td>". $row['emailid']."</td>";
	echo "<td>". $row['phone']."</td>";
	///echo "<td><a href=jaf.php>?id= $row['jaf'].</a> ."</td>";
		

		
	echo "<td><a href=delete.php?id=".$row[0]." onClick=\"return confirm('Are you sure you want to delete?');\">DELETE</td>";
	echo "<td><a href=confirm.php?id=".$row[0]." onClick=\"return confirm('Are you sure you want ro confirm');\">Confirm</td>";

}
  
  
  ?>
    </tbody>
  </table>
  </div>
</div>

<!--<div class="container">
<h4 style="color:#777777;"><strong>Enter Examiner:</strong></h4>

 <div class="row">
	  
		<div class="col-sm-12 form-group">
				<form action="admin.php" method="post">
			<input type="text" class="form-control"  name="email" placeholder="Email" required><br>
			<input type="submit" class="btn pull-center" name="forgotPass" value="Send">
		</form>
        </div>
	</div>

	
	
		</div>-->

</div>
   
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>
