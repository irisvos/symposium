<?php
// The message
$message = "New registration";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('imaginginpsychiatry@gmail.com', 'Iris Vos', $message);
?>
