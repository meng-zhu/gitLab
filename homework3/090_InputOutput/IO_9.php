<?php
header("Content-Type: image/png"); //告知檔案類型，文字或圖片

$filename = "cc.png";
$fileHandle = fopen($filename, "rb"); //b=將檔案完整取出，杜絕文字上的誤認
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>