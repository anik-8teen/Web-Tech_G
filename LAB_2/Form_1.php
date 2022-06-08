<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
$name = $email =$gender =$date= $degree = $bloodgroup="";
$nameErr =$degreeErr = $dateErr = $emailErr = $genderErr = $bloodgroupErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = $_POST["name"];
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = $_POST["email"];
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = $_POST["gender"];
      }


    }
?>

<h2>PHP Form </h2>

<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
<br><br>

</fieldset>
  <br><br>
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  EMAIL: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <?php echo $email;?>
</fieldset>
  <br><br>
<fieldset>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime" value=" <?php echo $date ?>">
  <span class="error">* <?php echo $dateErr;?></span>
  
</fieldset>
</form>
<br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>

<b>Gender:</b><br>
<ul><input type="radio" id='radio_1'name="radio1"value="<?php if (isset($gender) && $gender=="male") echo "checked";?>"><label for="male">Male</label>
<input type="radio" id='radio_2'name="radio1" value="<?php if (isset($gender) && $gender=="female") echo "checked";?>"><label for="female">Female</label>
<input type="radio" id='radio_1' name="radio1" value="<?php if (isset($gender) && $gender=="others") echo "checked";?>"><label for="others">others</label>
<span class="error">* <?php echo $genderErr;?></span>
</ul>
</fieldset>  
</form>   
<br>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>

<b>Degree:</b><br>
  <input type="checkbox" id='CHECK_1'name="check_box1" value="<?php echo $degree;?>"><label for="male">SSC</label>
<input type="checkbox" id='CHECK_2'name="check_box2" value="<?php echo $degree;?>"><label for="female">HSC</label>
<input type="checkbox" id='CHECK_3' name="check_box3" value="<?php echo $degree;?>"><label for="others">BSC</label>
<input type="checkbox" id='CHECK_4' name="check_box4" value="<?php echo $degree;?>"><label for="others">MSC</label>
<span class="error">* <?php echo $degreeErr;?></span>
</fieldset>  
</form>     
<br>
  <fieldset>
<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  BLOOD GROUP: 
  <select name="gender" id="gender" >
  <option value=""></option>
  <option value="<?php echo $bloodgroup;?>">A+</option>
  <option value="<?php echo $bloodgroup;?>">B+</option>
  <option value="<?php echo $bloodgroup;?>">AB+</option>
  <option value="<?php echo $bloodgroup;?>">A-</option>
  <option value="<?php echo $bloodgroup;?>">O-</option>
</select>
<span class="error">* <?php echo $bloodgroupErr;?></span>
</fieldset>
<br>
<input type="submit" name="submit" value="Submit">
</fieldset>

<p>OUTPUT:</p><BR><br>
<?php echo $name ."<br>"; 
echo $email;
?>
</body>
</html>