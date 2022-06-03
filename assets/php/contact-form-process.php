<?PHP

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$email = $_POST["email"];
$to = "edward.james.wolf@gmail.com";
$subject = $_POST["subject"];
$headers = "From: $email\n";
$message = $_POST["message"];
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: edward.james.wolf@gmail.com\n";
$usermessage = "Thank you for emailing me. I will respond within 24 hours";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>
