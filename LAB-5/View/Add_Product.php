<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "Nav.php";

     ?>
<fieldset>

 <form action="../Controller/ADD_product.php" method="POST" enctype="multipart/form-data">
  <label for="name">Product Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">Selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br><br>
  <input type="submit" name = "addProduct" value="Add">
  
</form> 
</fieldset>
</body>
</html>