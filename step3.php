<?php
$firstName = $_GET['FirstName'];
	$middleName = $_GET['MiddleName']; 
	$lastName = $_GET['LastName']; 
	$gender = $_POST['gender']; 
	$month = $_POST['Month']; 
	$day = $_POST['Day']; 
	$year = $_POST['Year']; 

	?>
<html>
<head>
	<title>
		registrationform

	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action = "step4.php" method = "GET" >
	<h1>Student Registration Form Step 3 of 6</h1>
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
		<tr><td>Gender</td><td><input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male</td>
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
		
		</table>
		<a href="step2.php"> Back</a>
		<input type = "submit" value = "Next Step">
	</form>
</body>
</html>