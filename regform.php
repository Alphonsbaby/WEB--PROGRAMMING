
 <?php

$servername = "localhost";
$username = "20mca010";
$password = "2348";
$dbname = "20mca010";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

$name =$_POST['txtname'];
$rollno = $_POST['txtr_no'];
$address = $_POST['add'];
$mark = $_POST['mark'];
$sql = "INSERT INTO getdata (name,rollno,address,mark)
values('$name','$rollno','$address','$mark')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
}
 else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($conn);
?>
</body>