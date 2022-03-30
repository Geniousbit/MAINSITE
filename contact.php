<?php 
if(isset($_POST['submit'])){
    $to = " info@geniousbit.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone_no = $_POST['phone'];
    $subject = "Geniousbit Form submission by $first_name";
    $subject2 = "Copy of your form submission";
    $message =" Name:" . $first_name . "\n\n" ." Mobile no:" .  $phone_no ."\n\n".  " Query for:" .  $_POST['services'];
    $message2 = "Thank you to contact Geniousbit " . $first_name . "\n\n" . $_POST['services'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //  echo "<script>alert('Message Sent. Thank you for contacting us.')</script>";
     header('location:index.html');
    //  echo "<script>alert('Message Sent. Thank you for contacting us.')</script>";
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>