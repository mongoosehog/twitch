<?php
if($_POST["message"]) {
    mail("xxginga7xx@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
