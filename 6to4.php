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
foreach ($parts as $part) {
	$ipv6to4 .= ":".dechex($part);
}
$ipv6to4 .= "::";

echo "$ipv6to4";
echo "\n";
?>
