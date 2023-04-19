<?php


?>
<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "ajax_info.txt");
  xhttp.send();
}
</script>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div  class="about-section">
  <h1>Project outcome</h1>
  <p>Through this project, it was possible to help the users to save their valuable time and provide the best possible offer in a single place and users were able to check if they were getting actual prices and discounts or not. It also prohibited the hotel and car owners from charging extra money from the user. 
In this application, it was tried to promote electric cars and CNG-driven cars so that there was a clean and safe environment for the future generation.
.</p>

</div>

<h2 style="text-align:center">Our Team</h2>
<div align="center">
<div class="row" >
  <div class="column">
    <div class="card">
      <img src="my.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Mehedi hasan Anik</h2>
        <p class="title">Project Partner</p>
        <div id="demo">
        <p><button class="button" onclick='loadDoc()'>Contact</button></p>
        </div>
      </div>
    </div>
  </div>

</div>  

</body>
</html>