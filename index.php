<?php
/*
* Author: Martin Vician <info@vician.cz>
* Licence: MIT
*/

if(!isset($_SERVER)) die("ERROR: Without Server variable!");
if(!isset($_SERVER['REMOTE_ADDR'])) die("ERROR: Without Remote ip variable!");

echo $_SERVER['REMOTE_ADDR'];
echo "\n";
?>
