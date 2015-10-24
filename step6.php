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
<head>
	<title>
		registrationform

	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action = "register.php" method = "POST">
	<h1>Student Registration Form Step 6 of 6</h1>
	<table border>

		<tr>
			<td>First Name</td>
			<td>Middle Name</td>
			<td>Last Name</td>
		</tr>
		<tr>
			<td><input type = "text" name = "FirstName"></td>
            <td><input text= "text" name = "MiddleName"></td>
	        <td><input text= "text" name = "LastName"></td>

		</tr>
		<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male</td><td><input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr><td size = "10px"><center>Birthday </center></td></tr>
		<tr>
			<td>Month<select name="Month">
				<option value="January" selected >January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>

			</select></td><td>Day<select name ="Day">
			<option value="1" selected>1</option><option value="2">2</option>

            <option value="3">3</option><option value="4">4</option>
            <option value="5">5</option><option value="6">6</option>
            <option value="7">7</option><option value="8">8</option>
            <option value="9">9</option><option value="10">10</option>
            <option value="11">11</option><option value="12">12</option>

            <option value="13">13</option><option value="14">14</option>
            <option value="15">15</option><option value="16">16</option>
            <option value="17">17</option><option value="18">18</option>
            <option value="19">19</option><option value="20">20</option>
            <option value="21">21</option><option value="22">22</option>

            <option value="23">23</option><option value="24">24</option>
            <option value="25">25</option><option value="26">26</option>
            <option value="27">27</option><option value="28">28</option>
            <option value="29">29</option><option value="30">30</option>
            <option value="31">31</option>









		</select></td><td>Year<select name="Year">
		<option value="1990" selected>1990</option><option value="1991">1991</option>
		<option value="1992">1992</option><option value="1993">1993</option>
		<option value="1994">1994</option><option value="1995">1995</option>
		<option value="1996">1996</option><option value="1997">1997</option>
		<option value="1998">1998</option><option value="1999">1999</option>
		<option value="2000">2000</option><option value="2001">2001</option>
		<option value="2002">2002</option><option value="2003">2003</option>
		<option value="2004">2004</option><option value="2005">2005</option>
		<option value="2006">2006</option><option value="2007">2007</option>
		<option value="2008">2008</option><option value="2009">2009</option>
		<option value="2010">2010</option><option value="2011">2011</option>
		<option value="2012">2012</option><option value="2013">2013</option>
		<option value="2014">2014</option><option value="2015">2015</option>


	</select></td>
		</tr>
		<tr>
			<td>Program</td><td><select name="Program">
			<option value="AB Broadcasting" selected>AB Broadcasting</option>
			<option value="Associate in Computer Technology">Associate in Computer Technology</option>
		    <option value="BS Accountancy">BS Accountancy</option>
		    <option value="BS Accounting Technology">BS Accounting Technology</option>
		    <option value="BS Information Systems">BS Information Systems</option>
		    <option value="BS Social Works">BS Social Works</option>
		    <option value="Nursing Assistant">Nursing Assistant </option>
		    <option value="Mass Communication Technology">Mass Communication Technology</option>
		    <option value="Office Management">Office Management</option>
		    <option value="International Cookery">Internationnal Cookery</option>
		   
		</select></td>

		</tr>
		<tr><td>Studdent Type</td></tr>
		<tr><td>
			<input type="radio" name="type" value="Full-Scholar">Full-Scholar<br>	
			<input type="radio" name="type" value="Partial-Scholar">Partial-Scholar<br>
			<input type="radio" name="type" value="Payee">Payee
		</td></tr>
		<tr><td>Address</td></tr>
		<tr>
			<td colspan ="3"><textarea cols "80" rows "5" name = "Address"></textarea></td>
		</tr>
		</table>
		<a href="step5.php"> Back</a>
		<input type = "submit" value = "Submit Registration">
	</form>
</body>
</html>