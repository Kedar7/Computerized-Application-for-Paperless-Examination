
<!DOCTYPE html>
<html>
<head>
  <title>Examiner</title>
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

</head>
<body>
	<h3 style="text-align:center;color:#777777;">Welcome to Online Examination <strong style="color:#e77637;"><?php echo $_SESSION['email'];?></strong></h3>

	<h4 style="margin-top:-30px;float:right; padding-right: 10px;"><a href="logout.php"> Logout  </a></h4>
	<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
		<a href="exam1.php" class="w3-bar-item w3-button">Exams Conducted</a>
		<a href="exam2.php" class="w3-bar-item w3-button">Take Exams</a><!--Done-->
		<a href="exam.php" class="w3-bar-item w3-button">Fill question</a>
		<a href="exam3.php" class="w3-bar-item w3-button">Exam Results</a><!--Done-->
	</div>

	<div class="w3-main" style="margin-left:200px">
		<div class="w3-teal">
			<button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
			<div class="w3-container" style="background-color:white;color:#777777">
				<h1 style="margin-top:-5px;">Exam</h1>
			</div><hr>
		</div>

		<div class="w3-container" style="margin-left:-10px;">
			<div class="container">
				<h4 style="color:#777777;"><strong>Exam details</strong></h4>
				
				<div class="row">
					<div class="col-sm-5 form-group">
					<input class="form-control" id="name" name="name" class="error_form" placeholder="Exam name" maxlength="30" type="text" required>
					</div>

					<div class="col-sm-6 form-group">
					<input class="form-control" id="Postname" name="Postname" placeholder="Post name" type="text" required>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-2 form-group">
						<label>Examination date</label>
					</div>
					<div class="col-sm-3 form-group">
						<input class="form-control" id="ExamDate" name="ExamDate" placeholder="" type="date" required>
					</div>
					<div class="col-sm-3 form-group">
						<input class="form-control" id="FromTime" name="FromTime" placeholder="From time(24 hours format)" type="text" required>
					</div>
					<div class="col-sm-3 form-group">
						<input class="form-control" id="ToTime" name="ToTime" placeholder="To time(24 hours format)" type="text" required>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-5">
						<input class="form-control" id="NoofQuestions" name="NoofQuestions" placeholder="Number of Questions" type="text" required>
					</div>

					<div class="col-sm-6 form-group">
						<input class="form-control" id="TotalMarks" name="TotalMarks" placeholder="Total Marks"  type="text" required>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-11 form-group">
						<input class="form-control" id="ExaminerId" name="ExaminerId" placeholder="Created By (Enter ExaminerID)" type="text" required>
					</div>
				</div>

				<h4 style="color:#777777;"><strong>Minimum Qualification for the Exam</strong></h4>
				
				<div class="row">
					<div class="col-sm-3 form-group">
						<input class="form-control" id="10th" name="10th" placeholder="10th %" maxlength="30" type="text" required>
					</div>

					<div class="col-sm-3 form-group">
						<input class="form-control" id="12th"  name="12th" placeholder="12th / Diploma %" maxlength="30" type="text" required>
					</div>

					<div class="col-sm-3 form-group">
						<input class="form-control" id="degree" name="degree" placeholder="UG/PG %" maxlength="30" type="text" required>
					</div>

					<div class="col-sm-3 form-group">
						<input class="form-control" id="Specialization"  name="Specialization" placeholder="Specialization" maxlength="30" type="text" required>
					</div>
				</div>  
				
				<div class="row">
					<div class="col-sm-3 form-group" >
						<button class="btn pull-center" type="submit">Submit</button><br>
					</div>
				</div>
			</div>	
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