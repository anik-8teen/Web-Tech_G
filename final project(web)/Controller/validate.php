
<script>  
		function validateform(){  
		var name=document.signup.name.value;  
		var password=document.signup.pass.value;  
		var email=document.signup.email.value;  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;  
		}
		else if(email==null || email==""){  
		  alert("email cant be empty.");  
		  return false;  
		  } 
		
		else if(password.length<6){  
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
        	if (document.getElementById("pass").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("pass").style.borderColor = "red";
			}else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("pass").style.borderColor = "black";
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
