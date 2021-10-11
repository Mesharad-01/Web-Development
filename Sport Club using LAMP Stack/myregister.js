function formvalidation()
{

    var name= document.getElementById("t1").value;
    var email= document.getElementById("t2").value;
    var uname= document.getElementById("t3").value;
    var pwd= document.getElementById("t4").value;			
    var cpwd= document.getElementById("t5").value;
    
    //email id expression code
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[a-zA-Z ]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if(name=='')
    {
        alert('Please enter your name !!!');
    }
    else if(!letters.test(name))
   {
        alert('Name field required only alphabet characters !!!');
    }
    else if(email=='')
    {
        alert('Please enter your email id !!! ');
    }
    else if (!filter.test(email))
    {
        alert('OOps Invalid email !!!');
    }
    else if(uname=='')
    {
        alert('Please enter the user name. !!! ');
    }
    else if(pwd=='')
    {
        alert('Please enter Password');
    }
    else if(cpwd=='')
    {
        alert('Enter Confirm Password');
    }
    else if(!pwd_expression.test(pwd))
    {
        alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
    }
    else if(pwd != cpwd)
    {
        alert ('Password in both field is not Matched !!! ');
    }
    else if(document.getElementById("t5").value.length < 6)
    {
        alert ('Password minimum length is 6');
    }
    else
    {				                            
           return true ;
    }

    return false;
}
function clearFunc()
{
    document.getElementById("t1").value="";
    document.getElementById("t2").value="";
    document.getElementById("t3").value="";
    document.getElementById("t4").value="";
    document.getElementById("t5").value="";
}

