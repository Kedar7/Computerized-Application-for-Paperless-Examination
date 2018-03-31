<?php

session_start();
$con=mysqli_connect("localhost","root","","online_exam");
  
  // $_SESSION['ExaminerID'] = 23;
  // 
  if(!isset($_SESSION['username']))
  {
    header("location:../../index.php");
  }

  $email = $_SESSION['username'];
  $sq = "select * from Examiner where emailid = '$email'";
  $res = mysqli_query($con,$sq);
  $row = mysqli_fetch_array($res);
  $ExaminerID = $row['ExaminerID'];

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
<h3 style="text-align:center;color:#777777;">Welcome to Online Examination <strong style="color:#e77637;"><?php echo $row['Name'];?></strong></h3>

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
    <h1 style="margin-top:-5px;">Exams conducted</h1>
  <input id="myInput" type="text" placeholder="Search..">
  <div class="container">
 
                                                                                    
  <div class="table-responsive" style="border:1px  black;width:100%;height:200px;overflow:scroll;">          
  <table class="table">
    <thead>
      <tr>
        <th>ExamID</th>
        <th>Exam Name</th>
        <th>Exam Date</th>
        
        
      </tr>
    </thead>
<tbody  id="myTable">
     <?php
  // $connect=mysqli_connect("localhost","root","","online_exam");
  
  // $_SESSION['ExaminerID'] = 23;
  // $ExaminerID = $_SESSION['ExaminerID'];
  
  $sql="select * from exams where ExaminerID = '$row[0]'";
  $records =mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($records))
{
  echo "<tr>";
  $date = date("y-m-d");
  if($date <= $row['ExamDate'])
  {
    echo "<td>". $row['ExamID']."</td>";
    echo "<td>". $row['Name']."</td>";
    echo "<td>". $row['ExamDate']."</td>";
  }
}
  
  
  ?>
    </tbody>
  </table>
  </div>
</div>
  </div><hr>
</div>

<div class="w3-container" style="margin-left:-10px;">
<h1 style="margin-top:-5px;">Exams not conducted</h1>
<input id="myInput" type="text" placeholder="Search..">
<div class="container">
 
                                                                                    
  <div class="table-responsive" style="border:1px  black;width:100%;height:200px;overflow:scroll;">          
  <table class="table">
    <thead>
      <tr>
        <th>ExamID</th>
        <th>Exam Name</th>
        <th>Exam Date</th>
        
        
      </tr>
    </thead>
<tbody  id="myTable">
     <?php
  $connect=mysqli_connect("localhost","root","","online_exam");
  
  $sql="select * from exams where ExaminerID = '$row[0]'";
  $records =mysqli_query($connect,$sql);
  while($row = mysqli_fetch_array($records))
{
  echo "<tr>";
  $date = date("y-m-d");
  if($date <= $row['ExamDate'])
  {
    echo "<td>". $row['ExamID']."</td>";
    echo "<td>". $row['Name']."</td>";
    echo "<td>". $row['ExamDate']."</td>";
  }
}

  
  
  ?>
    </tbody>
  </table>
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
<script>
$(document).ready(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* change modal title when slide changes */
   $("#modal-carousel").on("slid.bs.carousel",       function () {
        $(".modal-title")
        .html($(this)
        .find(".active img")
        .attr("title"));
   });

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
    var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
    content.append(repoCopy);

    // show the modal
    $("#modal-gallery").modal("show");
  });

});
</script>
     
</body>
</html>
