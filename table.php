<?php
$servername = "localhost";
$username = "20mca010";
$password = "2348";
$dbname = "20mca010";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from mylist";
$sldt = mysql_query($conn,$query);
if(!$sldt)
{
 die("data not selected".mysql_error());
}
echo "<table border='1'>
<tr>
<th>ID</th>
<th>FName</th>
<th>Lname</th>
</tr>";
while($row = mysql_fetch_array($sldt))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lname']."</td>";
echo "</tr>";
}

echo "</table>";
?>