<?php
	$contents = file_get_contents('data.txt'); //將檔案取出，為字串
	echo (str_replace("\r\n", "<br />", $contents));
?>