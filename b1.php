<?php
$Hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "bootstrap";

$text = $_POST['name'];
$country=$_POST['country'];

if(!empty($_POST['interest'])){
foreach($_POST['interest'] as $selected){
}
}
$conn = new mysqli($Hostname, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "INSERT INTO boots (text,check1,many)
VALUES ('$text','$country','$selected')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





         

  

 mysqli_close($conn);

?>