<?php
//fgetss按行返回文件去除html标记

$myfile = fopen("data.php",'r');
while(!feof($myfile)) {
	$myline = fgetss($myfile,255);
	echo $myline;
}
fclose($myfile);