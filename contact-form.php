<? php

if (isset($_POST['submit'])) {
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $country = $_POST['country'];
   $mailFrom = $_POST['email'];
   $message = $_POST['subject'];
   
   $mailTo = "hyperone76@hotmail.com";
   $headers = "From: " .$mailFrom;
   $txt = "You have received an e-mail from: ".$fname, lname.".\n\n"..$subject;
   
   mail($mailTo, $subject, $txt, $headers);
   header("Location: index.php?mailsend");
   
}