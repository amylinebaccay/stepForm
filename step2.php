<?php
$firstName = $_GET['FirstName'];
	$middleName = $_GET['MiddleName']; 
	$lastName = $_GET['LastName']; 
	$gender = $_POST['gender']; 
	?>
<html>
<head>
	<title>
		registrationform

	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action = "step3.php" method = "GET">
	<h1>Student Registration Form Step 2 of 6</h1>
	<table border>

		<tr>
			<td>First Name</td>
			<td>Middle Name</td>
			<td>Last Name</td>
		</tr>
		<tr>
			<td <strong><?php echo $firstName; ?></strong><br /></td>
            <td <strong><?php echo $middleName; ?></strong><br /></td>
	        <td <strong><?php echo $lastName; ?></strong><br /></td>

		</tr>
		<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male</td><td><input type="radio" name="gender" value="female">Female</td>
		</tr>
		
		</table>
		<a href="step1.php"> Back</a>
		<input type = "submit" value = "Next Step">
	</form>
</body>
</html>