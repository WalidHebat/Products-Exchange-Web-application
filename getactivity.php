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

$sql = "SELECT description,category,state FROM request";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
         echo"<h1 style=color:lightblue>Your Neighbours' activity</h1>";
         echo'<hr>';
         echo "<h3>There is no new activities for your neighbours in your area</h3>";
     while($row = $result->fetch_assoc()) {

  }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>