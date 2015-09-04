<!DOCTYPE HTML>
<!-- References: http://www.formget.com/send-an-email-on-form-submission-using-php/-->
<html>
<?php
if(isset($_POST["submit"])){
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
$email=$_POST['vemail'];
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
$email= filter_var($email, FILTER_VALclassATE_EMAIL);
if (!$email){
echo "Invalclass Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "\r\n";
$headers .= 'Cc:'. $email2 . "\r\n";
$message = wordwrap($message, 70);
mail("justinptl@gmail.com", $subject, $message, $headers);
echo "Thank you!";
}
}
}
?>
</html>