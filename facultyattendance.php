<!doctype html>
<html>
     <head>
			<title>signup</title>{% load static %}
			  
		    {% load static %}
			<link rel="stylesheet" href="{% static 'css/style2.css'%}">
			
	<style> 
		
	</style>
	        
	</head>
<body class="a">


	<div class="abc">
		<ul>
			<li><a href="{%url 'facultyhome'%}">HOME</a></li>
			<li>
				<form name="signup" action="{%url 'signout'%}" method="POST">
					{% csrf_token %}
					<input type="submit"  class="frm1" value="SIGN OUT" name="signout"> 
				</form>
				</li>
		</ul>
	</div>
          <div class="form">
			  <ul>
					<li><a href="{%url 'facultydetails'%}">MY PROFILE</a></li> 
					<li><a href="{%url 'facultysignup'%}">STUDENT ATTENDANCE</a></li>
					<li><a href="{%url 'studentsignup'%}">STUDENT DETAILS</a>
						<div class="submenu">
							<ul>
								<li><a href="{%url 'studentdetails'%}">PERSONAL DETAILS</a></li>
								<li><a href="{%url 'studentattendance'%}">ATTENDANCE</a></li>
								<li><a href="{%url 'facmarks'%}">MARKS</a></li>
							</ul>
							
					   </div>
					   </li>
				
					<li><a href="#">TIME TABLE</a></li>    
	</div>	
		<div class="ft">
      <footer>
	           <p>&copy 2018-2019 company ltd<p>
	  
	  </footer>
 </div> 
</body>
</html>		
