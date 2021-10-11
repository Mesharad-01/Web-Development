<?php 
include('session.php');  
include('connection.php');

$userid=$_SESSION["uid"];

if(isset($_GET['cartid'])) {

    $ourid=$_GET['cartid'];
    $sql="INSERT INTO cart(userid,sportid)VALUES($userid,$ourid)  ";
    $result=mysqli_query($con, $sql);   

    unset($_GET);
  	header("location: myusersubscription.php?getcart='1'");
}
if(isset($_GET['remove'])) {

    $ourid=$_GET['remove'];
    $sql="DELETE from cart where userid=$userid and sportid=$ourid";
    $result=mysqli_query($con, $sql);   

    unset($_GET);
  	header("location: myusersubscription.php?getcart='1'");
}
if(isset($_GET['payment'])) {

    $amount=$_GET['payment'];
    $ourid=$_GET['sid'];

    date_default_timezone_set('Asia/Kolkata');
    $date=new DateTime();
    $mdate = new DateTime();
   
    $interval = new DateInterval('P30D');
    $mdate->add($interval);
    

    $date=$date->format("Y-m-d h:i:s");
    $mdate=$mdate->format("Y-m-d h:i:s");

    $sql="INSERT INTO record(sportid,userid,startdate,enddate,amount)VALUES($ourid,$userid,'$date','$mdate',$amount)";
    $result=mysqli_query($con, $sql);   

    if($result!=0)    
    {    
        //$row = mysql_fetch_array($result)
    }
    else{
       echo '<script type="text/javascript">alert("error!!!")</script>';   
    }

    unset($_GET);
	header("location: myusersubscription.php?remove='1'");

}


if (isset($_GET['getsport'])) {

    $query1=mysqli_query( $con, "SELECT * FROM sports WHERE id not in (SELECT sportid from  cart where userid='$userid') and id not in (SELECT sportid from record where userid='$userid' )");
    $result=mysqli_num_rows($query1); 
    if($result!=0)    
    {    
        //$row = mysql_fetch_array($result)
    }
    else{
       echo '<script type="text/javascript">alert("You have added all the Sports !!!")</script>';   
    }
    $_SESSION["sportpage"]='1';
   
    unset($_GET);
}
if (isset($_GET['getcart'])) {
    $query1=mysqli_query($con, "SELECT sports.id,sports.sportname,sports.sportprice FROM cart INNER JOIN sports ON cart.sportid=sports.id WHERE cart.userid='$userid' " );
    $result=mysqli_num_rows($query1); 
    if($result!=0)    
    {    
        //$row = mysql_fetch_array($result)
    }
    else{
       echo '<script type="text/javascript">alert("nothing in cart !!!")</script>';   
    }
    $_SESSION["cartpage"]='1';
    unset($_GET);

}

$con->close();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="myhome.css"/>
        <script language="javascript" type="text/javascript">
            function ok(){
                aler("chalta");
            }

        </script>

        <style>
            table  {
                margin: 20px 20px 20px 20px;
                width: 80%;
                text-align: center;
                border-collapse: collapse;
               
            }
           th,td{
            font-size: large;
            font-family: 'Courier New', Courier, monospace;
            border-bottom: 2px solid cadetblue;
           }

            td{
                height: 30px;
            }
            th{
                background-color:  rgb(165, 242, 245) ;
                height: 50px;
            }
            tr:hover {background-color: #f15729;}

            input{
                background-color:rgb(165, 242, 245); 
                width: 100px;
                height: 20px;
               
            }

        </style>
</head>

<body class="main" > 

    <div class="mynavmain">
        <div class="mylogo">
        <img class="mylogo" src="images/mylogo.png" />
        
        </div>
        <div class="title">
            <h1><i>MY-SPORTS-CLUB</i></h1>
        </div>

        <div class="mynav">
            <ul>
                <li><a href=" myusersubscription.php?logout='1'  " style="color: red;">Logout</a></li>
                <li><a  href="myusersubscription.php?getcart='1'">Checkout</a></li>
                <li><a href="myusersubscription.php?getsport='1'">Sport</a></li>
                <li><a  href="myhomeuser.php">Home</a></li>
            </ul>
        </div>
    </div>
    
<li ><b><i>Last-Login: <?php echo $_SESSION["lastlogin"] ?></i></b></li>
<?php
    if (isset($_SESSION["cartpage"])){
      echo'<h1 class="heading">Checkout-Section</h1>';
    }
    if(isset($_SESSION["sportpage"])){
        echo'<h1 class="heading">Sport-Section</h1>';

    }
?>

<div class="allsport">

<center>
   <?php
    if (isset($_SESSION["cartpage"])){
        echo "<table><tr><th>ID</th><th>Sport</th><th>Price/Month</th><th>Pay</th><th>Remove</th></tr>";
        while($row=$query1->fetch_assoc()){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['sportname'] . "</td><td>". $row['sportprice'] . "</td>
        <td>
        <a href=\"myusersubscription.php?sid='$row[id]'&payment='$row[sportprice]' \" ><input type=\"submit\" name=\"payment\" value=\"PAY\" /></a>
        </td>
        <td>
        <a href=\"myusersubscription.php?remove='$row[id]'\" ><input type=\"submit\" name=\"removecart\" value=\"REMOVE\" /></a>
        </td>
        </tr>"; 
        }
        unset($_SESSION["cartpage"]);
    }
    else if(isset($_SESSION["sportpage"])){
        echo "<table><tr><th>ID</th><th>Sport</th><th>Price/Month</th><th>Add Service</th></tr>";
        while($row=$query1->fetch_assoc()){

        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['sportname'] . "</td><td>". $row['sportprice'] . "</td>
        <td>
        <a href=\"myusersubscription.php?cartid='$row[id]'\" ><input type=\"submit\" name=\"addcart\" value=\"ADD\" /></a>
        </td>
        </tr>"; 
        
        }
        unset($_SESSION["sportpage"]);
    }

  ?>
</center>

</div>
		
</body>
</html>