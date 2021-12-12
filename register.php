<html>
<head>
<title> Registration Form </title>
</head>
<body style="background-color:#b5cae9;">
<center>
<div style="background-color:#82EEFD;" width=50%; float:center;>
      <h3><font size="+5"> Registration Form </font></h3>
      <font size="+2">
      <form action="process.php" method="post">
         <label for="fname"> <b> First Name </b> </label> <br>
         <input type="text" name="fname"> <br/><br>
         <label for="lname"> <b> Last Name </b> </label> <br> 
         <input type="text" name="lname"> <br/><br>
	 <label for="gender"><b> Gender </b> </label> <br>
	 &nbsp;&nbsp;&nbsp;
	 <input type="radio" name="gender" 
	 id="male" value="Male">
	 &nbsp;
	 <span id="male">Male</span>
	 &nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="radio" name="gender" 
	 id="female" value="Female">
	 &nbsp;
	 <span id="female">Female</span> <br><br>		
         <label for="email"> <b> Email </b> </label> <br>
         <input type="email" name="email"> <br><br>
         <label for="passd"> <b> Enter Password </b> </label> <br/>
         <input type="password" name="passd"> <br/><br>
         <input type="submit" name="Submit" id="Submit" value="Submit">
      </form>
      </font>  
      </div>
      </center>
</body>
</html>