# TelePHP
Send data to telegram bot in php


USAGE :

Download and extract files to your working DIR & Use the below snippet :)

<!-- language: php -->
<?php

include './telegram.php';

if (!empty($_POST['variable'])) {
  $content = $_POST['variable'];
  SendMessage($content); // Call function to send data to tele bot :)
}

?>
