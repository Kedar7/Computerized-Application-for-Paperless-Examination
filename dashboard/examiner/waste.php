  
  <?php
  $con=mysqli_connect("localhost","root","","online_exam");
    $query = "select name from post";
    $results = mysqli_query($con,$query);

    while ($rows = mysqli_fetch_assoc(@$results)){ 
    	echo $rows['name'];
    }
    ?>