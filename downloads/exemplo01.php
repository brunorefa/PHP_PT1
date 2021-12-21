<?php

$link = "https://www.google.com/logos/doodles/2021/seasonal-holidays-2021-6753651837109324.3-ladc.gif";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>
<img src="<?=$basename?>">