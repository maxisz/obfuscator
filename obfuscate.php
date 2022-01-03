<?php
require 'src/Obfuscator.php';

$filename = 'test'; // A PHP filename (without .php) that you want to obfuscate

$sData = file_get_contents($filename . '.php');
$sData = str_replace(array('<?php', '<?', '?>'), '', $sData); // We strip the open/close PHP tags
$sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
file_put_contents($filename . '_obfuscated.php', '<?php ' . "\r\n" . $sObfusationData);