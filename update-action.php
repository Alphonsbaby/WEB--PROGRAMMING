<?php

include 'db.php';
//echo $_GET['userid'];


 $sql = "SELECT * FROM users WHERE id='" . $_GET['userid'] . "'";
 $result = mysqli_query($conn, $sql);
  
  //if (mysqli_num_rows($result) > 0) {
//$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['userid'] . "'");
//echo $result;
//$row= mysqli_fetch_array($result);
 if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result)) 
  {
  ?>


<html>
<head>
</head>
<body>
<h2>Update Record</h2>
<p>Please edit the input values and submit to update the record.</p>
<form action="" method="post">

<label>Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">


<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">


<label>Mobile</label>
<input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">

<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit" name="btnupdate">
<a href="users.php" class="btn btn-default">Cancel</a>
<?php
}
?>

<?php
}
else
{
echo "No result found";
}
?>
</form>
<?php
if(isset($_POST["btnupdate"]))
 {
//$update = "UPDATE studinfo SET rollno='9' WHERE rollno='3'";
mysqli_query($conn,"UPDATE users set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");

$message = "Record Modified Successfully";
}

//if(count($_POST)>0)
	//{
//mysqli_query($conn,"UPDATE users set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");

//$message = "Record Modified Successfully";
//}

//}
?>

</body>
</html>