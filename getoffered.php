<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egyptstreetbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT description,category,state FROM thing";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
         echo"<h1 style=color:lightblue>What's in your neighbourhood? </h1>";
         echo'<hr>';
     while($row = $result->fetch_assoc()) {
         echo '<div style="margin-top:0px"><img src="imgs/box.jpg" size alt="icon"  style="width:80px;height:80px;" /></div>';
         echo "<pre> ". $row["description"]."</pre>";
          echo'<i class="material-icons">more</i>';
         echo"". $row["category"]."";
         echo'<br>';
         echo'<span class="glyphicon glyphicon-gift"></span>';
         echo"". $row["state"]."";
         echo'<br>';
         echo '<i class="material-icons">&#xe0c8;</i>WITHIN 100 METERS';
         echo'<hr>';
  }
} else {
     echo "0 results";
}



$sql = "SELECT description,category,state FROM skill";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo '<div style="margin-top:0px"><img src="imgs/box.jpg" size alt="icon"  style="width:80px;height:80px;" /></div>';
         echo "<pre> ". $row["description"]."</pre>";
          echo'<i class="material-icons">more</i>';
         echo"". $row["category"]."";
         echo'<br>';
         echo'<span class="glyphicon glyphicon-gift"></span>';
         echo"". $row["state"]."";
         echo'<br>';
         echo '<i class="material-icons">&#xe0c8;</i>WITHIN 100 METERS';
         echo'<hr>';
  }
} else {
     echo "0 results";
}


$conn->close();
?>  

</body>
</html>