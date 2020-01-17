<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		    
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
	tr,td{padding:10px;
		
	}
		
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="studenthome.php">HOME</a></li>
			<li>
				<form name="signup" action="{%url 'signout'%}" method="POST">
				
					<input type="submit"  class="frm1" value="SIGN OUT" name="signout"> 
				</form>
				</li>
		</ul>
	</div>
	<div style="display:inline-flex">
          <div class="form">
			    <ul>
					<li><a href="studentdetails.php">MY PROFILE</a></li> 
					<li><a href="studenthome.php">ATTENDANCE</a></li> 
				    <li><a href="studenthome.php">MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>
								
				</ul>
				</div>	
				
  					   <div class="form5">
						<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['studentid'];
		            $sql="select * from studentattendance where studentid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{
						?>  
		            						<table>
				
						<tr>
							<td>STD ID</td>
							<td>NAME</td>
							<td>Batch</td>
							<td>DATE</td>
							<td>Hour-1</td>
							<td>Hour-2</td>
							<td>Hour-3</td>
							<td>Hour-4</td>
						</tr>	
						<tr>
							<td><?php echo $row['studentid'];?></td>
							<td><?php echo $row['studentname'];?></td>
							<td><?php echo $row['batch'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php echo $row['hour1'];?></td>
							<td><?php echo $row['hour2'];?></td>
							<td><?php echo $row['hour3'];?></td>
							<td><?php echo $row['hour4'];?></td>
						
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
