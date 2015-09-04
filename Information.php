<!DOCTYPE HTML>
<html>
<head><link rel='stylesheet' type='text/css' href='Reserve.css' /></head>
<h1>Hawaii</h1>
<hr>
<div class = "Nav">
<p><a href = "http://ironduke.cs.gsu.edu/~patel/index.html">Main</a></p>
<p><a href = "Home.html">Home</a></p>
<p><a href = "About.html">About</a></p>
<p><a href = "https://portal.ehawaii.gov/">Information</a></p>
<p><a href = "Feedback.html">Feedback</a></p>
</div>
<body class = "Information" align = "center">
</body>
<div class = "Info">
<form method = "post" action = "Confirm.php">
What type of room would you like?
</br>
</br>
<select name="roomType">
		<option value="Nothing"></option>
		<option value="Single" required>Single</option>
		<option value="Double" required>Double</option>
		<option value="King" required>King</option>
</select>
</br>
</br>
How many rooms would you like?
</br>
</br>
<select name="roomQuantity">
		<option value="Nothing"></option>
		<option value="1" required>1</option>
		<option value="2" required>2</option>
		<option value="3" required>3</option>
</select>
</br>
</br>
<input type = "text" name = "fname" placeholder = "First Name" required>
</br>
</br>
<input type = "text" name = "lname" placeholder = "Last Name" required>
</br>
</br>
<input type = "text" name = "address" placeholder = "Address" required>
</br>
</br>
<input type = "text" name = "city" placeholder = "City" required>
</br>
</br>
<input type = "text" name = "state" placeholder = "State" required>
</br>
</br>
<input type = "text" name = "zipcode" placeholder = "Zipcode" required>
</br>
</br>
<input type = "text" name = "dateIn" placeholder = "Date In(yyyymmdd)"required>
</br>
</br>
<input type = "text" name = "dateOut" placeholder = "Date Out(yyyymmdd)" required>
</br>
</br>
Are you 18+ years old
<input type = "radio" name = "age" value = "Yes" required>Yes
<input type = "radio" name = "age" value = "No" required>No
</br></br>
<input type="submit" name="submit" value="Book Now!"/>
</form>
</div>
<script type = "text/javascript">
	alert("Please fill out all fields to ensure your booking!");
</script>
</html>