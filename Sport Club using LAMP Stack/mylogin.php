<?php include('loginregister.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLOGIN-PAGE</title>
    <link rel="stylesheet" type="text/css" href="mylogin.css"/>
    <!--<script language="javascript" type="text/javascript" src="mylogin.js">
    </script> -->
</head>

<body> 

   

    <div class="container" >

        <form action="mylogin.php" method="post">
            <h1>Login Form</h1>
            <div class="form-group">
                <label for="">Email/UserName</label>
                <input type="text" name="user" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password"  name="password" class="form-control" required>
            </div>

            <input type="submit" class="btn" name="login_user" value="Login">
                <br>
                <br>
                <p style="text-align: center;">Don't have Account !!!</p>
                <a href="myregister.php"><input class="btn" type="button" name="register" value="Register" /></a>

        </form>

       
    </div>



    <div class="Footer">
    </div>

    
</body>
</html>