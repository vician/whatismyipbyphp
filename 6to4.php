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

$ipv6to4 = "2002:";
//foreach ($parts as $part) {
for ($i = 0; $i < count($parts); $i++) {
	// echo "$i: ".$parts[$i]." => ".dechex($parts[$i])." = ".($i % 2)."\n";
	if ($i % 2 == 0) $ipv6to4 .= ":";
	$ipv6to4 .= dechex($parts[$i]);
}
$ipv6to4 .= "::";

echo "$ipv6to4";
echo "\n";
?>
