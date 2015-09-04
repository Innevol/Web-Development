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
<body class = "Confirm" align = "center">
</br></br></br>
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
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">DateIn(yyyymmdd)</font></th>
<th class = "TableHeaders"><font face="Arial, Helvetica, sans-serif">DateOut(yyyymmdd)</font></th>
</tr>
</br></br></br>
<hr>
</body>
</br></br></br>
<div class = "confirm">
<h2>
Congratulations your stay has now been booked! Click Home to get back to the main menu.
</h2>
</div>
<?php
$username="jpatel78";
 $password="jpatel78";
 $database="jpatel78";
 
  $db = mysql_connect('localhost',$username,$password);
if (!$db) {
	echo "<P> Unable to Connect . </P>";
} else {

	echo "";
}

@mysql_select_db($database) or die( "Unable to select database");

		$fname = $_POST['fname']; 

		$lname = $_POST['lname']; 

		$address = $_POST['address']; 

		$city = $_POST['city']; 

		$state = $_POST['state']; 
		
		$zipcode = $_POST['zipcode']; 

		$dateIn = $_POST['dateIn']; 

		$dateOut = $_POST['dateOut']; 
		
		$roomType = $_POST['roomType']; 
		
		$roomQuantity = $_POST['roomQuantity'];
		
		$age = $_POST['age'];

$sql = "INSERT INTO Hotel (fname,lname,address,city,state,zipcode,dateIn,dateOut,roomType,roomQuantity) VALUES ('$fname','$lname','$address','$city','$state','$zipcode','$dateIn','$dateOut','$roomType','$roomQuantity')";

mysql_query($sql);

$sql2 = "SELECT id FROM Hotel WHERE fname = '$fname' AND lname = '$lname' AND address = '$address' AND dateIn = '$dateIn'";

$result = mysql_query($sql2);

$sql3 = "SELECT dateIn, dateOut FROM Hotel WHERE  fname = '$fname' AND lname = '$lname' AND address = '$address' AND dateIn = '$dateIn'";

$result2 = mysql_query($sql3);

$i=0;

$id = mysql_result($result,$i,"id");

	$dateIn = mysql_result($result2,$i,"dateIn");
	$dateOut = mysql_result($result2,$i,"dateOut");

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
mysql_close();
?>
</table>
</html>