<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' ); //將檔案讀成陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
}
//htmlspecialchars 可以杜絕文字上的誤認
?> 