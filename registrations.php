<?php
if($_POST["message"]) {
    mail("imaginginpsychiatry@gmail.com", "Form to email message", $_POST["message"], "From: imaginginpsychiatry@gmail.com");
}
?>
