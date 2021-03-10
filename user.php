
<html>
<head>
<title>PHP code to retrieve and update data from MySQL database</title>
</head>
<body >
<form action ="" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Email id.:
<input type = "text" name = "txtr_em">
<br><br>
Mobile:
<input type = "text" name = "txt_mob">
<br><br>

<b><input type = "submit" name = "btnInsert" value = "Save">
<input name="btnselect" type="submit" id="select" value="View"> 
</form>
</body>
</html>
<?php
include_once 'db.php';
if(isset($_POST["btnInsert"]))
 {
$name =$_POST["txtname"];
$email = $_POST["txtr_em"];
$mobile =$_POST["txt_mob"];
$ins = "INSERT INTO users (name,email,mobile) values('$name','$email','$mobile');";
 if (mysqli_query($conn, $ins))
{
  echo "New record created successfully";
}
 else 
{
  echo "Error: " . $ins . "<br>" . mysqli_error($conn);
}
}

  if(isset($_POST["btnselect"]))
  {
  $sql = "SELECT * from users";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {

   ?>
<table>
<tr>
<td>Name</td>
<td>Email id</td>
<td>Mobile</td>
<td>Action</td>
<td>Action</td>
</tr>
  <?php
//$i=0;
  while($row = mysqli_fetch_array($result)) 
  {
  ?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><a href="update-action.php?userid=<?php echo $row["id"]; ?>">Update</a></td>
<td><a href="delete-action.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php
//$i++;
}
?>
</table>

<?php
}
else
{
echo "No result found";
}
  }
?>




