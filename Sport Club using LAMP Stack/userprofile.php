<?php  
include('session.php'); 
include('connection.php');


if( ! empty( $_REQUEST['Message1'] )  )
  {

    echo '<script type="text/javascript">alert("Image Successfully Uploaded !!!  ")</script>'; 
  
  }
if( ! empty( $_REQUEST['Message2'] )  )
  {

    echo '<script type="text/javascript">alert("Details Successfully Updated !!!  ")</script>'; 
  
  }

$userid=$_SESSION["uid"];

if(isset($_GET['editprofile'])){
$_SESSION['editprofile']='1';

$query1=mysqli_query($con, "SELECT * FROM useraccount WHERE id='".$userid."'");  
$numrows1=mysqli_num_rows($query1); 
if($numrows1!=0)    
{    
     $row = $query1->fetch_assoc();

     $username=$row['username'];
     $useremail=$row['useremail'];
     $useruname=$row['useruname'];
     $userage=$row['userage'];
     $usercontact=$row['usercontact'];
     $useraddress=$row['useraddress'];
     $image=$row['image'];    
}
else{
   echo '<script type="text/javascript">alert("failed !!!")</script>';   
}
$con->close();

unset($_GET);
}


if(isset($_GET['uprofile'])){

    $_SESSION["uprofile"]="1";

    $query1=mysqli_query($con, "SELECT * FROM useraccount WHERE id='".$userid."'");  
    $numrows1=mysqli_num_rows($query1); 
    if($numrows1!=0)    
    {    
         $row = $query1->fetch_assoc();

         $username=$row['username'];
         $useremail=$row['useremail'];
         $useruname=$row['useruname'];
         $userage=$row['userage'];
         $usercontact=$row['usercontact'];
         $useraddress=$row['useraddress'];
         $image=$row['image'];    
    }
    else{
       echo '<script type="text/javascript">alert("failed !!!")</script>';   
    }
    $con->close();
    unset($_GET);
 }

 if(isset($_POST['update_user'])){ 

    $userage=$_POST['userage'];
    $usercontact=$_POST['usercontact'];  
    $useraddress=$_POST['useraddress'];
   
    $sql ="UPDATE useraccount  SET userage='$userage', usercontact='$usercontact' , useraddress='$useraddress' WHERE id='".$userid."'" ; 
    
    if ($con->query($sql)) {
        header('location: userprofile.php?Message2={"success"}&uprofile="1" ');
    }
    else{
    echo '<script type="text/javascript">alert("failed to update !!!\n Contact Admin Please ")</script>';
    }

    $con->close();
}

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

function formvalidation()
{
    
    var age= document.getElementById("t4").value;
    var contact= document.getElementById("t5").value;
    var address= document.getElementById("t6").value;

    let isnum = /^\d+$/.test(contact);

    if((age=='') || (contact=='') || (address ==''))
    {
        alert('please fill all the details !!!');
    }
   else if(age < 8 || age>75 ){
    
            alert('Please Enter Valid Age !!!\n Valid Range(8 to 75)');   
    }
    else if(contact.length < 10 || contact.length >10)
    {	                        
        alert(' Please Enter Valid Contact Number !!!\n Please Dont use any prefix(+91) ');
    }
    else if(!isnum){
        alert('contains alphabet');
    }
    else {
        return true;
    }
    
return false;
}
function clearFunc()
{
    document.getElementById("t1").value="";
    document.getElementById("t2").value="";
    document.getElementById("t3").value="";
    document.getElementById("t4").value="";
    document.getElementById("t5").value=""; return true;
}
        </script>
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
            <ul >
                
                <li><a href="userprofile.php?logout='1'  " style="color: red;">Logout</a></li>
                <li><a  href="myusersubscription.php?getcart='1'">Checkout</a></li>
                <li><a href="myusersubscription.php?getsport='1'">Sport</a></li>
                <li><a  href="myhomeuser.php">Home</a></li>
            </ul>
        </div>
    </div>

    <li style="text-color:red;"><b><i>Last-Login: <?php echo $_SESSION["lastlogin"] ?></i></b></li>



    <?php  if (isset($_SESSION["uprofile"])){ ?>
    	<h2 class="heading">Welcome <strong><?php echo $_SESSION['username']?></strong></h2>
    	
        <form name="userprofile" >
        
			<table cellspacing="2" align="center" cellpadding="8" border="0">
            <tr>       
            <td></td>       
            <td align="right">
               <?php   echo '<img style="border: 2px solid black;" height="125" width="125" src="data:image/png;base64,'.base64_encode($image).'" />'; ?>
            </td>
            </form>
            </tr>


			<tr>
			<td align="left">Name :</td>
			<td><input type="text" placeholder="Not Available" name="username" value="<?php echo $username?>" id="t1" readonly/></td>
            </tr>
			<tr>
			<td align="left">User ID :</td>
			<td><input type="text" placeholder="Not Available" name="useruname" value="<?php echo $useruname?>" id="t2" readonly /></td>
			</tr>
			<tr>
			<td align="left">User Email :</td>
			<td><input type="text"  placeholder="Not Available" name="useremail" value="<?php echo $useremail?>" id="t3" readonly /></td>
			</tr>

            <tr>
			<td align="left">User Age :</td>
			<td><input type="text" placeholder="Not Available" name="userage" value="<?php echo $userage?>" id="t4" readonly /></td>
			</tr>

            <tr>
			<td align="left">User Contact :</td>
			<td><input type="text"  placeholder="Not Available" name="usercontact" value="<?php echo $usercontact?>" id="t5" readonly /></td>
			</tr>

            <tr>
			<td align="left">User Address :</td>
			<td><input type="text"  placeholder="Not Available" name="useraddress" value="<?php echo $useraddress?>" id="t6" readonly /></td>
			</tr>

            <tr>
            <td></td>
            <td></td>
            <td><a href="userprofile.php?editprofile='1'"> <input style="color:blue ; background-color:orange; " type="button" name="edit_user" value="Edit"></a></td>
            </tr>

			</table>

            
			
		</form>
    <?php }  unset($_SESSION['uprofile'])?>


    <?php  if (isset($_SESSION["editprofile"])) {?>
    	<h2 class="heading">Welcome <strong><?php echo $_SESSION['username']?></strong></h2>
    	
    
			<table cellspacing="2" align="center" cellpadding="8" border="0">

            <tr>        
            <td>
            <form name="form2" method="post" action ="imageupload.php"  enctype="multipart/form-data" onsubmit="return imagevalidation" >
                <input type="file" name="uploadfile" required />
                <input type="submit" name="imageupload" id="k1" />
            </form>
            </td>       
            <td align="right">
            <?php   echo '<img style="border: 2px solid black;" height="125" width="125" src="data:image/png;base64,'.base64_encode($image).'"  alt="Not Uploaded Yet !!!" />'; ?>
            </td>
            
            </tr>


            <form name="form1" method="post" action ="userprofile.php"   onsubmit="return formvalidation()" >
			<tr>
			<td align="left">Name :</td>
			<td><input type="text" placeholder="Not Available" name="username" value="<?php echo $username?>" id="t1" readonly/></td>
			</tr>
			<tr>
			<td align="left">User ID :</td>
			<td><input type="text" placeholder="Not Available" name="useruname" value="<?php echo $useruname?>" id="t2" readonly/></td>
			</tr>
			<tr>
			<td align="left">User Email :</td>
			<td><input type="text"  placeholder="Not Available" name="useremail" value="<?php echo $useremail?>" id="t3" readonly/></td>
			</tr>

            <tr>
			<td align="left">User Age :</td>
			<td><input type="text" placeholder="Not Available" name="userage" value="<?php echo $userage?>" id="t4" /></td>
			</tr>

            <tr>
			<td align="left">User Contact :</td>
			<td><input type="text"  placeholder="Not Available" name="usercontact" value="<?php echo $usercontact?>" id="t5"/></td>
			</tr>

            <tr>
			<td align="left">User Address :</td>
			<td><input type="text"  placeholder="Not Available" name="useraddress" value="<?php echo $useraddress?>" id="t6" /></td>
			</tr>

            <tr>
            <td></td>
            <td></td>
            <td><input style="color:blue ; background-color:orange; " type="submit" name="update_user" value="Update" ></td>
            </tr>
			</table>

        </form>   	
    <?php } unset($_SESSION['editprofile']);?>		
</body>
</html>