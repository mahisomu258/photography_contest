<!DOCTYPE html>
<html>

<head>
  <!--Link to CSS-->
  <link rel = "stylesheet" href = "../css/signup.css">
<title>Sign up</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color:#fdfbf4;font-family:Old Standard TT, serif;">
<div class="topnav">
  <a href="usersignup.php">Sign Up</a>
  <a href="userlogin.php">Login</a>
  <a href="main.php">Winner</a>
  <a href="main.php">About Us</a>
    <a class="active" href="main.php">Home</a>
	<p style="float: left;">PIXELS</p>

</div>
<br><br><br>
<div class="signuptitle"><h2 id="Sign Up" >Sign Up</h2><br/>
    <form method="POST" action="signup.php">
    <table>
    <tr>
		<td style="text-align:left">First Name</td>
 		<td>:</td>
 		<td><input type="text" name="firstname" size="20" maxlength="15" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Last Name</td>
 		<td>:</td>
 		<td><input type="text" name="lastname" size="20" maxlength="15" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Username</td>
 		<td>:</td>
 		<td><input type="text" name="username" size="20" maxlength="15" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Email</td>
 		<td>:</td>
 		<td><input type="email" id="email" size="20" name="email" required/></td>
	</tr>
 	<tr>
 		<td style="text-align:left">Contact Number</td>
 		<td>:</td>
 		<td><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}" placeholder="Eg:xxx-xxxxxxx" required /></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Gender</td>
 		<td>:</td>
 		<td>	<input type="radio" name="gender" value="M" required/>Male
 				<input type="radio" name="gender" value="F" required/>Female
 		</td>
	</tr>
 	<tr>
 		<td style="text-align:left">Date of Birth</td>
 		<td>:</td>
 		<td><input type="date" id="dob" name="dob" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Nationality</td>
 		<td>:</td>
 		<td><input type="text" name="nationality" size="20" maxlength="15" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Password</td>
 		<td>:</td>
 		<td><input type="password" name="password" size="20" maxlength="15" required/></td>
 	</tr>
 	<tr>
 		<td style="text-align:left">Confirm Password</td>
 		<td>:</td>
 		<td><input type="password" name="confirmpassword" size="20" maxlength="15" required/></td>
 	</tr>
 		<td></td>
 	<tr></tr>
 	</table>
	<br>
    <input type="submit" value="Sign Up" style="background-color:#4CAF50;color:white;border:none;border-radius:15px;padding:10px 20px">
    </form><br/>
</div>
<br/><br/>
<br/><br/>
<!-- footer -->
<div class="footer" style="font-size:14px" >
	<div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
	<div style="padding-top:20px">
				<img class="logo" style="width:120px; height:100px" src="https://t3.ftcdn.net/jpg/05/00/09/00/360_F_500090048_Vwr47TpMANq2xG8YHmOo4mFtw0PPkXAt.jpg"></br></br>
			</div>
			<div>
            <p><b>PIXELS</b></p>
            SRM university, </br>
            neerukonda,</br>
            guntur,andhrapradesh</br>
          </div></br>
</div></br>





</body>
</html>