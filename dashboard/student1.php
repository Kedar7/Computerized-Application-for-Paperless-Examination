<?php
session_start();
//connect to database
$con=mysqli_connect("localhost","root","","online_exam"); //avd1979
  if (!$con)
  {
    echo "Failed to connect to MySQL: " . mysqli_error();
  }
  $_SESSION['username'] = "pralhadmagadum322@gmail.com";
  $name=$_SESSION['username'];

  $sq = "select * from candidate where EmailID = '$name'";
  $res = mysqli_query($con,$sq);
  $row = mysqli_fetch_array($res);

  $_SESSION['JobSeekerID'] = $row[0];


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
<script>
    startTimer();

    function startTimer() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        $("#ExamCountDown").html(h + ":" + m + ":" + s); 
        $("#examapplied").find('> tbody > tr').each(function (rowIndex) {
            $(this).find('td').each(function (colIndex, c) {
                if(colIndex==3) {
                    date1 = c.textContent;
                }
                if(colIndex==4) {
                    time1 =c.textContent;
                }
            });
            //23:51:00
            var examdate = createDate(date1);
            var examtimehours = time1.substr(0,2);
            var examtimemins  = time1.substr(3,2);
            var pint = examtimemins * 1;
            var endtime = pint + 10;

            //if(endtime > m)

             //alert(endtime);
            // var endtime = pint+10;
            // alert("examtime" + examtimemins);
            // alert(endtime);
            // compare date and if equal then compare time
            //if(java_date.getUTCMonth() + 1) getUTCDate(),getUTCFullYear()
            var examid = document.getElementById("examapplied").rows[rowIndex+1].cells[0].innerHTML;

            //alert(examtimehours+"=="+h+" &&"+ examtimemins +"<="+ m +"&&"+ m +"<="+ endtime);
            
            var htmlstring = "<a href=beforeExam.php?ExamID="+examid+">StartExam</a>";
            if(examtimehours==h && examtimemins <= m && m <= endtime) {
                document.getElementById("examapplied").rows[rowIndex+1].cells[5].innerHTML = htmlstring;
            }
        });        
        var t = setTimeout(startTimer, 1000);
        return true;
   
    };  
    function createDate(str1){
        // str1 format should be dd/mm/yyyy. Separator can be anything e.g. / or -. It wont effect
        var dt2   = parseInt(str1.substring(0,2));
        var mon2  = parseInt(str1.substring(3,5));
        var yr2   = parseInt(str1.substring(6,10));
        var date2 = new Date(yr2, mon2-1, dt2);
        return date2;
}
</script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"> <h3 style="text-align:center;color:#777777;">Welcome to Online Examination <strong style="color:#e77637;"><?php echo $row[1];?></strong></h3></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
 
 
 
  <li>  <a style="margin-top:17px;"  data-toggle="modal" data-target="#myModalNorm">
 My Profile
</a></li>
        <li><a href="logout.php">Logout</a></li>
    
        
       
      </ul>
    </div>
  </div>
</nav>



<!-- Modal -->
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
                  <h3 style="color:#777777;"> <span style="color:#e77637;">Profile</span></h3>
                </h3>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="" method="">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">10th Marks</label>
                      <input type="text" name="10th" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">12th/Diploma Marks</label>
                      <input type="text" name="12th" class="form-control"
                          id="exampleInputPassword1" placeholder=""/>
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
        <!--  <div class="form-group">
                    <label for="exampleInputPassword1">Upload marks card(.pdf)</label>
                      <input type="file"  name="file" class="form-control"
                          id="exampleInputPassword1" placeholder="Password"/>
                  </div>-->
          
                  
                  <button type="submit" name="submit" style="border-right:5px solid white;" class="btn">Submit</button><button name="abc" type="submit" class="btn">Edit</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>


<div class="container" style="margin-top:110px;">
 <h4 style="color:#777777;"><strong>Exam List</strong></h4>
  <p>These are the exams you can attend accordiing to your qualification.Notification will be sent to your email after clicking on Apply.</p>  
<input id="myInput" type="text" placeholder="Search..">  
  <div class="table-responsive" style="border:1px black;width:100%;height:200px;overflow:scroll;"> 
  
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Exam</th>
        <th>Postname</th>
        <th>ExamDate</th>
        <th>Qualification</th>
        <th>Last Date to apply</th>
      </tr>
    </thead>
        <tbody  id="myTable">
     <?php

     date_default_timezone_set("Asia/Kolkata");

      $date = date("Y-m-d");
      $sq1 = "select * from exams where LastDateToApply >= '$date'";
      $sq3 = "select Examid from registration where JobSeekerID = '$row[0]'";
      $res1 = mysqli_query($con,$sq1);
      $res3 = mysqli_query($con,$sq3);
      $Erow = array();
      $index = 0;
      while($row3 = mysqli_fetch_array($res3)){
        $Erow[$index] = $row3[0];
        $index++;
      }
      $count = 1;
      while($row1 = mysqli_fetch_assoc($res1))
      {

        //Check Qualification
            if(!in_array($row1[0], $Erow) && $row[3] >= $row1[6] && $row[4] >= $row1[7] && $row[7] >= $row1[8])
                {echo '<tr>
                          <td>'.$count.'</td>
                         <td>'.$row1['Name'].'</td>
                         <th>'.$row1['Postname'].'</th>
                         <td>'.$row1['ExamDate'].'</td>
                        <td>';

                    if($row1[8] != 0)
                    {
                      echo "Degree min: ".$row1[8];
                    }
                    else if($row1[7] != 0)
                    {
                      echo "10+2   min: ".$row1[7];
                    }
                    else if($row1[6] != 0)
                    {
                      echo "10th  min: ".$row1[6];
                    }
                    else
                    {
                      echo "ALL";
                    }
                    echo '<td>'.$row['LastDateToApply'];
                    



          echo "</td><td><a href=delete.php?ExamID=".$row1[0]." onClick=\"return confirm('Are you sure you want to delete?');\">DELETE</td>";
          echo "<td><a href=confirm.php?ExamID=".$row1[0]." onClick=\"return confirm('Are you sure you want ro confirm');\">Apply</td>";
                         $count += 1;
                 }
      }



//   $connect=mysqli_connect("localhost","root","","online_exam");


  
//   $sql="select * from exams";
//   $records =mysqli_query($connect,$sql);
//   while($row = mysqli_fetch_array($records))
// {
//  echo "<tr>";



//  echo "<td>". $row['Name']."</td>";
//  echo "<td>". $row['Postname']."</td>";
//  echo "<td>". $row['ExamDate']."</td>";
//  echo "<td>". $row['FromTime']."</td>";
//  echo "<td>". $row['ToTime']."</td>";
//  echo "<td>". $row['NoofQuestions']."</td>";
//  echo "<td>". $row['TotalMarks']."</td>";
  
  ///echo "<td><a href=jaf.php>?id= $row['jaf'].</a> ."</td>";
    

    
  // echo "<td><a href=delete.php?ExamID=".$row['ExamID']." onClick=\"return confirm('Are you sure you want to delete?');\">DELETE</td>";
  // echo "<td><a href=confirm.php?ExamID=".$row['ExamID']." onClick=\"return confirm('Are you sure you want ro confirm');\">Apply</td>";

//}
  
  
  ?>
        </tbody>
    </table>
</div>
</div>

<div class="container">
    <h4 style="color:#777777;"><strong>Exam Applied</strong></h4>
    <p>These are the list of exams you have applied.</p>        
    <input id="myInput" type="text" placeholder="Search..">   
    <div id="ExamCountDown"></div> 
    <div class="table-responsive" style="border:1px  black;width:100%;height:200px;overflow:scroll;">          
    <table id="examapplied" class="table">
        <thead>
        <tr>
            <th>SlNo.</th>
            <th>Exam name</th>
            <th>Post</th>
            <th>Exam date</th>
            <th>Exam time</th>
            <th>Action</th>
        
        </tr>
        </thead>
        <tbody>
        <?php

            date_default_timezone_set("Asia/Kolkata");
            $connect=mysqli_connect("localhost","root","","online_exam");
              
            $sql="select Examid from registration where JobSeekerID = $row[0]";
            $records =mysqli_query($connect,$sql);
            $count = 1;
            while($row1 = mysqli_fetch_array($records))
            {
              echo "<tr>";
                $q = "select * from exams where ExamID = '$row1[0]'";
                $re = mysqli_query($connect,$q);
                $row = mysqli_fetch_array($re);
                $time = strtotime($row['FromTime']);
                $time1 = date("H:i:s", $time);
                echo "<td>". $row1[0]."</td>";
              echo "<td>". $row['Name']."</td>";
              echo "<td>". $row['Postname']."</td>";
              echo "<td>". date("d-m-Y",strtotime($row['ExamDate']))."</td>";
              echo "<td>". $time1."</td>";
                echo "<td></td>";
              //echo "<td>". $row['ToTime']."</td>";
              //echo "<td>". $row['NoofQuestions']."</td>";
              //echo "<td>". $row['TotalMarks']."</td>";
              
              ///echo "<td><a href=jaf.php>?id= $row['jaf'].</a> ."</td>";
                    
                // $date = date("Y-m-d");
                // $ctime = date("h:i:s");
                  
                // $endtime = $time+(60*10);  //link will be open for 10 minuts
                      
                // $time2 = date("H:i:s", $endtime);
                // if($row['ExamDate'] == $date && $time1 >= $ctime && $ctime <= $time2)
                //     {
                //         echo "<td><a href=beforeExam.php?ExamID=".$row['ExamID']." onClick=\"return confirm('Are you sure you want ro confirm');\">Start</td>";
                // }
            }
        ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>