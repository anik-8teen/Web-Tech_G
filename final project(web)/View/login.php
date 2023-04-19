
 
            <?php
                include 'header.php';
            ?>
      


      <?php
  $uname = $pass = $nameerr = $passerr =$er = "";
  $flg = true;
 
  if(isset($_POST["submit"]))  
  {  
    if(empty($_POST["uname"]))  
    {  
        $nameerr = "Name Required"; 
        $flg = false;
    }
    elseif(strlen($_POST["uname"])<2){
      $nameerr = "Name needs to have at-least 2 characters";
      $flg = false;
    }
    else {
      $uname = $_POST["uname"];
      if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
        $nameerr = "name not valid";
        $flg = false;
      }
    }
    if(empty($_POST["pass"])){
      $passerr  = "Password Required";
      $flg = false;
    }
    elseif(strlen($_POST["pass"])<8){
      $passerr = "Password must have at-least 8 characters";
      $flg = false;
    }
    elseif(!preg_match("/^(?=.*[^a-zA-Z0-9])*$/",$pass)){
      $passerr = "Password must contain at least one special character";
      $flg = false;
    }
    if(!empty($_POST["uname"]) && !empty($_POST["pass"])&& $flg){
      $umatch=$pasmatch="aa";
      $data = file_get_contents("data.json"); 
       $arr = json_decode($data);
       
      foreach($arr as $row){
        $un=$row->username;
        if($un==$uname)
        {
            $umatch="";
        }
        foreach($arr as $row2){
          $pd=$row2->password;
          if($pd==$pass)
          {
              $passmatch="";
          }
          
        }
        if(empty($umatch) && empty($passmatch))
        {
          session_start();
          $_SESSION['username'] = $uname;
          if(isset($_POST['remember']))
          {
                  setcookie("username", $uname, time() +60*60*7);
                  setcookie("password", $pass, time() +60*60*7);
                }
                header("location:NextPage.php");   
        }
        else{
          $er = "Invalid User Name Or Password!";
		  unset($_COOKIE["username"]);
		  unset($_COOKIE["password"]);
        }
      }

      }
    } 
   
?>
<html>
  <head>
    <style>
      body {
  background-image: url(login.jpg);
}
.rectangle {
  height: 150px;
  width: 450px;
  float:center;

  background-color: transparent;
}
    </style>
<script>  
		function validation(){  
		var name=document.myform.uname.value;  
		var password=document.myform.pass.value;  
		  
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
          
       
</script>  


  </head>
  <body>
    <br>
    <div align="center">
    <fieldset  class="rectangle"style="padding:30px; border:1px solid #4238ca; background:transparent;">
  <legend>LOGIN</legend>
    <form name="myform" onsubmit = "return validation()" method="post" >
  <br>
  <span><?php
		if (isset($msg)) {
			echo $msg;
		}

	 ?>	
 
  <table>
    <tr>
      <td>
      Username:
      </td>
      <td>
      <input type="text" name="uname"><span style="color: red;"onblur="checkName()" onkeyup="checkName()"><?php  echo $nameerr ?></span>
      </td>
    </tr>
    <tr>
      <td>
      Password:

      </td>
      <td>
      <input type="password"  name="pass"><span style="color: red;" onblur="checkPass()" onkeyup="checkPass()" ><?php  echo $passerr ?></span>
      <span><?php
		if (isset($msg)) {
			echo $msg;
		} ?>
    </td>
    </tr>
    <tr>
      <td><input type="checkbox" name="remember" value="er">remember me</td>
  </tr>
    <tr>
      
      <td>
      <input type="submit" name="submit" value="submit">
      </td>
      
      <td>
        <a href = "fgot.php">Forgot Password?</a>

      </td>
    </tr>
  </table>
  </form>
  <h3> <span style="color:  #FF0000"> <?php echo $er ?> </span> </h3><br>
</form>
</fieldset>
</div>
<div class = "footer">
            <?php
                include 'footer.php';
            ?>
        </div>
  </body>
</html>