<?php session_start(); 
include('condb.php');
 
  $ID = $_SESSION["user"];
  $name = $_SESSION["pass"];
  $level = $_SESSION["nameID"];
 	if($level!='41'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Admin Page</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>