<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' type='text/css' href='Reserve.css' />
</head>
<h1>Hawaii</h1>
<hr>
<div class = "Nav">
<p><a href = "http://ironduke.cs.gsu.edu/~patel/index.html">Main</a></p>
<p><a href = "Home.html">Home</a></p>
<p><a href = "About.html">About</a></p>
<p><a href = "https://portal.ehawaii.gov/">Information</a></p>
<p><a href = "Feedback.html">Feedback</a></p>
</div>
</br>
<body class = "Cancel" align = "center">
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

$id = $_POST['id'];

@mysql_select_db($database) or die( "Unable to select database");

$sql = "DELETE FROM Hotel WHERE id = '$id'";

mysql_query($sql);
?>
</body>
</br></br>
<div class = "cancel">
<h2>
Your reservation has now been cancelled, </br>
Thank you and goodbye.
</h2>
<script type =  "text/javascript">
alert("Please click Home to return back to the Homepage");
</script>
</div>
</html>