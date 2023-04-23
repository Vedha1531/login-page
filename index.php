
<?php
// $conn = mysqli_connect("localhost", "root", "", "database");
$conn = mysqli_connect("database-1.cjy7ebg8vie2.eu-west-2.rds.amazonaws.com", "admin", "vedhamoorthy", "database-1");
// echo "<script> alert('db connected'); </script>";
if(isset($_POST["submit"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = "INSERT INTO `Table` (username,password ) VALUES ('$username','$password')";
	$result = mysqli_query($conn,$query);
	// if($result){
	// 	echo 'data inserted successfully';
	// }else{
	// 	echo 'data not inserted successfully';
	// }
//   echo "<script> alert('Data Inserted Successfully'); </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="container">
<div class="header">
 <h1>Sign In</h1>
 </div>

<form method="POST">

<ul>
<li>Username : <input class="username" type="text" name="username">
</li>
<li>Password : <input class="password" type="password" name="password">
</li>


</ul>

<button type="submit" class="submit" name="submit" onclick="alert('Details Submitted Successfully')">submit</button>


</form>
</div>


</body>
</html>