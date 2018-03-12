<?php

/*
echo $_POST["bookId"]+"<br/>";
echo $_POST["amount"]+"<br/>";
echo $_POST["date"]+"<br/>";
*/



header("content-Type: text/html; charset=utf-8");//字符编码设置  
$servername = "localhost:3306";  
$username = "root";  
$password = "81357336";  
$dbname = "test"; 


// 创建连接  
$conn =new mysqli($servername, $username, $password, $dbname);  
// 检测连接  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}


$sql = "insert into sell (bookId,amount,sellDate) values( '".$_POST["bookId"]."','".$_POST["amount"]."','".$_POST["date"]."');";  
$result = $conn->query($sql);
if($result==1){
	echo "销售成功!<br/>";
	header("refresh:2;url=http://localhost:90/bookstore/sell.php");
	print('3秒后返回销售页面...');
}

?>