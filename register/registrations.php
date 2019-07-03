
<?php
if($_POST["submit"]) {
    $recipient = "imaginginpsychiatry@gmail.com"; //my email
    $Text12392 = $_POST ["yourName"];
    $Text12395 = $_POST["yourEmail"];

    $mail($recipient, "From: $Text12392 <$Text12395>");
    $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";
}
?>
