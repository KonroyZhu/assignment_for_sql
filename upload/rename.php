<?php
header("Content-type: text/html; charset=utf-8"); 
$filename=$_POST["filename"];
$newname=$_POST["newname"];
$covername=explode("\\",$filename);
/*
echo $filename."<br/>";
echo $newname."<br/>";

$covername=explode("\\",$filename);
echo $covername[count($covername)-1];
*/

if(rename($covername[count($covername)-1],iconv("utf-8", "gb2312", $newname.".jpg"))){
	echo "rename succeffully";
}else{
	echo "rename falie";
}
header("refresh:2;url=http://localhost:90/bookstore/rename.php");
	print('return to the info page in 3 sec...');

?>
