<html>
<head>
<title>Login</title>
</head>
<body>
<?php
// Check if username and password are correct
if ($_POST["username"] == "php" && $_POST["password"] == "php") {
// If correct, we set the session to YES
 session_start();
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged correctly in</h1>";
 echo "<p><a href='fill.php'>Link to protected file</a><p/>";
}
else {
// If not correct, we set the session to NO
 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='#.php'>Link to protected file</a></p>";
}
?>
</body>
</html>