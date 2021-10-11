<?
include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarticles</title>
    <style>
body
    {
        display: flex;
        flex-direction: column;
        justify-content:center;
      
        background-repeat: no-repeat;
        background-size:100%;
	    margin:0px;
	    background-color:seagreen;
	    color:#f9fcf5;
	    font-family:Arial, Helvetica, sans-serif;
    }
    
 #main{
     width:600px; 
     height:auto; 
     overflow:hidden; 
     padding-bottom:20px; 
     margin-left:auto; 
     margin-right:auto; 
     border-radius:5px; 
     padding-left:10px; 
     margin-top:100px; 
     border-top:3px double #f1f1f1; 
     border-bottom:3px double #f1f1f1; 
     padding-top:20px;
     background-color: cadetblue;
 }
    
#main table{
    font-family:"Comic Sans MS", cursive;
    background-color: cadetblue;
}
    /* css code for textbox */
#main .tb{
    height:28px; 
    width:230px; 
    border:1px solid #f26724; 
    color:#fd7838; 
    font-weight:bold; 
    border-left:5px solid #f7f7f7; 
    opacity:0.9;
}
    
#main .tb:focus{
    height:28px; 
    border:1px solid #f26724; 
    outline:none; 
    border-left:5px solid #f7f7f7;
}

    /* css code for button*/
#main .btn{
    width:150px; 
    height:32px; 
    outline:none;  
    color:#f7f7f7; 
    font-weight:bold; 
    border:0px solid #f26724; 
    text-shadow: 0px 0.5px 0.5px #fff; 
    border-radius: 2px; 
    font-weight: 600; color: #f26724; 
    letter-spacing: 1px; 
    font-size:14px; 
    background-color:#f1f1f1; 
    -webkit-transition: 1s; 
    -moz-transition: 1s; 
    transition: 1s;
}
  
#main .btn:hover{
    background-color:#f26724; 
    outline:none;  
    border-radius: 2px; 
    color:#f1f1f1; 
    border:1px solid #f1f1f1;
    -webkit-transition: 1s; 
    -moz-transition: 1s; 
    transition: 1s; 
}

.already{
    margin-left:30%;
    margin-right: 30%;
    box-sizing: border-box;
    box-shadow: 4px 4px 4px solid black;
    background-color: cornsilk;
    color:black;
    text-align: center;
    box-shadow: 0 8px 16px rgba(0,0,0,.3);
}

.already .btn{
        transform: translateX(-150%);
        width: 120px;
        height:34px;
        border: none;
        outline: none;
        background: rgb(55, 235, 49);
        cursor:pointer;
        font-size: 20px;    
        color: aliceblue;
        margin-left: 30vw;
    }
    </style>
<script>
    function clearFunc()
{
    document.getElementById("t1").value="";
    document.getElementById("t2").value="";
    document.getElementById("t3").value="";
    document.getElementById("t4").value="";
    
}
</script>



</head>
<body>

<form name="form1" method="post" action ="addarticles.php">
			<div id="main">
				<div class="h-tag">
					<h2>Download articles</h2>
				</div>
			<div class="login">
			<table cellspacing="2" align="center" cellpadding="8" border="0">
		
			<td align="right">Select Article File(text) :</td>
			<td>
            <form name="form2" method="post" action ="addarticles.php"  enctype="multipart/form-data" >
                <input type="file" name="uploadfile" required />
                <input type="submit" value="Download" name="articleupload" id="k1" />
            </form>
            </td>
            </table>


			</table>


</body>
</html>