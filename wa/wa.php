<?php
require "whatsapp.class.php";
$wa = new WhatsApp("51984655074", "99b264243cfbf5a7544e80b7ad3d5acb");
$wa->Connect();
$wa->Login();

$bbcode = "Nuevo mensaje desde la web: ";
$bbcode .= sprintf("Num. Cel: %s MSG: %s", $_GET['num'], $_GET['msg']);
$wa->Message(time() . "-1", "51984674477", $bbcode);
?>