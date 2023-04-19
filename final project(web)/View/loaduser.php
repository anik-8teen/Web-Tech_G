<?php
    include 'header2.php';
   
?>

<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     <style>
        body {
  background-image: url(home12.webp);
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
        </style>
     
        </head>  
      <body>  
        <BR> 
        <BR>
        <legend align="center"><b>REGISTERED USER DETAILS</b></legend>
        <BR>
        <div class="container" style="background-color:aliceblue;padding:25px;width:800px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered" id="customers">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                              
                                   echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                              
                                
                          }  
                         
                          ?>  
                     </table>  
                   </div>
                 </div>
                 <br>
                 <div align="center"><a href="NextPage.php"><button type="button" class="button">BACK </button></a></div>

                 <?php
               
    include 'footer.php';
   
?>  
      </body>  
 </html>  