<?php
$msg  = $_GET["msg"];
$time = time();

$fp = fopen("data.txt", "a");
flock($fp, LOCK_EX);
fwrite($fp, $msg."\t".$time."\n");
flock($fp, LOCK_UN);
fclose($fp);

header("Location: chat.php");

