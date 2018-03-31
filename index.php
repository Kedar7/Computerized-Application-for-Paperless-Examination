<?php
if(isset($_GET['emailid'])){
        $email = $_GET['emailid'];
        $token = $_GET['token'];

        $con=mysqli_connect("localhost","root","","online_exam"); //avd1979
        if (!$con)
        {
          echo "Failed to connect to MySQL: " . mysqli_error();
        }

        $q1="select * from Examiner where emailid='$email' and token='$token' ";
        //$con->query($q1);
        
        if($r1 = mysqli_query($con,$q1))            
        {
          $q1 = "select password from Examiner where emailid = '$email'";
                  $re1 = mysqli_query($con,$q1);
                  $ro1 = mysqli_fetch_array($re1);
                  $password = $ro1[0];
        
                  $q3= "replace into login_examiner(username,password) values ('$email','$password')";
                   $re3 = mysqli_query($con,$q3);
                  
                  echo '<script> alert("You have been verified, Please login to continue");</script>';
                  header('Refresh:1; url=index.php');
        }
        else
        {
          echo '<script> alert("Please enter valid email id");</script>';
          header('Refresh:1; url=index.php');
        }
      }


///link : http://localhost/hakathon/index.php?token=psa4rjv85yd3lgw&emailid=kdjasklfj2s
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>NAAVU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

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
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
   
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  .logo{
    height:30px;
  }
  .navbar {
      height : 50px;
  }
  .container{
    padding-left: 50px;
    padding-right: 50px;
  }
  
  .nav {
  
  background-color: #fff !important;    
  }
  
  }
  .bg-1 {
      background: #e77637;
      color: #fff;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
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

  .navbar {
      
      margin-bottom: 0;
      background-color: #fff;
      border: 0;
      letter-spacing: 4px;
    height : 70px;  
  }
  .navbar-brand, .navbar{
  color: black !important;
  
  }
  .navbar li a {
    margin-top:15px;
      color: black !important;
    
  }
  .navbar-nav li a:hover {
      color: #e77637 !important;
    
  }
   
 
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
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
  .bg {
  background: url('ho.jpg') no-repeat center center;
  background-size:cover;
  
  width: 100%;
  height: 100%; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  height: 650px;
  color: white;
  text-shadow: #444 0 1px 1px;
  background:transparent;
}

.card-3 {
  padding-top:25px;
  box-shadow: 0px 1px 1px rgba(0,0,0,0.20), 0px 0px 2px rgba(0,0,0,0.23);
 height:35%;
 width:100%;
}
.flexWrap{
  
 margin-top:70px;
  float:right;
}
.wrap{
  background: rgba(255,255,255,0.4);
  border-radius:1rem;
  padding:2rem;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img class="logo" src="" height="45px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">Home</a></li>
        <li><a href="#login">Login</a></li>
    <li><a href="#signup">Signup</a></li>
    <li><a href="#aboutus" style="color:black;">AboutUs</a></li>
        
       
      </ul>
    </div>
  </div>
</nav>
<div class="bg">
<div class="jumbotron">
<div class="flexWrap">
  <div class="wrap">
    <h2>Welcome to <br><strong class='text-info'>Online Examination system</strong></h2>
    <hr>
    <h3 style="color:white;">Connecting <strong>INDUSTRY</strong> with <strong>TALENTED</strong> aspirants.</h3>
  </div>
</div>

  
</div>
</div>


<div id="login" class="container text-center">
  <h2><span style="color:#e77637;">Login</span></h2>
  <br>
  <div class="card-3">
   <div class="col-md-8" style="float:right;">
   
      <div class="row">
        <div class="col-sm-6 form-group">
    <form action="login.php" method="post">
          <input class="form-control" id="username" name="username" placeholder="Email" type="text" required>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
        </div>
    </div>
    <p style="float:left;"><a href="forgotPassword.php" style="text-decoration:none;"> Forgot your password?</a> </p>
      </div><br>
      
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-center" type="submit" name="submit">Login</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <div id="signup" class="container text-center">
   <h2><span style="color:#e77637;"> Signup</span></h2>
   <h3 style="color:#777777;">Job Seeker's <span style="color:#e77637;"><strong> Signup </strong></span></h3>
   <br><h4 style="color:#777777;">Personal Details</h4>
   <div class="col-md-12" style="float:right;">
   <form action="otpprocess.php" method="post" id="form_registration" autocomplete="off" >
      <div class="row">
    
    <div class="col-sm-12 form-group">
        <input class="form-control" id="form_username"  name="name" class="error_form" placeholder="Full Name" maxlength="30" type="text" required>
        <span id="username_error_message"></span>
        </div>
  </div>
  <div class="row">
        <div class="col-sm-12 form-group">
        <input class="form-control" id="form_email" name="email" class="error_form"  placeholder="Email" type="email" required>
      
        </div>
     </div>
   <div class="row" >
        <div class="col-sm-6 " >
        <input class="form-control" id="form_password" name="password"  placeholder="Password"  type="password" required>
     `     <span id="password_error_message"></span>
    </div>
   
        <div class="col-sm-6 form-group">
        <input class="form-control" id="form_retype_password"    class="error_form"  placeholder="Confirm Password"  type="password" required>
          <span id="retype_password_error_message"></span>
    </div>
      </div>
  
    <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="address" name="address" placeholder="Full Address" type="text" required>
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="address" name="dist" placeholder="District" type="text" required>
        </div>
    <div class="col-sm-4 form-group">
          <input class="form-control" id="address" name="state" placeholder="State" type="text" required>
        </div>
    <div class="col-sm-4 form-group">
          <input class="form-control" id="address" name="pincode" placeholder="Pin code" type="text" required>
        </div>
    
        
      </div>
     <div class="row">
        <div class="col-sm-3 form-group">
          <select name="sex" id="sex"  style="height:35px;width:200px;"><option value="s">--Select Gender--</option><option value="male">Male</option><option value="female">Female</option></select>
        </div>
    <div class="col-sm-2 form-group"> <h5>Date of Birth :</h5> </div>
        <div class="col-sm-4 form-group"> 
         <input class="form-control"  id="email" name="dob" placeholder="DOB" type="date" required>
        </div>
    
    <div class="col-sm-3 form-group">
        <input  name="aadhar" pattern="[0-9]{14}" title="14 digits Aadhar card number"   maxlength="14" placeholder="Aadhar number" style="height:35px;" type="text" required>
        
        </div>
    
      </div>
  <!--<h3 style="color:#777777">Qualification</h3>
     <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control"  id="10" name="10" placeholder="10th marks" type="text" required/>
        </div>
    <div class="col-sm-6 form-group">
     <input class="form-control"  id="10" name="10" placeholder="12th marks" type="text" required/>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group"> 
         <input class="form-control"  id="aggr" name="aggr" placeholder="B.E aggregate" type="text" required/>
        </div>
    
    <div class="col-sm-3 form-group" style="padding-top:5px;">
      <strong>Upload Marks card(.pdf)</strong>
        
        </div>
    <div class="col-sm-3 form-group" style="padding-top:5px;">
    <input type="file" name="jaf" id="jaf" required />
        
        </div>
    </div>-->
    
     


      
      <br>
      
   <h3 style="color:#777777">Verification</h3>
    <div class="row">
        <div class="col-sm-5 form-group">
          <input class="form-control" id="phone" name="num" placeholder="Contact No." type="text" required>
        </div>
     <div class="col-sm-2 form-group">
           <button class="btn pull-center" name="send_otp" id="send_otp" type="button" >Send OTP</button>
        </div>
    <p id="form-message">
    </p>
    <!--</form>-->
    
    
    <!--<form action="otpprocess.php" method="post">-->
        <div class="col-sm-5 form-group">
          <input class="form-control" id="otp" name="otpvalue" placeholder="Enter the OTP that is sent to  your phone" type="text" required>
        </div><div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right"  name="submit" type="submit">Register</button>
      </form>
        </div>
      </div>
     
      </div>
    </div>
  
  <h3 style="color:#777777;">Examiner's <span style="color:#e77637;"><strong> Signup </strong></span></h3>
  <h4 style="color:#777777;">Personal Details</h4>
   <div class="col-md-12" style="float:right;">
   <form action="Eregistration.php" method="post" id="examiner_registration" autocomplete="off" >
      <div class="row">
    
    <div class="col-sm-12 form-group">
        <input class="form-control" id="Eusername"  name="name" class="error_form" placeholder="Full Name" maxlength="30" type="text" required>
        <span id="username_error_message"></span>
        </div>
  </div>
  <div class="row">
        <div class="col-sm-12 form-group">
        <input class="form-control" id="Eemail" name="email" class="error_form"  placeholder="Email" type="email" required>
      
        </div>
     </div>
   <div class="row" >
        <div class="col-sm-6 " >
        <input class="form-control" id="Epassword" name="password"  placeholder="Password"  type="password" required>
     `     <span id="password_error_message"></span>
    </div>
   
        <div class="col-sm-6 form-group">
        <input class="form-control" id="Ecpassword"    class="error_form"  placeholder="Confirm Password"  type="password" required>
          <span id="Ecpassword"></span>
    </div>
      </div>
  
    <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="Eaddress" name="address" placeholder="Full Address" type="text" required>
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="Designation" name="Designation" placeholder="Designation" type="text" required>
        </div>
    <div class="col-sm-4 form-group">
          <input class="form-control" id="Organization" name="Organization" placeholder="Organization" type="text" required>
        </div>
    <div class="col-sm-4 form-group">
          <input class="form-control" id="OrganizationID" name="OrganizationID" placeholder="Organization Id" type="text" required>
        </div>
    
        
      </div>
     <div class="row">
        <div class="col-sm-3 form-group">
          <select name="Gender" id="EGender"  style="height:35px;width:200px;"><option value="s">--Select Gender--</option><option value="male">Male</option><option value="female">Female</option></select>
        </div>
    <div class="col-sm-2 form-group"> <h5>Date of Birth :</h5> </div>
        <div class="col-sm-4 form-group"> 
         <input class="form-control"  id="Edob" name="dob" placeholder="DOB" type="date" required>
        </div>
    <div class="col-sm-4 form-group"> 
         <input class="form-control"  id="EmobileNo" name="mobileNo" placeholder="Phone" type="text" required>
        </div>
    
    
      </div>
  <!--<h3 style="color:#777777">Qualification</h3>
     <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control"  id="10" name="10" placeholder="10th marks" type="text" required/>
        </div>
    <div class="col-sm-6 form-group">
     <input class="form-control"  id="10" name="10" placeholder="12th marks" type="text" required/>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group"> 
         <input class="form-control"  id="aggr" name="aggr" placeholder="B.E aggregate" type="text" required/>
        </div>
    
    <div class="col-sm-3 form-group" style="padding-top:5px;">
      <strong>Upload Marks card(.pdf)</strong>
        
        </div>
    <div class="col-sm-3 form-group" style="padding-top:5px;">
    <input type="file" name="jaf" id="jaf" required />
        
        </div>
    </div>-->
    
     


      
      <br>
      
   
    <div class="row">
        
    
    
    
    
    <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" id="Ereg" name="submit" type="button">Register</button>
      </form>
        </div>
      </div>
     
      </div>
    </div>
  

<div id="aboutus" class="container-fluid">
<h2 align="center">About Us<span style="color:#e77637;"></span></h2>
<br>

  <div class="row" class="container-fluid">
 <div class="col-sm-8">
  <img class="img-responsive pull-left" align="left" style="float:left; background:transparent;" src="grppic.jpg" alt="GRPPIC" > 
</div>
<div class="col-sm-4">

<h3>KLS Gogte Institute of Technology</h3>


</div>
</div>







</div>
<br>




<footer class="text-center">

  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h3><span style="color:white">Powered By<strong> ನಾವು </strong></span></h3> 
</footer>
<script>
$(document).ready(function(){
  $("#username_error_message").hide();
  $("#aadhar_error_message").hide();
  $("#password_error_message").hide();
  $("#retype_password_error_message").hide();
  
  var error_username = false;
  var error_aadhar = false;
  var error_password = false;
  var error_retype_password = false;
  
  
  $("#form_submit").focusout(function() {
    check_login();  
  });
  
  $("#form_username").focusout(function() {
    check_username(); 
  });
  
  $("#form_password").focusout(function() {
    check_password(); 
  });
  
  $("#form_retype_password").focusout(function() {
    check_retype_password();  
  });
  $("#form_aadhar").focusout(function() {
    check_aadhar(); 
  });
  
  
  
  function check_username(){
    var pattern = new RegExp(/^([^0-9]*)$/);
    
    
  
      
    if(pattern.test($("#form_username").val())){
        $("#username_error_message").hide();
        
      }
      else{
        $("#username_error_message").html("No digits allowed in Full name");
        $("#username_error_message").show();
        error_email =true;
      } 
      
    }
    
  function check_login(){
    var x=<?php echo $_SESSION['flag']; ?>
    
    if(x)
      alert("invalid credentials");
    
    
  }
    function check_password(){
      var password_length= $("#form_password").val().length;
      
      if(password_length < 8){
      $("#password_error_message").html("Atleast 8 characters");
        $("#password_error_message").show();
        error_password = true;
      }
      else
      {
        $("#password_error_message").hide();
        
      }
        
      }
    function check_retype_password(){
      var password = $("#form_password").val().length;
      var retype_password= $("#form_retype_password").val().length;
      
      if(password != retype_password){
        $("#retype_password_error_message").html("Password don't match");
        $("#retype_password_error_message").show();
        error_retype_password = true;
      }
      else
      {
        $("#retype_password_error_message").hide();
        
      }
        
        
      }
    
      

      
    
});



</script>
<script>
$(document).ready(function(){
 $('[data-toggle="tooltip"]').tooltip(); 
   $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    
    if (this.hash !== "") {

      event.preventDefault();
       var hash = this.hash;
  $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
      
        window.location.hash = hash;
      });
    } 
  });
})
</script>

<script>
  $('#send_otp').click(function(){
    var mobileNo = $("#phone").val();
    
    $.ajax({
      type: "POST",
      url: "process.php",
      data: "num="+mobileNo,
      success : function(text){
        var statusObj = JSON.parse(text);
        if(statusObj['status'] == 'failure')
          alert(statusObj.warnings[0].message);
        else
          alert("OTP sent");
      }
    });
  });
</script>

<script>
  $('#Ereg').click(function(){
    var name = $("#Eusername").val();
    var email = $("#Eemail").val();
    var address = $("#Eaddress").val();
    var password = $("#Epassword").val();
    var Designation = $("#Designation").val();
    var Organization = $("#Organization").val();
    var OrganizationID = $("#OrganizationID").val();
    var dob = $("#Edob").val();
    var gender = $("#EGender").val();
    var mobileNo = $("#EmobileNo").val();
    //alert("mobileNo:"+mobileNo);
    
    $.ajax({
      type: "POST",
      url: "Eregistration.php",
      data: "name="+name+"&email="+email+"&password="+password+"&Designation="+Designation+"&Organization="+Organization+"&OrganizationID="+OrganizationID+"&Gender="+gender+"&dob="+dob+"&mobileNo="+mobileNo+"&address="+address,
      success : function(text){

          alert(text);
          //var reply = text.replace(/\s+/, "");
          var result = $.trim(text);
         alert(text);
       if(result === "true")
       {
           {
              alert("your request has been registered plesae wait for conformation");
              $("#Eusername").val("");
              $("#Eemail").val("");
              $("#Epassword").val("");
              $("#Ecpassword").val("");
              $("#Eaddress").val("");
              $("#Designation").val("");
              $("#Organization").val("");
              $("#OrganizationID").val("");
              $("#Edob").val("");
              $("#EGender").val("--Select Gender--");
              $("#EmobileNo").val("");

          }
       }
       else
          alert("Error while Registration");

      }
      
    });
  });
</script>

</body>
</html>