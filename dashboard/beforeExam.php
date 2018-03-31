
<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_exam");

    $examid = $_GET['ExamID'];
    $_SESSION['ExamID'] = $examid;
    // $jobseekerid = $_SESSION['JobSeekerID'];

    // $sq = "select attended from registration where Examid = '$examid' and  JobSeekerID = '$jobseekerid'";
    // $re = mysqli_query($con,$sq);
    // $row = mysqli_fetch_array($re);
    // if($row['attanded'] == 0)
    // {
    //     $sq1 = "update registration set attended = '1' where Examid = '$examid' and  JobSeekerID = '$jobseekerid'";
    //     if($re = mysqli_query($con,$sq1))
    //     {

    //     }
    // }
    
?>






<!DOCTYPE html>
<html>
<head>
	<title>CAPES</title>
	<script type="text/javascript">
    alert("1");
        var countDownDate_question = new Date();
        countDownDate_question.setSeconds(countDownDate_question.getSeconds() + 30);

        QuestionTimer = setInterval(function() {
          // Get todays date and time
            //alert("2");
          var now = new Date().getTime();
          //alert(now);
          // Find the distance between now an the count down date
          var distance = countDownDate_question - now;
          //alert(distance);
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
         // $("#CountDownTime").val("Time : "+minutes + "m " + seconds + "s ");
          if (distance < 0) {
            alert("<0");
            clearInterval(QuestionTimer);
            //$("#CountDownTime").html("<h2>"+"TimeOver"+"</h2>");
            //NextQuestion();
            openWindow();
          }
        },1000);

    function openWindow() {
            alert("openwindow");
            var curr_browser = navigator.appName;
            if (curr_browser == "Microsoft Internet Explorer") {
                window.opener = self;
            }
            window.open('samp1.php', 'null', 'toolbar=no,menubar=no,scrollbars=yes,location=no,resizable =yes,top=500,left=500,width=4000,height=4000');
            window.moveTo(0, 0);
            window.resizeTo(screen.width, screen.height);
        }
	</script>

</head>
<body>
<div id="startExam">
    <button target="_parent" href="javascript:void(0);" onclick="openWindow()">Start</button> 
</div>
</body>
</html>