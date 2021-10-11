<?php  include('loginregister.php')  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Registration Page</title>
    <link rel="stylesheet" type="text/css" href="myregister.css"/>
    <script language="javascript" type="text/javascript" src="myregister.js">
    </script>
</head>
<body>
		<form  method="post" action ="myregister.php" name="myregistrationform" onsubmit="return formvalidation()">
			<div id="main">
				<div class="h-tag">
					<h2>Create Subscriber Account</h2>
				</div>
			<div class="login">
			<table cellspacing="2" align="center" cellpadding="8" border="0">
			<tr>
			<td align="right">Enter Name :</td>
			<td><input type="text" name="username" placeholder="Enter user here" id="t1" class="tb" /></td>
			</tr>
			<tr>
			<td align="right">Enter Email ID :</td>
			<td><input type="text" name="useremail" placeholder="Enter Email ID here" id="t2" class="tb" /></td>
			</tr>
			<tr>
			<td align="right">Enter Username :</td>
			<td><input type="text"  name="useruname" placeholder="Enter Username here" id="t3" class="tb" /></td>
			</tr>
			<tr>
			<td align="right">Enter Password :</td>
			<td><input type="password"  name="userpassword"placeholder="Enter Password here" id="t4" class="tb" /></td>
			</tr>
			<tr>
			<td align="right">Enter Confirm Password :</td>
			<td><input type="password" name="usercpassword" placeholder="Enter Password here" id="t5" class="tb" /></td>
			</tr>
			<tr>
			<td></td>
			<td>
			<input type="reset" value="Clear Form"  id="res" class="btn" />
			<input type="submit" value="Create Account" name="register_user" class="btn" /></td>
			</tr>
			</table>
			</div>
			<!-- create account box ending here.. -->
			</div>
			<div class="already">
				<p>Aready Register_____!!!</p>
				<a href="mylogin.php"><input class="btn" type="button" name="login" value="LOGIN" /></a>
			</div>

		</form>

		
	</body>
</html>
        