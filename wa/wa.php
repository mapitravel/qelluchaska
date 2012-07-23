<?php
require "whatsapp.class.php";
$wa = new WhatsApp("51984655074", "99b264243cfbf5a7544e80b7ad3d5acb");
$wa->Connect();
$wa->Login();

$country = file_get_contents(sprintf('http://api.hostip.info/country.php?ip=%s', $_SERVER['REMOTE_ADDR']));
$bbcode .= sprintf("Num. Cel: %s MSG: %s PAIS: %s", $_GET['num'], $_GET['msg'], $country);
$wa->Message(time() . "-1", "51984674477", $bbcode);
?>