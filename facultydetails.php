<!doctype html>
<html>
     <head>
			<title>signup</title>
			  
		   
			<link rel="stylesheet" href="css/style2.css">
			
	<style> 
		table{color:white;}
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="facultyhome.php">HOME</a></li>
			<li>
				<form name="signup" action="signout'" method="POST">
					
					<input type="submit"  class="frm1" value="SIGN OUT" name="signout"> 
				</form>
				</li>
		</ul>
	</div>

	<div style="display:inline-flex">

          <div class="form">
			  <ul>
					 
					<li><a href="facultydetails.php">MY PROFILE</a></li>
					<li><a href="facultystudattendance.php">STUDENT ATTENDANCE</a></li>	
					<li><a href="facultyhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="fstuddetails.php">PERSONAL DETAILS</a></li>
								<li><a href="facstudattendance.php">ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
					<li><a href="#">TIME TABLE</a></li> 
					<li><a href="facultyleave.php">LEAVE APPLICATION</a></li> 
					<li><a href="facultyleavestatus.php">LEAVE STATUS</a></li>   
				</div>

				
				<div class="form5">
					<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['facultyid'];
		            $sql="select * from faculty where facultyid=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{
						?>  
		            
					<form action="facultyedit.php" method="POST">

					<table>

					<tr>
						<td>NAME</td>
						<td><input class="frm1"type="text" value="<?php echo $row['facultyname'];?>" readonly></td><br>
					</tr>
					<tr>
						<td>ADDRESS</td>
						<td><input class="frm1" type="text" value="<?php echo $row['address'];?>" readonly></td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input class="frm1" type="text" value="<?php echo $row['dob'];?>" readonly></td>
					</tr>
					<tr>
						<td>GENDER</td>
						<td><input class="frm1" type="text" value="<?php echo $row['gender'];?>" readonly></td>
					</tr>
					<tr>
						<td>QUALIFICATION</td>
						<td><input class="frm1" type="text" value="<?php echo $row['qualification'];?>" readonly></td>
					</tr>
					<tr>
						<td>E-MAIL</td>
						<td><input class="frm1" type="text" value="<?php echo $row['email'];?>" readonly></td>
					</tr>
					<tr>
						<td>BATCH IN CHARGE</td>
						<td><input class="frm1" type="text" value="<?php echo $row['batch'];?>" readonly></td>
					
					</tr>
					<tr>
						<td>MOBILE NO</td>
						<td><input class="frm1" type="text" value="<?php echo $row['mobile'];?>" readonly></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td><input class="frm1" type="text" value="<?php echo $row['password'];?>" readonly></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" class="frm1" value="Edit">
						</td>
					</tr>
				

				</table>
					<?php
						}
					?>
				</div>	
	
			</div>




     
</body>
</html>		
