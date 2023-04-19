<?php
require_once 'data_connect.php';

    

function addcmr($data){
	$conn = db_conn();
    $selectQuery = "INSERT into customer (c_name,c_uname,c_nid,c_password,c_email)
    VALUES (:name, :uname, :nid, :pass, :email)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
          ':uname' => $data['uname'],
          ':nid' => $data['nid'],
          ':pass' => $data['pass'],
          ':email' => $data['email'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function customerlog($data)
{
  $conn = db_conn();
  $selectQuery = "select c_password from customer where c_uname = :uname";
  try{
    $stmt = $conn->prepare($selectQuery);
    $stmt->execute([
      ':uname' => $data['uname']
    ]);
  }
    catch(PDOException $e){
      echo $e->getMessage();
    }
}
?>