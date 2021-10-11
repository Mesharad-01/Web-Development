<?php   
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


include('connection.php');

if(isset($_POST['register_user'])){    
  
    $username=$_POST['username'];   
    $useruname=$_POST['useruname'];  
    $userpassword=$_POST['userpassword']; 
    $useremail=$_POST['useremail'];    

	    
    $query1=mysqli_query($con, "SELECT * FROM useraccount WHERE useruname='".$useruname."'");  
    $numrows1=mysqli_num_rows($query1); 

    $query2=mysqli_query($con, "SELECT * FROM useraccount WHERE useremail='".$useremail."'");  
    $numrows2=mysqli_num_rows($query2); 


    
    if($numrows1!=0)    
    {    
        echo '<script type="text/javascript">alert("That username already exists! Please try again with another one.")</script>';   
    }
    else if($numrows2!=0){
        echo '<script type="text/javascript">alert("This Email is already exists! Please try again with another one.")</script>';   
    }
    else{
        $userpassword = md5($userpassword);
        $sql="INSERT INTO useraccount(username,useremail,useruname,userpassword) VALUES('$username','$useremail','$useruname','$userpassword')";    
        
        $result=mysqli_query($con, $sql);    
        if($result){    
        echo '<script type="text/javascript">alert("Account Successfully Created !!!!")</script>';
        } else {    
        echo '<script type="text/javascript">alert("failed to insert contact admin !!!!")</script>';
        }  

    }
    $con->close();
} 

if (isset($_POST['login_user'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];

        $password = md5($password);
      
        $query1=mysqli_query($con, "SELECT * FROM useraccount WHERE (useremail='".$username."' OR useruname='".$username."') AND userpassword='".$password."'");  
        $numrows1=mysqli_num_rows($query1); 


        if ($numrows1==1) {
            date_default_timezone_set('Asia/Kolkata');
            $date = date('d-m-y h:i:s');
           

            $row = $query1->fetch_assoc();
            $_SESSION['uid'] = $row["id"] ;
            $_SESSION['username'] = $row["useruname"] ;
            $_SESSION['success'] = 1;
            $_SESSION['lastlogin']=$date;



            $sqld="UPDATE useraccount  SET last_login='".$date."' WHERE id='".$row["id"]."'" ; 


            header('location: myhomeuser.php');

        }else {

         echo '<script type="text/javascript">alert("Enter Correct Username or Password !!!!")</script>';

        }
        $con->close();
    }
 
?>    



