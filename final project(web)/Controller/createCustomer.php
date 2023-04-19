<?php
require_once '../Model/registration.php';

    $data['name'] = $_POST['name'];
    $data['uname'] = $_POST['uname'];
    $data['nid'] = $_POST['nid'];
    $data['pass'] = $_POST['pass'];
    $data['email'] = $_POST['email'];

  if (addcmr($data)) {
  	echo "<script type=\"text/javascript\">
    document.write('Account created Successfully'); window.location = '../View/Home.php';
    </script>";
  }
?>