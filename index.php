<?php
$_a=shell_exec("index.exe");
$_a=base64_decode(base64_decode(base64_decode($_a)));
echo($_a);
?>
