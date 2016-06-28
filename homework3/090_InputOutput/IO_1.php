<?php

echo "Path and FileName:" . __FILE__ . "<br />";//完整目錄(包括本檔名)
echo "Path: " . dirname ( __FILE__ ). "<br />"; //目錄
echo "Filename: " . basename ( __FILE__ ) . "<br />"; //檔名
echo "Filesize: " . filesize ( __FILE__ ); //檔案大小

?> 
