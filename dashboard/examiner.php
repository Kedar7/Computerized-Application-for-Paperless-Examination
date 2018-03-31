<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","hackathon");


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<hr>
<h4 style="margin-top:-50px;float:right;"><a href="logout.php"> Logout  </a></h4>



<div class="container">
<h4 style="color:#777777;"><strong>Enter Questions:</strong></h4>

 <div class="row">
	  
		<div class="col-sm-12 form-group">
				<input class="form-control" id="form_username"  name="name" class="error_form" placeholder="Question" maxlength="30" type="text" required>
				<span id="username_error_message"></span>
        </div>
	</div>
	<div class="row">
        <div class="col-sm-3 form-group">
				<input class="form-control" id="form_email" name="email" class="error_form"  placeholder="option a" type="email" required>
			
        </div>
		<div class="col-sm-3 form-group">
				<input class="form-control" id="form_email" name="email" class="error_form"  placeholder="option b" type="email" required>
			
        </div>
		<div class="col-sm-3 form-group">
				<input class="form-control" id="form_email" name="email" class="error_form"  placeholder="option c" type="email" required>
			
        </div>
		<div class="col-sm-3 form-group">
				<input class="form-control" id="form_email" name="email" class="error_form"  placeholder="option d" type="email" required>
			
        </div>
     </div>
	 <div class="row">
        <div class="col-sm-6">
				<input class="form-control" id="form_password" name="password"  placeholder="Marks"  type="password" required>
		 `		 <span id="password_error_message"></span>
		</div>
	 
        <div class="col-sm-6 form-group">
				<input class="form-control" id="form_retype_password"    class="error_form"  placeholder="Duration"  type="password" required>
          <span id="retype_password_error_message"></span>
		</div>
      </div>
	  
	  <div class="row">
	  <div class="col-sm-12 form-group">
           <button class="btn pull-center" name="abc"  id="send_otp" type="submit">Submit</button>  <button class="btn pull-center"  style="float:right;"  name="abc" id="send_otp" type="submit">Import</button>
        </div>
        </div>
		</div>


<div class="container">
  <h4 style="color:#777777;"><strong>Question's Entered</strong></h4>
                                                                                    
  <div class="table-responsive" style="border:1px  black;width:100%;height:200px;overflow:scroll;">          
  <table class="table">
    <thead>
      <tr>
        <th>Exam Id</th>
        <th>Question number</th>
        <th>Question</th>
        <th>Answer</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>Govt 1</td>
        <td> 10/12/18</td>
        <td>12:30pm</td>
		<td><button class="btn  pull-center"  style="border-right:5px solid white;" name="submit" type="submit">Delete</button><button class="btn  pull-center"  name="submit" type="submit">Edit</button></td> 
        
        
      </tr>
	   <tr>
        <td>2</td>
        <td>Govt 2</td>
        <td>18/12/18</td>
        <td>10:30pm</td>
        
      </tr>
	   <tr>
        <td>2</td>
        <td>Govt 2</td>
        <td>18/12/18</td>
        <td>10:30pm</td>
        
      </tr>
	    <tr>
        <td>2</td>
        <td>Govt 2</td>
        <td>18/12/18</td>
        <td>10:30pm</td>
        
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
</body>
</html>