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
			<li><a href="adminhome.php">HOME</a></li>
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
					<li><a href="facultysignup.php">FACULTY REGISTRATION</a></li> 
					<li><a href="studentsignup.php">STUDENT REGISTRATION</a></li>
					<li><a href="adminhome.php">FACULTY DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allfaculty.php">PERSONAL DETAILS</a></li>
								<li><a href="facultyattendance.php">ATTENDANCE</a></li>
								
							</ul>
							
					   </div>
					   </li>



					<li><a href="adminhome.php">STUDENT DETAILS</a>
						<div class="submenu1">
							<ul>
								<li><a href="allstudent.php">PERSONAL DETAILS</a></li>
								<li><a href="studentattendance.php">ATTENDANCE</a></li>
								<li><a href="admarks.php">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="#">TIME TABLE</a></li> 
					<li><a href="adminleave.php">LEAVE APPLICATIONS</a></li>    
	</div>	
	<div class="form6">
		
		<tr>	
			<table>
	
			<tr>
			    <td style="padding:10px">Id</td>
				<td style="padding:10px">NAME</td>
				<td style="padding:10px">FROM-DATE</td>
				<td style="padding:10px">TO-DATE</td>
				<td style="padding:10px">REASON</td>
				<td style="padding:10px">STATUS</td>
			</tr>
			<?php
		   require_once 'connection.php';
		   $sql="select * from facultyleave ";
		   $result=mysqli_query($conn,$sql);
		   while($row=mysqli_fetch_assoc($result))
		   {
			 ?>
			<tr>
				<td><?php echo $row['facultyid'];?></td>
				<td><?php echo $row['facultyname'];?></td>
				<td><?php echo $row['fromdate'];?></td>
				<td><?php echo $row['todate'];?></td>
				<td><?php echo $row['reason'];?></td>
				<td><?php echo $row['status'];?></td>
			</tr>
		<?php
				}
			?>
		</table>
			
		</div>	


		<div> 
			<form action="facultyapproved1.php" method="POST">
			
			<input type="text" class="frm1" placeholder="enter the name" name="facultyname">
			<input type="submit" class="frm1" value="approve" name="submit">
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
