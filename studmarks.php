<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		   
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
		
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="studenthome.php">HOME</a></li>
			<li>
				<form name="signup" action="signout.php" method="POST">
					
					<input type="submit"  class="frm1" value="SIGN OUT" name="signout"> 
				</form>
				</li>
		</ul>
	</div>
	<div style="display:inline-flex">
          <div class="form">
			    <ul>
					<li><a href="studentdetails.php">MY PROFILE</a></li> 
					<li><a href="stuattendance.php">ATTENDANCE</a></li> 
				    <li><a href="studmarks.php">MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>
					<li><a href="studentleave.php">LEAVE APPLICATION</a></li>
					<li><a href="studentleavestatus.php">LEAVE STATUS</a></li>
								
				</ul>
				</div>	
				
  					   <div class="form5">
						<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['studentid'];
		            $sql="select * from studentmarks where studentid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
		         {
			      ?>

						<table>
				
						<tr>
							<td>STD ID</td>
							<td><input class="frm1"type="text" value="<?php echo $row['studentid'];?>"></td><br>
						</tr>
						<tr>
							<td>NAME</td>
							<td><input class="frm1" type="text" value="<?php echo $row['studentname'];?>"></td>
						</tr>


						<tr>
				        	<td>Batch</td>
							<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>"></td>
						</tr>
						<tr>
							<td>Assessment no</td>
							<td><input class="frm1" type="text" value="<?php echo $row['assessmentno'];?>"></td>
						
						</tr>
						<tr>
							<td>SUB-1</td>
							<td><input class="frm1" type="text" value="<?php echo $row['sub1'];?>"></td>
						</tr>
						<tr>
							<td>SUB-2</td>
							<td><input class="frm1" type="text" value="<?php echo $row['sub2'];?>"></td>
						</tr>
						<tr>
							<td>SUB-3</td>
							<td><input class="frm1" type="text" value="<?php echo $row['sub3'];?>"></td>
						</tr>
					
						
					</table>
					   <?php
							}
						?>
						
					</div>	
				
				</div>
				
				







		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
