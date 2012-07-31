<?php
require "whatsapp.class.php";
$wa = new WhatsApp("51984655074", "99b264243cfbf5a7544e80b7ad3d5acb");
$wa->Connect();
$wa->Login();

$bbcode = "Quieren que llamemos al ";
$bbcode .= sprintf("numero: %s, su nombre es %s", $_GET['num'], $_GET['name']);
$wa->Message(time() . "-1", "51984674477", $bbcode);
?>