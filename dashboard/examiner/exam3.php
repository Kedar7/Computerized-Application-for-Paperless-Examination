<?php
session_start();
//connect to database
//$db=mysqli_connect("localhost","root","","sih");


  if (isset($_POST['submit']))
  {
      //print_r($_FILES);

      $qns=$_FILES['qns']['name'];  
      
    if ($qns)
    {
      //echo "string";
      //require("connection.php");
       $con=mysqli_connect("localhost","root","","online_exam");
      $target_dir="qns/";
      $examid="2gi14".".csv";
    $target= $target_dir.basename($examid);
      //$qns=$examid;
    move_uploaded_file($_FILES['qns']['tmp_name'], $target);
    $query1="insert into qadd values ('$examid','$qns')";



    
    if(mysqli_query($con,$query1)) header('location:insert.php');
        else echo "string";



    }
    else
    {
    $output_form=true;
    }
  }
  else
  {
    $output_form=true;
  }
  if (!empty($output_form))
  {
?>



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
  .thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
  margin-top:10%;
  width:5%;
}
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
  <a href="exam1.php" class="w3-bar-item w3-button">Exams Conducted</a>
  <a href="exam2.php" class="w3-bar-item w3-button">Take Exams</a><!--Done-->
  <a href="exam.php" class="w3-bar-item w3-button">Fill question</a>
   <a href="exam3.php" class="w3-bar-item w3-button">Exam Results</a><!--Done-->
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container" style="background-color:white;color:#777777">
    <h1 style="margin-top:-5px;">Exams Results</h1>
  </div><hr>
</div>

<div class="w3-container" style="margin-left:-10px;">

<div class="container">
<input id="myInput" type="text" placeholder="Search..">

                                                                                    
  <div class="table-responsive" style="border:1px  black;width:100%;height:200px;overflow:scroll;">          
  <table class="table">
    <thead>
      <tr>
        <th>ExamID</th>
        <th>ExaminerID</th>
        <th>Action</th>
        
        
      </tr>
    </thead>
<tbody  id="myTable">
     <?php
  $connect=mysqli_connect("localhost","root","","online_exam");
  
  $sql="select * from results";
  $records =mysqli_query($connect,$sql);
  while($row = mysqli_fetch_array($records))
{
	echo "<tr>";



	echo "<td>". $row['ExamID']."</td>";
	echo "<td>". $row['ExaminerID']."</td>";
	


	
	
		

		
	echo "<td><a href=rdownload.php?ExamID=".$row['ExamID']." onClick=\"return confirm('Are you sure you want to download this file?');\">Download</td>";


}
  
  
  ?>
    </tbody>
  </table>
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

<!--<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<input type="file" name="qns" id="qns"/>
<input type="submit" class="btn pull-center"   name="submit" value="submit File" ></input>
</form>
</div>-->
</body>
</html>


<?php
  }
?>