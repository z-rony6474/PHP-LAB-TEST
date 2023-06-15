<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		form{
			width: 28%;
			border: 2px solid black;
			padding: 10px;
			background-color: black;
			border-radius: 15px;
		}
		th,td{
			padding:15px;
			text-align:center;
			color: white;
		}
	</style>
</head>
<body>	
	<center>
		<h1>Insert Data</h1>
		<form method="POST" action="insertData.php">
			<table>
				<tr>
					<th><label>ID</label></th>
					<td><input type="text" placeholder="Enter Id" name="f_id"></td>
				</tr>

				<tr>
					<th><label>Name</label></th>
					<td><input type="text" placeholder="Enter Name" name="f_nam"></td>
				</tr>

				<tr>
					<th><label>Designation</label></th>
					<td><input type="text"  placeholder="Enter Designation" name="f_des" ></td>
				</tr>

				<tr>
					<th><label>Phone</label></th>
					<td><input type="text" placeholder="Enter Phone" name="f_phn"></td>
				</tr>

				<tr>
					<th><label>Date_Of_Birth</label></th>
					<td><input type="date" placeholder="Enter your DateOfBirth" name="f_d"></td>
				</tr>
				<tr>
					<td colspan="2">
					    <input style="background-color:#67f6e1;border: none;padding: 10px;border-radius: 10px;color:black;" type="submit" value="INSERT">
				    </td>
				</tr>
			</table>

			
		</form>
	</center>	
	
</body>
</html>