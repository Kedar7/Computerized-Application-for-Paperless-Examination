
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

</head>
<body>
<h3 style="text-align:center;color:#777777;">Welcome to Online Examination <strong style="color:#e77637;"><?php echo $_SESSION['email'];?></strong></h3>

<h4 style="margin-top:-30px;float:right;"><a href="logout.php"> Logout  </a></h4>
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">exams Conducted</a>
  <a data-toggle="modal" data-target="#myModalNorm" class="w3-bar-item w3-button">Eligibility</a><!--Done-->
  <a href="exam.php" class="w3-bar-item w3-button">Fill question</a><!--Done-->
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container" style="background-color:white;color:#777777">
    <h1 style="margin-top:-5px;">Exams conducted</h1>
  </div><hr>
</div>

<div class="w3-container" style="margin-left:-10px;">

<div class="container">
  <div class="row">
    <h2>Exam results</h2>
        <hr>
    
    <div class="row">
      			
      			<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 1" href="#"> 
						<img class="thumbnail img-responsive" id="image-1" src="http://dummyimage.com/600x350/ccc/969696&amp;text=0xD10x810xD00xB50xD10x800xD10x8B0xD00xB9">
					</a>
				</div>
      
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 2" href="#"> 
						<img class="thumbnail img-responsive" id="image-2" src="http://dummyimage.com/600x350/2255EE/969696&amp;text=0xD10x810xD00xB80xD00xBD0xD00xB80xD00xB9">
					</a>

				</div>
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 3" href="#"> 
						<img class="thumbnail img-responsive" id="image-3" src="http://dummyimage.com/600x350/449955/FFF&amp;text=0xD00xB70xD00xB50xD00xBB0xD00xB50xD00xBD0xD10x8B0xD00xB9">
					</a>
				</div>
    </div>
    
    <hr>
    
  </div>
    <div class="row">
   
        <hr>
    
    <div class="row">
      			
      			<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 1" href="#"> 
						<img class="thumbnail img-responsive" id="image-1" src="http://dummyimage.com/600x350/ccc/969696&amp;text=0xD10x810xD00xB50xD10x800xD10x8B0xD00xB9">
					</a>
				</div>
      
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 2" href="#"> 
						<img class="thumbnail img-responsive" id="image-2" src="http://dummyimage.com/600x350/2255EE/969696&amp;text=0xD10x810xD00xB80xD00xBD0xD00xB80xD00xB9">
					</a>

				</div>
				<div class="col-12 col-md-4 col-sm-6">
					<a title="Image 3" href="#"> 
						<img class="thumbnail img-responsive" id="image-3" src="http://dummyimage.com/600x350/449955/FFF&amp;text=0xD00xB70xD00xB50xD00xBB0xD00xB50xD00xBD0xD10x8B0xD00xB9">
					</a>
				</div>
    </div>
    
    <hr>
    
  </div>
</div>

	<div class="hidden" id="img-repo">
		
		<!-- #image-1 -->
		<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="Image 11" src="http://dummyimage.com/600x350/ccc/969696">
		</div>
		<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="Image 12" src="http://dummyimage.com/600x600/ccc/969696">
		</div>
		<div class="item" id="image-1">
			<img class="thumbnail img-responsive" title="Image 13" src="http://dummyimage.com/300x300/ccc/969696">
		</div>
      
		<!-- #image-2 -->
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x350/2255EE/969696">
		</div>
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x600/2255EE/969696">
		</div>
		<div class="item" id="image-2">
			<img class="thumbnail img-responsive" title="Image 23" src="http://dummyimage.com/300x300/2255EE/969696">
		</div>   
      
		<!-- #image-3-->
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 31" src="http://dummyimage.com/600x350/449955/FFF">
		</div>
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 32" src="http://dummyimage.com/600x600/449955/FFF">
		</div>
		<div class="item" id="image-3">
			<img class="thumbnail img-responsive" title="Image 33" src="http://dummyimage.com/300x300/449955/FFF">
		</div>        
		
	</div>

<div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">
          <div id="modal-carousel" class="carousel">
   
            <div class="carousel-inner">           
            </div>
            
            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
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
