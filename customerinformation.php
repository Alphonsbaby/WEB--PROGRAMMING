<html>
<head>
<title>display data in table format</title>
</head>
<body>
 <?php
$servername = "localhost";
$username = "20mca010";
$password = "2348";
$dbname = "20mca010";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
echo "<table border = '1'>
<tr>
<th>C_No</th>
<th>C_Name</th>
<th>Item_Purchased</th>
<th>Mob_no</th>
</tr>";
  while($row = mysqli_fetch_assoc($result))
{
 echo "<tr>";
 echo "<td>".$row["id"]."</td>";
 echo "<td>".$row["name"]."</td>";
 echo "<td>".$row["item"]."</td>";
 echo "<td>".$row["mobile"]."</td>";

 echo "</tr>";
}
echo "</table>";
   
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>