<?php 
    // Name
	$firstName = $_POST['FirstName'];
	$middleName = $_POST['MiddleName']; 
	$lastName = $_POST['LastName']; 
	$gender = $_POST['gender']; 
	// Birthday 
	$month = $_POST['Month']; 
	$day = $_POST['Day']; 
	$year = $_POST['Year']; 
	// Program and student type 
	$program = $_POST['Program']; 
	$studentType = $_POST['type']; 
	$address = $_POST['Address']; 
?>
<html>
First Name: <strong><?php echo $firstName; ?></strong><br />
Middle Name: <strong><?php echo $middleName; ?></strong><br />
Last Name: <strong><?php echo $lastName; ?></strong><br />
Gender: <strong><?php echo $gender; ?></strong><br />
Month: <strong><?php echo $month; ?></strong><br />
Day: <strong><?php echo $day; ?></strong><br />
Year: <strong><?php echo $year; ?></strong><br />
Program: <strong><?php echo $program; ?></strong><br />
Student Type: <strong><?php echo $studentType; ?></strong><br />
Address: <strong><?php echo $address; ?></strong><br />