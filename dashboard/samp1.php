<?php
session_start();
date_default_timezone_set("Asia/Kolkata");	
$url='localhost';
	$username = "root";
	$password = "";
	$dbname = "online_exam";
	$conn = mysqli_connect($url, $username, $password, $dbname);

	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}

	if(!isset($_SESSION['username']))
  {
    header("location:../index.php");
  }

	$ExamID     	= 1;//$_SESSION['ExamID'];  
	$JobSeekerID  	= 6;//$_SESSION['JobSeekerID'];
	//$ExamDuration	= 30;	//$_SESSION['Duration']
	$ExamName  		= "Trainee Software Engineers";
	//$_SESSION['qno'] = 0;
	$nqno = 3;  //$_SESSION['nqno'] = 3; total no of questions

	//$flag=false;

	//$jobseekerid = $_SESSION['JobSeekerID'];

    $sq = "select attended from registration where Examid = '$ExamID' and  JobSeekerID = '$JobSeekerID'";
    $re = mysqli_query($conn,$sq);
    $row = mysqli_fetch_array($re);
    if($row[0] == 0)
    {
        $sq1 = "update registration set attended = '1' where Examid = '$ExamID' and  JobSeekerID = '$JobSeekerID'";
        if(!($re = mysqli_query($conn,$sq1)))
        {
        	echo "Error in starting the exam";
        }
    }

?>

<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
		</style>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Online Examination</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/git.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

  box-shadow: 0px 1px 1px rgba(0,0,0,0.20), 0px 0px 2px rgba(0,0,0,0.23);
 height:50%;
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
	<body>
	
		<div class="container-fluid">
			<div class="row">
				
     				<h2><div  align="center" style="color:#777777;">Online Examination system</div></h2>
    			
    			<div class="row">
  					<div class="col-md-7" style="color:#777777;font-size: 18px"><?php echo $ExamName; ?></div>
  					<div class="col-md-4 col-md-offset-1" style="color:#777777;  font-size: 18px;">Jobeseeker details(name and Id) </div>
  					<input type = "hidden" id="jobseekerid" name="jobseekerid" readonly value="<?php echo $JobSeekerID; ?>" ></input>
  					<input type = "hidden" id="examid" name="examid" readonly value="<?php echo $ExamID; ?>" ></input>
				</div>
				<div class="card-3">
				<div class="row">
  					<div class="col-xs-6 col-sm-3" style="padding-top: 10px;padding-bottom:10px;background-color:#e7e7e7;border-right:20px solid white; " align="center">    
  						<input type="button" class="btn " id="questionid" style="background-color:#e7e7e7;color:black;" name="questionid" value="1" style="width: 100%;" disabled></input> 
  					</div>
  					<div class="col-xs-6 col-sm-3 " style="padding-top: 10px;padding-bottom:10px;background-color:#e7e7e7;border-right:20px solid white;">
  						<input type="button" class="btn"  style="background-color:#e7e7e7;color:black;" id="totquestion" value="<?php echo  $nqno;?>" style="width: 100%;" disabled></input> 
  					</div>
  					<!-- Optional: clear the XS cols if their content doesn't match in height -->
  					<div class="clearfix visible-xs-block"></div>
  					<div class="col-xs-6 col-sm-3" style=" padding-top: 10px;padding-bottom:10px;background-color:#e7e7e7;border-right:20px solid white; ">
  						<input type="button" class="btn " style="background-color:#e7e7e7;color:black;"  id="marks" value="1" style="width: 100%;" disabled></input> 
  					</div>
  					<div class="col-xs-6 col-sm-3" style=" padding-top: 10px;padding-bottom:10px;background-color:#e7e7e7;border-right:20px solid white; ">
  						<input type="button" class="btn"  style="background-color:#e7e7e7;color:black;" style="background-color:#e7e7e7;color:black;"id="CountDownTime" value="Time" style="width: 100%;" disabled></input> 
  					</div>
  				</div>
				</div>
  					<div class="row">
						<div id="question" style="color:#777777;padding-top:10px;" class="container-fluid"><h3></h3></div>
					</div>
					<div id="options" style="color:#777777;"></div>
					<div class="row" >
						<input type="button" class="btn"  style="margin-left:20px;" id="skipbutton" value="Skip" ></input>
						<input type="button" class="btn" id="nextbutton" value="Save Answer"></input> 
					</div>
				
			</div>
		</div>
		<!-- <script src="assets/js/jquery-1.10.2.js"></script>
		<script src="/opt/lampp/htdocs/blue-free/js/bootstrap.min.js"></script>  -->
		<script>
//window.open ("/samp1.php","mywindow","status=1,toolbar=0");

window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}

</script>
<script type="text/javascript">
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
     $(document).on("keydown", disableF5);
});

</script>


<script>
	var countDownDate_question;
	var countDownDate_Exam;
	var question_count = 1;
	var question_index = 0;
	var ExamTimer;
	var QuestionTimer;
	alert("hoooo");

	$("#questionno").val(question_count);
	 //questiondata = [{'QuestionID':'1','Question':'Sir M. Visveswaraiah, born in Muddenahalli, was Dewan of Mysore under','Opt1':'Jayachamaraja Wodeyar','Opt2':'Krishnaraja Wodeyar IV','Opt3':'Srikanta Datta Wodeyar','Opt4':'Kanteerava Wodeyar','Duration':'30','Marks':'1','AnswerGiven':'0'},{'QuestionID':'2','Question':'Sandalwood is largely found in','Opt1':'Tamil Nadu','Opt2':'Kerala','Opt3':'Karnataka','Opt4':'Andhra Pradesh','Duration':'30','Marks':'1','AnswerGiven':'0'},{'QuestionID':'3','Question':'Who claimed that "Swaraj is my birthright and I shall have it" ?','Opt1':'Lala Lajpat Rai','Opt2':'Mahatma Gandhi','Opt3':'Bala Gangadhar Tilak','Opt4':'Sardar Vallabhbhai Patel','Duration':'30','Marks':'1','AnswerGiven':'0'},];
	questiondata = [	 
	<?php
		$conn=mysqli_connect("localhost","root","","online_exam"); //avd1979
		  if (!$conn)
		  {
		    echo "Failed to connect to MySQL: " . mysqli_error();
		  }

		//echo "{'QuestionID':'12345'}";
		//define where condition
		$sql = "Select * from questions where ExamID='1'";
		$result = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_array($result)) {
			// $QuestionID = $row['QuestionID'];
			// $Question   = $row['Question'];
			// $Opt1 		= $row['Opt1'];
			// $Opt2 		= $row['Opt2'];
			// $Opt3 		= $row['Opt3'];
			// $Opt4 		= $row['Opt4'];
			// $Duration   = $row['Duration'];
			// $Marks 		= $row['Marks'];

			$QuestionID = $row[0];
			$Question   = $row[2];
			$Opt1 		= $row[3];
			$Opt2 		= $row[4];
			$Opt3 		= $row[5];
			$Opt4 		= $row[6];
			$Duration   = $row[9];
			$Marks 		= $row[8];

			


			echo "{'QuestionID':'$QuestionID','Question':'$Question','Opt1':'$Opt1','Opt2':'$Opt2','Opt3':'$Opt3','Opt4':'$Opt4','Duration':'$Duration','Marks':'$Marks','AnswerGiven':'0'},";
		}        
	?>

	];
	alert(questiondata);
	//startExamCountDown();
	NextQuestion();

	/*function startExamCountDown() {
		countDownDate_Exam = new Date();
		countDownDate_Exam.setMinutes(countDownDate_Exam.getMinutes() + 5);

		ExamTimer = setInterval(function() {
		  // Get todays date and time
		  var now = new Date().getTime();

		  // Find the distance between now an the count down date
		  var distance_exam = countDownDate_Exam - now;

		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance_exam / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance_exam % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance_exam % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance_exam % (1000 * 60)) / 1000);
		  $("#ExamCountDown").html("<h3 style='color:red;'>Time Left for Exam : "+minutes + "m " + seconds + "s "+"</h3>");
		  if (distance_exam < 0) {
		  	clearInterval(ExamTimer);
		  	$("#ExamCountDown").html("<h3>"+"Exam Time Over"+"</h3>");
		  	$("#question").html("");
		  	$("#questionid").html("");
		  	$("#questionno").val("");
		  	$("#options").html("");
		  	$("#nextbutton").prop("disabled",true);
		  }
		},1000);
	};	*/
	function startQuestionCountDown() {
		QuestionTimer = setInterval(function() {
		  // Get todays date and time
		  var now = new Date().getTime();
		  // Find the distance between now an the count down date
		  var distance = countDownDate_question - now;

		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		  $("#CountDownTime").val("Time : "+minutes + "m " + seconds + "s ");
		  if (distance < 0) {
		  	clearInterval(QuestionTimer);
		  	$("#CountDownTime").html("<h2>"+"TimeOver"+"</h2>");
		  	NextQuestion();
		  }
		},1000);
	};

	$("#nextbutton").click(function(){
		SaveAnswer();
		NextQuestion();
	});

	$("#skipbutton").click(function(){
		SkipAnswer();
		NextQuestion();
	});

	function NextQuestion() {
		var no_of_questions = questiondata.length;
		//alert("No.of.questions: "+no_of_questions+" question_index:"+question_index);
		if(question_count>no_of_questions) {
			alert("Exam Over!");
	    	$("#question").html("");
	    	$("#questionid").val("");
	    	$("#options").html("");
	    	$("#nextbutton").prop("visible",false);	
	    	$("#CountDownTime").val("");			
	        //$("#ExamCountDown").html("");
	        $("#marks").val("");
			clearInterval(QuestionTimer);
			clearInterval(ExamTimer);
			//ShowQA()
			location.href="afterExam.php";
			return false;
		}
		var question 	= questiondata[question_index].Question;
		var questionid 	= questiondata[question_index].QuestionID;
		var opt1 		= questiondata[question_index].Opt1;
		var opt2 		= questiondata[question_index].Opt2;
		var opt3 		= questiondata[question_index].Opt3;
		var opt4 		= questiondata[question_index].Opt4;
		var duration 	= questiondata[question_index].Duration;
		var marks 		= questiondata[question_index].Marks;

        //alert("in ajax questionid"+questionid);
        	
    	var options_html= "<div class='radio'>        <label><input type='radio' id='answer' name='answer'  value='1'><strong>"+opt1+"</strong></label></div>";
    	options_html=options_html+"<div class='radio'><label><input type='radio' id='answer' name='answer' value='2'><strong>"+opt2+"</strong></label></div>";
    	options_html=options_html+"<div class='radio'><label><input type='radio' id='answer' name='answer' value='3'><strong>"+opt3+"</strong></label></div>";
    	options_html=options_html+"<div class='radio'><label><input type='radio' id='answer' name='answer' value='4'><strong>"+opt4+"</strong></label></div>";


    	$("#question").html("<h3 style='color:#777777'>"+question+"</h3>");
    	$("#questionid").val(questionid);
    	$("#options").html(options_html);

    	question_index = question_index + 1;
    	question_count = question_count + 1;
    	countDownDate_question = new Date();
    	countDownDate_question.setSeconds(countDownDate_question.getSeconds() + Number(duration));
    	startQuestionCountDown();
			
    }	
    function SaveAnswer() {
    	var examid 			= $("#examid").val();
		var questionid 		= $("#questionid").val();
		var jobseekerid 	= $("#jobseekerid").val();
		var answerselected 	= $('input[name=answer]:checked').val();
		if (typeof answerselected === "undefined") {
			answerselected = 0;
		}
		questiondata[question_index-1].AnswerGiven = answerselected;

		$.ajax({
	        type: "GET",
	        url: "save_answer.php",
	        data: "examid="+examid + "&questionid=" + questionid + "&jobseekerid=" +jobseekerid + "&answerselected="+answerselected,
	        success : function(text){
	        	if(text=="Success") {
	        		//alert("Successfully Saved");
	        	} else {
	        		alert("Error occured while saving");
	        	}
			}
		});
    	 var questionno = Number($("#questionno").val())+1;
    	 $("#questionno").val(questionno);
    }

    function SkipAnswer() {
    	var examid 			= $("#examid").val();
		var questionid 		= $("#questionid").val();
		var jobseekerid 	= $("#jobseekerid").val();
		var answerselected = 0;
		
		questiondata[question_index-1].AnswerGiven = answerselected;

		$.ajax({
	        type: "GET",
	        url: "save_answer.php",
	        data: "examid="+examid + "&questionid=" + questionid + "&jobseekerid=" +jobseekerid + "&answerselected="+answerselected,
	        success : function(text){
	        	if(text=="Success") {
	        		//alert("Successfully Saved");
	        	} else {
	        		alert("Error occured while saving");
	        	}
			}
		});
    	 var questionno = Number($("#questionno").val())+1;
    	 $("#questionno").val(questionno);
    }

/*   function ShowQA() {
    	var html = "";
    	html = "<table class='table table-responsive table-hover table-bordered' id='show_qa'>";
    	html += "<caption>List of Questions and Answers</caption>";
    	html += "<tr>";
    	html += "<th>Q.No</th>";
    	html += "<th>Question</th>";
    	html += "<th>Opt1</th>";
    	html += "<th>Opt2</th>";
    	html += "<th>Opt3</th>";
    	html += "<th>Opt4</th>";
    	html += "<th>Answer</th>";
    	html += "</tr>";
    	var QNo = 1;
    	for(i=0;i<questiondata.length;i++){
    		html += "<tr>";
	    	html += "<td>"+QNo+"</td>";
	    	html += "<td>"+questiondata[i].Question+"</td>";
	    	html += "<td>"+questiondata[i].Opt1+"</td>";
	    	html += "<td>"+questiondata[i].Opt2+"</td>";
	    	html += "<td>"+questiondata[i].Opt3+"</td>";
	    	html += "<td>"+questiondata[i].Opt4+"</td>";
	    	html += "<td>"+questiondata[i].AnswerGiven+"</td>";

    		html += "</tr>";
    		QNo++;
    	}
    	html += "</table>";
    	$("#question").html(html);
    }*/
    </script>
	</body>
</html>