<?php
/*
* Author: Martin Vician <info@vician.cz>
* Licence: MIT
*/

if(!isset($_SERVER)) die("ERROR: Without Server variable!");
if(!isset($_SERVER['REMOTE_ADDR'])) die("ERROR: Without Remote ip variable!");

$ip = $_SERVER['REMOTE_ADDR'];

$parts = explode(".",$ip);


if (count($parts) != 4) die($ip);

$ipv6to4 = "2002";
for ($i = 0; $i < count($parts); $i++) {
	if ($i % 2 == 0) $ipv6to4 .= ":";
	$part = dechex($parts[$i]);
	if (strlen($part) < 2) $part = "0".$part;
	$ipv6to4 .= $part;
}
$ipv6to4 .= "::";

echo "$ipv6to4";
echo "\n";
?>
