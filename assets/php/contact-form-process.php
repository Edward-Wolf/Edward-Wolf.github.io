<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if(isset($_POST['submit'])){
    $to = "edward.james.wolf@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of" . $subject;
    $message = $name . " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comment'];

    $headers = array("From: " . $from,
    "Reply-To: " . $to,
    "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);
    
    $headers2 = array("From: " . $to,
    "Reply-To: " . $from,
    "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers2 = implode("\r\n", $headers2);
    
    if(mail($to,$subject,$message,$headers)){
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        header('Location: http://www.edward-wolf.com/index.html');
    } else {
        echo '<p>There was an error. We apologize for the inconvenience.</p>';
    }

    }
?>
