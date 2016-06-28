<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r"); //r=唯讀 
while (!feof($f)) //判斷該行是否為檔案結尾處
{
	$line = fgets($f); //fgets 一次讀一行(不包括換行符號)
	$sData .= Trim($line) . "<br>";
}


fclose($f);
echo $sData;

?>
