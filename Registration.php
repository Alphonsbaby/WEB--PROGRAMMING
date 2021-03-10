<html>
<head>
<title>general form</title>
</head>
<body bgcolor="aakk">
<form action = "<?php $_PHP_SELF ?>" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Gender:
<input type = "text" name = "txtgen">
<br><br>

Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancle">
</form>
</body>
</html>

<?php
if(isset($_POST["insert"]))
 {
$servername = "localhost";
$username = "20mca010";
$password = "2348";
$dbname = "20mca010";

$con = mysqli_connect($servername, $username, $password, $dbname);

$name =$_POST["txtname"];
$rollno = $_POST["txtr_no"];
$gender =$_POST["txtgen"];
$address = $_POST["add"];
$insert = "INSERT INTO studinfo (name,rollno,gender,address) values('$name','$rollno','$gender','$address');";
echo $insert;
if (mysqli_query($con, $insert)) {
  echo "New record created successfully";
}
 else 
{
  echo "Error: " . $insert . "<br>" . mysqli_error($con);
}
/*
$sql = "SELECT * from studinfo";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
echo "<table border = '1'>
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Gender</th>
<th>Address</th>
</tr>";
  while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['gen']."</td>";
echo "<td>".$row['address']."</td>";
echo "</tr>";

}
echo "</table>";
   
} else {
  echo "0 results";
}
*/
?>