<?php
include('session.php');
include('connection.php');

$userid=$_SESSION["uid"];   

if(isset($_POST['imageupload'])){ 

    $msg = '';

        $image = $_FILES['uploadfile']['tmp_name'];
        $img = file_get_contents($image);
        //$sql = "INSERT INTO img (image) values(?)";
        $sql = "UPDATE useraccount  SET image=? WHERE id='$userid'  ";
    
        $stmt = mysqli_prepare($con,$sql);
    
        mysqli_stmt_bind_param($stmt,"s",$img);
        mysqli_stmt_execute($stmt);
    
        $check = mysqli_stmt_affected_rows($stmt);
        if($check==1){
            $msg = 'Image Successfullly uploaded';
        }else{
            $msg = 'Error uploading image';
        }
        
          header('location: userprofile.php?Message1="'.$msg.'" & uprofile="1" ');
    
    $con->close();
}
?>