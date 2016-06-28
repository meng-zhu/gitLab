<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);//explode 將字串依據指定符號拆成陣列
$f = fopen("data2.txt", "w");//w=寫入 a=附加進去
foreach ($dataArray as $line) {
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
