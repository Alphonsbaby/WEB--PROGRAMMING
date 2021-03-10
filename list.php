<?php
$servername = "localhost";
$username = "20mca010";
$password = "2348";
$dbname = "20mca010";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mylist (fname, lname)
VALUES ('John', 'Doe');";
$sql .= "INSERT INTO mylist (fname, lname)
VALUES ('Mary', 'Moe');";
$sql .= "INSERT INTO mylist (fname, lname)
VALUES ('Julie', 'Dooley')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>