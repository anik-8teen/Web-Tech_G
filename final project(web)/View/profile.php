<!DOCTYPE html>
<html>
<?php
$name = $email = $gender = $dob = $dp = ""; 
$uanme = "";
 include 'header2.php';

if(isset( $_SESSION['username']))
{
	$uname = $_SESSION['username'];
}
if(empty($uname))
{
    header("location:login.php");
}
      $info = file_get_contents("data.json");
      $info = json_decode($info);
      foreach ($info as $Info) 
	  {
          $un = $Info-> username;
          if($un==$uname)
		  {
            $name = $Info-> name;
            $email = $Info-> email ;
            $gender = $Info-> gender ;
            $dob =$Info-> dob ;
		
          }
       }
?>

<head>
  <title>VIEW PROFILE</title>
    <style>
   .column {
	float: left;
    width: 28%;
    padding: 1%;
    height: 400px; 
	}
   .column2 { 
	float: left;
	width: 68%;
	padding: 1%;
	height: 450px; 
	}
	h3 {
	font-size: 25px;
	}
	h4 {
	font-size: 20px;
	}
	div {
    display: block;
	margin-bottom: auto;
	margin-left: auto;
	margin-right: auto;
	}
    body {
  background-image: url(t);
}
.rectangle {
  height: 450px;
  width: 180px;
  float:center;

  background-color:magenta;
}
   
.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
}

.btn-group .button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
    </style>
</head>

<body>
 

    


<form action="F2.php" method="post">
<div class="column2">
<fieldset class="rectangle">
    <legend> <b><h3> PROFILE </h3></b>
	</legend>
	<div style="float:right">
    <img src="profile.jpg"<?php echo $dp?>" width="200" height="180"> <br>
    <a href =""> Change </a> <br> <br>
	</div>
 <?php
      echo "<b>Name</b>: " . $name; echo "<br>";
	  echo " _________________________________________________________________________________<br>";
	  echo "<b>E-mail</b>: " . $email; echo "<br>";
	  echo " _________________________________________________________________________________<br>";
      echo "<b>Gender</b>: " . $gender; echo "<br>";
	  echo " _________________________________________________________________________________<br>";
      echo "<b>Date of Birth:</b> " . $dob; echo "<br>";
	  echo " _________________________________________________________________________________ <br>";
 ?>
   <br> <br>
</fieldset>
</form>
<div align="center"><a href="NextPage.php"><button type="button" class='button'>BACK </button></a></div>
<?php include 'footer.php';?>
</div>


</body>

</html>