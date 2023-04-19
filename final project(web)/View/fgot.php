<?php
    include 'header.php';
?>
<?php
$emailErr = $er = "";
$em = "";

if(isset($_POST['submit']))
{
	$em = $_POST['email'];
	if(empty($em))
	{
	   $emailErr = "Please enter your E-mail.";
	}
	else {  
	if(!filter_var($em, FILTER_VALIDATE_EMAIL))
	{ 
	   $emailErr ="Invalid email format. Please re-enter your E-mail.";
	}
	else
	{
       $match = "jb";
       $info = file_get_contents("data.json");
       $info = json_decode($info);
       foreach($info as $Info) 
	   {
          $un = $Info-> email;
          if($un == $em)
		  {
            $match = "";
          }
        }
        if(empty($match))
		{
           $er = "A code has been sent on your E-mail.";
        }
        else
		{
          $er = "Sorry! We haven't find any account with this E-mail.";
        }
    }
	}
}
?>
<html>
    <head>
    <style>
              body {
  background-image: url(home12.webp);
}
        </style>
    </head>
    <body>
<br><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <fieldset>
  <legend>
   <b><h3> FORGOT PASSWORD </h3></b>
  </legend> 
    <label for="email"> Enter E-mail: </label>
	<input type="text" id="email" name="email">
    <span style="color: #FF0000"> <?php echo $emailErr?></span> <br>
    <span class="underline">  </span>
	<br> <br>
	<input type="submit" name="submit" value="Submit">
	<br> <br>
 </fieldset>
</form>
</body>
</html>
<?php
    include 'footer.php';
?>