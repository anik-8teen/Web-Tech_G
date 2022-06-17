<?php 
  session_start();
  $currentPass = $_SESSION["pass"];
  $ckPasser = $newPasser = $repasser = $msg = "";

  if(isset($_POST["submit"])){
    if(empty($_POST['ckpass'])){
      $ckPasser = "Old password required";
    }
    elseif(!$_POST['ckpass'] == $currentPass){
      $ckPasser = "Incurrect Old password";
    }
    if(empty($_POST['npass'])){
      $newPasser = "Required";
    }
    elseif($_POST['npass']==$currentPass){
      $newPasser = "Entered password is same as old password";
    }
    if(empty($_POST['repass'])){
      $repasser = "Required";
    }
    elseif(!$_POST['npass']==$_POST['repass']){
      $repasser = "Password miss-match";
    }
    else{
      $msg = "Password Successfully Changed";
    }
  }
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <table>
    <tr>
      <td>
        Enter Current Password
      </td>
      <td>
        <input type="password" name="ckpass"><span style="color: red;"><?php  echo $ckPasser ?></span>
      </td>
    </tr>
  <tr>
    <td>
      Enter New Password
    </td>
    <td>
      <input type="password" name="npass"><span style="color: red;"><?php  echo $newPasser ?></span>
    </td>
  </tr>
  <tr>
    <td>
      Re-enter Password
    </td>
    <td>
      <input type="password" name="repass"><span style="color: red;"><?php  echo $repasser ?></span>
    </td>
  </tr>
  </table>
<input type="submit" name="submit" value="submit"><span style="color: green;"><?php  echo $msg ?></span>
</form>