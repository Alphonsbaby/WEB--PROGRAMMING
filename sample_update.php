<html>
<head>
<title>Update a Record in MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['update']))
{
$conn = mysqli_connect("localhost","rinu","rinu","rinu");
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

$emp_id = $_POST['emp_id'];
$emp_salary = $_POST['emp_salary'];

$sql = "UPDATE employee SET Age = $emp_id  WHERE Age = 43";     

$retval = mysqli_query( $conn,$sql );
if(! $retval )
{
  die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="emp_id" type="text" id="emp_id"></td>
</tr>
<tr>
<td width="100">Employee Salary</td>
<td><input name="emp_salary" type="text" id="emp_salary"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>