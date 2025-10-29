<?php
$txt = file_get_contents(__DIR__.'/web.php');
echo 'open:'.substr_count($txt,'{').PHP_EOL;
echo 'close:'.substr_count($txt,'}').PHP_EOL;
$lines = explode("\n", $txt);
foreach ($lines as $i => $line) {
    $num = $i + 1;
    echo sprintf("%3d: %s\n", $num, $line);
}
