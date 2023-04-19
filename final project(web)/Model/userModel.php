<?php 
	require('db.php');

    function authentication()
{
	   
  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

}

	function login($username, $password)
	{
		$con = getConnection();
		$sql = "select * from  where username='{$username}' and password='{$password}'";
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

	function registration($name, $email, $username, $password, $address, $phoneNo, $hiredate, $gender)
	{
		$con = getConnection();
        $sql = "insert into registration  values( NULL, '$name', '$email', '$username', '$password', 
		'$address', '$phoneNo', '$hiredate', '$gender', ' ')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function usernameExists($username)
	{
		$con = getConnection();
		$sql = "select * from instructors where username='{$username}'";
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

	function emailExists($email)
	{
		$con = getConnection();
		$sql = "select * from instructors where email='{$email}'";
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



	function showData($id){
		$conn = db_conn();
		$selectQuery = "SELECT `c_id`, `c_name`, `c_uname`, `c_nid`, `c_password`, `c_email` FROM `customer` WHERE c_id=?";
	
		try {
			$stmt = $conn->prepare($selectQuery);
			$stmt->execute([$id]);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
		return $row;
	}
?>