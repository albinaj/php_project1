<!doctype html>
<html>
     <head>
			<title>signup</title>
		
			<link rel="stylesheet" href="css/style.css">
	<style>
		table,a{
			text-decoration: none;
			color:white;
		}
	</style>


	</head>
<body class="a">
          

			<div class="abc">
				<ul>
					<li><a href="adminhome.php">HOME</a></li>
					<li>
						<form name="signup" action="signout.php" method="POST">
							
							<input type="submit"  class="frm" value="SIGN OUT" name="signout"> 
						</form>
						</li>
				</ul>
			</div>
			<div style="display:inline-flex">
				<div class="form2">
					<ul>
						  <li><a href="facultysignup.php">FACULTY REGISTRATION</a></li> 
						  <li><a href="studentsignup.php">STUDENT REGISTRATION</a></li>
						  <li><a href="adminhome.php">FACULTY DETAILS</a>
							  <div class="submenu">
								  <ul>
									  <li><a href="allfaculty">PERSONAL DETAILS</a></li>
									  <li><a href="facultyattendance"></a>>ATTENDANCE</a></li>
									  
								  </ul>
								  
							 </div>
							 </li>
	  
	  
	  
						  <li><a href="studentsignup">STUDENT DETAILS</a>
							  <div class="submenu">
								  <ul>
									  <li><a href="allstudent.php"></a>">PERSONAL DETAILS</a></li>
									  <li><a href="studentattendance.php">ATTENDANCE</a></li>
									  <li><a href="admarks.php">MARKS</a></li>
								  </ul>
								  
							 </div>
							 </li>
					  
						  <li><a href="studentsignup.php">TIME TABLE</a></li>    
		  </div>						  




			<div class="form">
		            <form name="signup" action="studentsignup1.php" method="POST">
					
					
					<table>	
						<tr>
							<td>Admission no</td>
							<td><input type="text" class="frm" name="studentid"></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" class="frm" name="studentname"></td>
						</tr>
						<tr>
							<td>Address</td>	
							<td><textarea class="frm" placeholder="enter your address" name="address"></textarea></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td><input type="text" class="frm" name="gender"></td> </td>
						</tr>
						<tr>
							<td>DOB:</td>
							<td> <input type="date" class="frm"  name="dob"> </td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><input type="text" class="frm"  name="email"></td>

						</tr>
						<tr>
							<td>Admission Date</td>
							<td><input type="date" class="frm"  name="admissiondate"></td>
						</tr>
						<tr>
							<td>Qualification</td>
							<td><input type="text" class="frm"  name="qualification"></td>
						</tr>
						<tr>
							<td>Mobile-No  </td>
							<td><input type="text" class="frm" placeholder="mobileno" name="mobile"></td>
						</tr>
						
						<tr>
							<td>Batch</td>
							<td><input type="text" class="frm"  name="batch"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" class="frm" name="password"> </td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" class="frm" value="Register"><br> </td>
						</tr>	
					</table>
			 </div>		
		</form>
	</div>
		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
