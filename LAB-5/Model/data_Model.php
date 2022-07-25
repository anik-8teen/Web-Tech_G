<?php 

require_once 'db_connect.php';

function Add_product($data){
	$conn = db_conn();
    $selectQuery = "INSERT into product_details(Name,buying_Price, sell_Price)
VALUES (:name, :buyingprice, :sellingprice)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':buyingprice' => $data['buyingprice'],
        	':sellignprice' => $data['sellingprice']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
?>