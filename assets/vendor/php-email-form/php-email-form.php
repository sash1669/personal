<?php
if(isset($_POST['submit'])){
    $to = "strompovaa@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
  }

  //  $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
?>
