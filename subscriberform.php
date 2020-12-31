<?php
if($_POST["Message"]) {
mail("ktsthehien@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: ktsthehien@gmail.com");
}
?>