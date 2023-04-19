<?php
require_once 'data_connect.php';
function login($username, $password)
	{
		$con = getConnection();
		$sql = "select * from customer where c_uname='{$username}' and c_password='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

    ?>