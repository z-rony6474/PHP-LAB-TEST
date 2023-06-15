<?php

session_start();
include"dbconnect.php";

if(isset($_POST['login'])){
$id= $_POST['f_id'];
$phn= $_POST['f_phn'];

$sql="SELECT * FROM teacher WHERE id='$id'";
$result = $conn->query($sql);

if($result->num_rows==1)
{
	//$_SESSION['phn']= $phn;sob page a use kora jabe 
	//id ,name,username(unique),password,email,gender;
	header('Location:index.php');
	//echo "successfully login";
}
else{
	echo"Login Failed";
}

}



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		form{
			border: 2px solid black;
			background-color: black;
			width: 20%;
			color: white;
			border-radius: 12px;
			padding: 10px;

		}
		th,td{
			padding: 10px;
			color: white;
		}
	</style>
</head>
<body>
	<center>
 <h1>Login</h1>
		<form method="POST" action="login.php">
			<table>
				<tr>
					<th><label>ID</label></th>
					<td><input type="text" placeholder="Enter Id" name="f_id"></td>
				</tr>

				<tr>
					<th><label>Phone</label></th>
					<td><input type="text" placeholder="Enter Phone" name="f_phn"></td>
				</tr>
				<tr>
					<th colspan="2">
					    <input style="background-color:#67f6e1;border: none;padding: 10px;border-radius: 10px;color:black;" type="submit" name="login" value="Login">
				    </th>
				</tr>
            </table>
        </form>
        </center>
</body>
</html>