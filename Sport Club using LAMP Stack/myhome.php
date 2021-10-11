<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY-SPORT-CLUB</title>
    <link rel="stylesheet" type="text/css" href="myhome.css"/>
        <script language="javascript" type="text/javascript">
        </script>
</head>
<body class="main"> 

    <div class="mynavmain">
        <div class="mylogo">
        <img class="mylogo" src="images/mylogo.png" />
        
        </div>
        <div class="title">
            <h1><i>MY-SPORTS-CLUB</i></h1>
        </div>
        <div class="mynav">
            <ul >
                <li><a href="myhomeuser.php?logout='1' " style="color: red;">Logout</a></li>
                <li><a href="userprofile.php?uprofile='1'" >Profile</a></li>
                <li><a class=" " href="#aboutus">About Us</a></li>
                <li><a class=" " href="#contactus">Contact Us</a></li>
                <li><a class=" " href="#category">Catagory</a></li>
                <li><a class="active" href="myhomeuser.php">Home</a></li>

            </ul>
        </div>
    </div>

    <div class="info">
        <div class="infoheadingicon" >
            <h1>Sports Makes You Happier</h1>
            <p style="background-color: yellow;">An athlete cannot run with money in his pockets.
            He must run with hope in his heart and dreams in his head</p>
            <p style="background-color:cyan; margin-left:30%;">-> Emil Zatopek</p>
        </div>
          
       <div class="infoimagediv">
        <img class="infoimage"  src="images/bg2.png" />
       </div>
    </div>


    <div class="maingrid">
        <a name="category"></a>
        <h1 class="heading">Catagory</h1>
        
        <div class="maingridrow">
          
            <div class="maingridimageicon"><h3 class="heading">football</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/football.jpeg" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Cricket</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/cricket.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Badminton</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/bad.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Tennis</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/tennis.jpeg" /></a></div>
        </div>
        <div class="maingridrow">
            <div class="maingridimageicon"><h3 class="heading">Hockey</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/hockey.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Volleyball</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/volleyball.jpeg" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Basketball</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/basketball.jpeg" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Tabletennis</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/tabletennis.jpg" /></a></div>
          
        </div>
        <div class="maingridrow">
            <div class="maingridimageicon"><h3 class="heading">Swimming</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/mylogo.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Wrestling</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/mylogo.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Shooting</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/mylogo.png" /></a></div>
            <div class="maingridimageicon"><h3 class="heading">Athletics</h3><a href="mysportdetails.php"><img class="maingridimage" src="images/mylogo.png" /></a></div>
        </div>
    </div>
   


    <h1 class="heading">Join Us For Adventure</h1>

    <div class="info">
        <a name="contactus"></a>
         <div class="infoimagediv">
            <img class="infoimage"  src="images/bg1.jpg" />
         </div>

        <div class="infodetails">
                <fieldset>
                    <legend>Enter Your Details :</legend>
                    <form class="myform" action="" method="POST">
                    <input type="text" name="name" placeholder="enter your name" >
                     <br>
                     <input type="number" name="age" placeholder="enter your age" >
                     <br>
                     <input type="text" name="email" placeholder="enter your Email" ><br>
                    <input type="text" name="contact" placeholder="enter your Contact"><br>

        
                    <input class="btn" type="submit" name="sendemail" value="SEND">
                    </form>
                </fieldset>
                <p>We Will Contact You soon!!!</p>
        </div>     
    </div>



    <div class="footer">
        <p class="copyright">Webtech Lab assignment © 2020-<?php echo date("Y");?></p>
        <p class="copyright">Created By Sharad Mishra </p>
    </div>
 
</body>
</html>