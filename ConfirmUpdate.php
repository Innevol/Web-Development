<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' type='text/css' href='Reserve.css' />
</head>
<h1 class = "UpdateH1">Hawaii</h1>
<hr>
<div class = "Nav">
<p><a href = "http://ironduke.cs.gsu.edu/~patel/index.html">Main</a></p>
<p><a href = "Home.html">Home</a></p>
<p><a href = "About.html">About</a></p>
<p><a href = "https://portal.ehawaii.gov/">Information</a></p>
<p><a href = "Feedback.html">Feedback</a></p>
</div>
</br></br>
<div class = "update">
<h2>
Please input your changes in reservation within the fields below,</br>
and please update your room quantity if you change your room type to ensure your stay.
</br>Thank you!
</h2>
</div>
</br>
<body class = "Update" align = "center">
 <?php
 
 $username="jpatel78"; //replace jpatel78 with your campus id
 $password="jpatel78"; //replace jpatel78 with your campus id
 $database="jpatel78"; //replace jpatel78 with your campus id
 
$dbcnx = mysql_connect('localhost',$username,$password);
if (!$dbcnx) {
	echo "<P> Unable to Connect . </P>";
} else {

	echo "";
}
	     if(isset($_POST['submit'])) { 
		$id = $_POST['id'];
	
@mysql_select_db($database) or die( "Unable to select database");

$sql = "SELECT * FROM  Hotel WHERE id = '$id'";

$result = mysql_query($sql);
?>
<h3>Your current reservation information:</h3>
</br>
<table border="1" cellspacing="2" cellpadding="2" align = "center"> 
<tr> 
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Confirmation #</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">First Name</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Last Name</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Address</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">City</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">State</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Zip code</font></th> 
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Room Type</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">Room Quantity</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">DateIn(yyyy-mm-dd)</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">DateOut(yyyy-mm-dd)</font></th>
</tr>
<?php
$i=0;

$id = mysql_result($result,$i,"id");
$fname = mysql_result($result,$i,"fname");
$lname = mysql_result($result,$i,"lname");
$address = mysql_result($result,$i,"address");
$city = mysql_result($result,$i,"city");
$state = mysql_result($result,$i,"state");
$zipcode = mysql_result($result,$i,"zipcode");
$roomType = mysql_result($result,$i,"roomType");
$roomQuantity = mysql_result($result,$i,"roomQuantity");
$dateIn = mysql_result($result,$i,"dateIn");
$dateOut = mysql_result($result,$i,"dateOut");

?>
<tr> 
<th><font face="Arial, Helvetica, sans-serif"><?php echo $id ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $fname ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $lname ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $address ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $city ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $state ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $zipcode ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $roomType ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $roomQuantity ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $dateIn ?></font></th>
<th><font face="Arial, Helvetica, sans-serif"><?php echo $dateOut ?></font></th>
</tr>

<?php
}
?>
</table>
</br></br>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type = "text" name = "id" placeholder = "Confirmation #">
</br></br>
<input type="submit" name="submit" value="View Information"/>
</form>
<hr>
</br></br>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<input type = "text" name = "updateid" placeholder = "Confirmation #">
</br></br>
<h3>Update Room Type:</h3>
<select name="updateroomType">
		<option value="Nothing"></option>
		<option value="Single" required>Single</option>
		<option value="Double" required>Double</option>
		<option value="King" required>King</option>
</select>

<h3>Update Room Quantity:</h3>
<select name="updateroomQuantity">
		<option value="Nothing"></option>
		<option value="1" required>1</option>
		<option value="2" required>2</option>
		<option value="3" required>3</option>
</select>

</br></br>

<input type = "text" name = "updatedateIn" placeholder = "Date In(yyyymmdd)">

<input type = "text" name = "updatedateOut" placeholder = "Date Out(yyyymmdd)">

</br></br>

<input type="submit" name="submit1" value="Update Information"/>

</form>
<?php
$username="jpatel78"; //replace jpatel78 with your campus id
 $password="jpatel78"; //replace jpatel78 with your campus id
 $database="jpatel78"; //replace jpatel78 with your campus id
 
$dbcnx = mysql_connect('localhost',$username,$password);
if (!$dbcnx) {
	echo "<P> Unable to Connect . </P>";
} else {

	echo "";
}

@mysql_select_db($database) or die( "Unable to select database");

     if(isset($_POST['submit1'])) { 
		$updateid = $_POST['updateid'];
		
		$updateroomType = $_POST['updateroomType']; 

		$updateroomQuantity = $_POST['updateroomQuantity']; 
		
		$updatedateIn = $_POST['updatedateIn']; 

		$updatedateOut = $_POST['updatedateOut']; 
		
	if ($updateroomType == TRUE) {
	$sqlup = "UPDATE Hotel SET roomType = '$updateroomType' WHERE id = '$updateid'";
} if ($updateroomQuantity == TRUE) {
	$sqlup = "UPDATE Hotel SET roomQuantity = '$updateroomQuantity' WHERE id = '$updateid'";
} if ($updatedateIn == TRUE) {
	$sqlup = "UPDATE Hotel SET dateIn = '$updatedateIn' WHERE id = '$updateid'";
} if ($updatedateOut == TRUE) {
	$sqlup = "UPDATE Hotel SET dateOut = '$updatedateOut' WHERE id = '$updateid'";
} if ($updateroomType == TRUE && $updateroomQuantity == TRUE && $updatedateIn == TRUE) {
	$sqlup = "UPDATE Hotel SET  roomType = '$updateroomType', roomQuantity = '$updateroomQuantity', dateIn = '$updatedateIn'
	WHERE id = '$updateid'";
} if ($updateroomType == TRUE && $updateroomQuantity == TRUE) {
	$sqlup = "UPDATE Hotel SET  roomType = '$updateroomType', roomQuantity = '$updateroomQuantity'
	WHERE id = '$updateid'";
} else if ($updateroomType == TRUE && $updateroomQuantity == FALSE) {
	return FALSE;
} else if ($updateroomType == FALSE && $updateroomQuantity == TRUE) {
	return FALSE;
} if ($updatedateIn == TRUE && $updatedateOut == TRUE) {
	$sqlup = "UPDATE Hotel SET dateIn = '$updatedateIn', dateOut = '$updatedateOut' WHERE id = '$updateid'";
} if ($updateroomType == TRUE && $updateroomQuantity == TRUE && $updatedateIn == TRUE && $updatedateOut == TRUE) {
	$sqlup = "UPDATE Hotel SET roomType = '$updateroomType', roomQuantity = '$updateroomQuantity', dateIn = '$updatedateIn', dateOut = '$updatedateOut'
	WHERE id = '$updateid'";
}
	mysql_query($sqlup);
	 }

	mysql_close();
?>
</body>
</html>