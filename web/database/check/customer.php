<?php
	include("../connection.php");
	if(isset($_POST['type']) == 1){
		$username =$_POST['username'];
		 $query ="SELECT * FROM sample where username ='".$username."' ";
		$result =mysqli_query($conn, $query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount >0){
			
			 echo "<span class='status-available'> Username Available.</span>";
			
		}else{
			
			 echo "<span class='status-not-available'> invaild username.</span>";		
		}
	}


	
?>
