<html>
<head>
<title> Max out of three </title>
</head>
<body>
 <?php
 $a = 1;
 $b = 4;
 $c = 3;
 if($a > $b)
 {
 if($a > $c)
 echo "Maximum num a = $a";
 else
 echo "Maximum num c = $c";
 }
 else
 {
 if($c > $b)
 echo "Maximum num c = $c";
else
 echo "Maximum num b = $b";
 }
 ?>
</body>
</html>