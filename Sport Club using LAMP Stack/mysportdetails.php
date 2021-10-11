
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="myhome.css"/>
    <style>
            .mimage{
                width:100%;
                height:500px;
            }
            p{
                    font-size: 50px;;
            }
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
<body class="main">


<div>
        <h1 class="heading">Sport_Details</h1>
        
        <div>
                 <img  class="mimage" src="images/football.jpeg" />
        </div>
        <div>
                 <p>We are top club in foootball</p>

                 <table cellspacing="2" align="center" cellpadding="8" border="0">
			<tr><th></th><th>Timing</th><th></th></tr>

                        <tr>
                            <td>MON-FRIDAY</td> 
                            <td>7:00 AM</td>   
                            <td>1:00 PM</td>   
                        </tr>
                        <tr>
                            <td>SAT-SUNDAY</td> 
                            <td>7:00 AM</td>   
                            <td>7:00 PM</td>   
                        </tr>
		</table>
        </div>  
</div>


</body>
</html>