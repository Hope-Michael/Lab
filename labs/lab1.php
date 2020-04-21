<?php
include_once 'DBConnector.php';
include_once 'user.php';
$conn = new DBConnector;

 if (isset($_POST["btn-save"])) {
 	$first_name=$_POST['first_name'];
 	$last_name=$_POST['last_name'];
 	$city=$_POST['city_name'];

 	$user = new user ($first_name, $last_name, $city);
 	$res = $user->save();

 	if($res){
 		echo "save operation was successful";
 	}
 	else{
 		echo "An error occured";
 	}
 }
      
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form>
			<table allign="center">
				<tr>
					<td> <input type="text" name="first_name" required placeholder="First Name" /> </td>
				</tr>
				<tr>
					<td> <input type="text" name="last_name" required placeholder="Last Name" /> </td>
				</tr>
				<tr>
					<td> <input type="text" name="city_name" required placeholder="City" /> </td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-save"><strong>SAVE</strong> </button> </td>
				</tr>

			</table>
		</form>
	</body>
</html>