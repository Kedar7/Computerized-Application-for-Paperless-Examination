
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

<h4 style="margin-top:-30px;float:right;"><a href="logout.php"> Logout  </a></h4>
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="exam1.php" class="w3-bar-item w3-button"> exam </a>
  <a data-toggle="modal" data-target="#myModalNorm" class="w3-bar-item w3-button">Eligibility</a><!--Done-->
  <a href="#." class="w3-bar-item w3-button">Fill question</a><!--Done-->
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container" style="background-color:white;color:#777777">
    <h1 style="margin-top:-5px;">Questions</h1>
  </div><hr>
</div>

<div class="w3-container" style="margin-left:-10px;">
<h3 style="background-color:white;color:#777777;margin-top:-10px;">Table</h3>
<div class="container" style="margin-left:-10px;">
  <h4 style="color:#777777;"><strong>Fill in details</strong></h4>
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
	  <div class="col-sm-12 form-group" >
           <button class="btn pull-center" name="abc"  id="send_otp" type="submit">Submit</button><br>
		   <h2> OR </h2>
		 <input type="file"/>  <button  class="btn pull-center"  style="float:center;margin-top:10px;"  name="abc" id="send_otp" type="submit">Import</button>
        </div>
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


<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">
                  <h3 style="color:#777777;"> <span style="color:#e77637;">Eligibility</span></h3>
                </h3>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">10th Marks</label>
                      <input type="email" name="10th" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">12th/Diploma Marks</label>
                      <input type="password" name="12th" class="form-control"
                          id="exampleInputPassword1" placeholder="Password"/>
                  </div>
				  <div class="form-group">
                    
				<select name="degree">
				  <option value="volvo">PG</option>
				  <option value="saab">UG</option>
				  
				</select>
				 </div>
				 <div class="form-group">
                    <label for="exampleInputPassword1">Specialization</label>
                      <input type="text" name="special" class="form-control"
                          id="exampleInputPassword1" placeholder="Enter Stream"/>
                  </div>
				   <div class="form-group">
                    <label for="exampleInputPassword1">Degree Marks</label>
                      <input type="text" name="degree_marks" class="form-control"
                          id="exampleInputPassword1" placeholder="Enter UG Aggregate"/>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">PG Marks</label>
                      <input type="text" name="pg_marks" class="form-control"
                          id="exampleInputPassword1" placeholder="Enter PG Aggregate"/>
                  </div>
				
				  
                  
                  <button type="submit" name="submit" style="border-right:5px solid white;" class="btn">Submit</button><button name="abc" type="submit" class="btn">Edit</button>
                </form>
                
                
            </div>
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
