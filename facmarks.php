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
			<li><a href="facultyhome.php">HOME</a></li>
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
					<li><a href="facultydetails.php">MY PROFILE</a></li> 
					<li><a href="facultystudattendance.php">STUDENT ATTENDANCE</a></li>
					<li><a href="facultyhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="fstuddetails.php">PERSONAL DETAILS</a></li>
								<li><a href="facstudattendance.php"> ADD ATTENDANCE</a></li>
								<li><a href="facmarks.php">ADD MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
					<li><a href="allstudmarks.php">VIEW MARKS</a></li>
					<li><a href="#">TIME TABLE</a></li>    
	</div>
	
	<div class="form6" style="padding:20px;margin-left:20px">
		<h1>Student Details</h1>					
		<table>	
			<tr>
				<th style="padding:10px">Student Id</th>
				<th style="padding:10px">Name</th>
				<th style="padding:10px">Batch</th>
		

			</tr>
			<?php
		   require_once 'connection.php';
		   $sql="select * from student ";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>  
		   
			<tr>
				<td><?php echo $row['studentid'];?></td>
				<td><?php echo $row['studentname'];?></td>
	
				<td><?php echo $row['batch'];?></td>

			</tr>
			<?php
				}
			?>
				
			</table>	
		</form>
		</div>

		<div class="form6" style="padding:20px;margin-left:100px">
			<form name="signup" action="facmarks1.php" method="POST">
			
								
			<table>	
				<tr>
					<td>Student Id</td>
					<td><input type="text" class="frm1" name="studentid"></td>
				</tr>
				<tr>
					<td>Student Name</td>
					<td><input type="text" class="frm1" name="studentname"></td>
				</tr>
				<tr>
					<td>Batch</td>
					<td><input type="text" class="frm1" name="batch"></td>
				</tr>
				<tr>
					<td>Assesment No</td>
					<td><input type="text" class="frm1" name="assessmentno"></td>
				</tr>
				<tr>
					<td>Sub1</td>
					<td><input type="text" class="frm1" name="sub1"></td> </td>
				</tr>
				<tr>
					<td>sub2</td>
					<td> <input type="text" class="frm1"  name="sub2"> </td>
				</tr>
				<tr>
					<td>sub3</td>
					<td><input type="text" class="frm1"  name="sub3"></td>
	
				</tr>
				
				
				<tr>
					<td><input type="submit" name="submit" class="frm1" value="Add Marks"><br> </td>
				</tr>	
				</table>	
			</form>
			</div>
	






	</div>




		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
