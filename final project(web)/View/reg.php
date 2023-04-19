
<?php
include 'header.php';
  if(isset($_POST['submit'])){
    if($_POST['name']!="" && $_POST['uname']!="" && $_POST['nid']!="" && $_POST['pass']!="" && $_POST['repass']!="" && $_POST['email']!=""){
      include "../Controller/createCustomer.php";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>  
           <title>Register</title>  
           <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      
      
           body {
  background-image: url(home11.webp);
}
    
    



    </style>
  </head>
  <script>  
		function validation(){  
		var name=document.signup.name.value;  
		var password=document.signup.pass.value;  
		  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;  
		}else if(password.length<6){  
		  alert("Password must be at least 6 characters long.");  
		  return false;  
		  }  
		}
		function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
			  	document.getElementById("name").style.borderColor = "black";

			}
			
        }
        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("password").style.borderColor = "red";
			}else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("password").style.borderColor = "black";
			}
        }
          
        function checkMail(){
        	if (document.getElementById("email").value == "") {
			  	document.getElementById("mailErr").innerHTML = "email rquired";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
				document.getElementById("mailErr").innerHTML = "";
			  	document.getElementById("email").style.borderColor = "black";
			}
        }
</script>  

</head>
<body>
    <div class="main-block">
      <h1 style="text-align: center;">Register</h1>
      <form name="signup" align='center' onSubmit="return validation();" class="container" method="POST">
        <p class="lbl">
          Name
        </p>
        <input id="nm" class = "fld" type="text" onblur="checkName()" onkeyup="checkName()" name="name" placeholder="Enter your name"><br>
        <p id="nameerr" style="color: red;"></p>
        <p class="lbl">
          Username
        </p>
        <input id="unm" class = "fld" type="text" onblur="checkuname()" onkeyup="checkuname()" name="uname" placeholder="Enter your username"><br>
        <p id="unameerr" style="color: red;"></p>
        <p class="lbl">
          Email
        </p>
        <input id="em" class = "fld" type="text" onblur="checkemail()" onkeyup="checkemail()" name="email" placeholder="Enter your email"><br>
        <p id="emailerr" style="color: red;"></p>
        <p class="lbl">
          NID
        </p>
        <input id="ni" class = "fld" type="number"  onblur="checknid()" onkeyup="checknid()" name="nid" placeholder="Enter your NID"><br>
        <p id="niderr" style="color: red;"></p>
        <p class="lbl">
          Password
        </p>
        <input id="ps"class = "fld" type="password" name="pass" onblur="checkpass()" onkeyup="checkpass()"  placeholder="Enter your password"><br>
        <p id="passerr" style="color: red;"></p>
        <p class="lbl">
          Confirm Password
        </p>
        <input id="rps" class = "fld" type="password" name="repass" placeholder="re-enter password"><br>
        <p id="repasserr" style="color: red;"></p>
        <input class="btn1" type="submit" name="submit" value="Create Account"> <br>
      </form>
    </div>
</body>
</html>