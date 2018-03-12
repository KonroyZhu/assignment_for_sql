<?php
//引入核心库文件
include "phpqrcode/phpqrcode.php";
//定义纠错级别
$errorLevel = "L";
//定义生成图片宽度和高度;默认为3
$size = "2";
//定义生成内容
$content="欢迎访问图书进销存系统 By 昆睿 & 芷璇";
//调用QRcode类的静态方法png生成二维码图片//



echo QRcode::png($content, false, $errorLevel, $size);

?>