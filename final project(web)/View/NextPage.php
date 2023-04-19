<?php
    include 'header2.php';

    


?>
<?php
$uname =""; 

if(isset( $_SESSION['username']))
{
    $uname = $_SESSION['username'];
}
if(empty($uname))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
.city {
  background-color: tomato;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
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
body {
  background-image: url(tr.webp);
}
.rectangle {
  height: 450px;
  width: 180px;
  float:center;

  background-color: transparent;
}

div {
  border: 1px solid gray;
  padding: 8px;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}


</style>
</head>
<body>

<div align="Right" >
<h1><p style="color:blue;">WELCOME TO ADMIN PAGE</p></h1
</div>
<div align="left" class="btn-group">
  <fieldset class="rectangle">

  <legend><h3>Admin Panel</h3></legend>
  <a href="profile.php" >
  <button type="button"class='button'name="profile">View Profile</button>
  </a>
<a href="loaduser.php"><button type="button"class='button'name="Users">Manage Users</button>
   
<a href="data_view.php"><button type="button"class='button'name="Customer View">Customer View</button>
    </a>
    <a href="hotelm.php">
    <button type="button" class='button'name="tourpackages" value="">Tour packages</button> 
</a>
    <button type="button"class='button'name="Manage Bookings">Manage Bookings</button>
    
    </form>
    </fieldset>
    

<div class = "footer">
    <br><br><br><br><br>
            <?php
                include 'footer.php';
            ?>
        </div>
</body>
</html>

