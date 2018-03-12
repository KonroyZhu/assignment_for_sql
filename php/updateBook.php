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

$bookId=$_POST["trim-label1"];
$bookName=$_POST["trim-label2"];
$price=$_POST["trim-label3"];
$author=$_POST["trim-label4"];
//$cover=$_POST["trim-label5"];
$type=$_POST["trim-label6"];


// 创建连接  
$conn =new mysqli($servername, $username, $password, $dbname);  
// 检测连接  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}

if(!empty($bookName)){
	$sql = "update info set bookName='".$bookName."' where bookId=".$bookId.";";  
	$result = $conn->query($sql);
	echo "book name has been modified<br/>";
}

if(!empty($type)){
	$sql = "update info set type='".$type."' where bookId=".$bookId.";";  
	$result = $conn->query($sql);
	echo "type has been modified<br/>";
}

if(!empty($price)){
	$sql = "update info set price='".$price."' where bookId=".$bookId.";";  
	$result = $conn->query($sql);
	echo "price has been modified<br/>";
}

if(!empty($author)){
	$sql = "update info set author='".$author."' where bookId=".$bookId.";";  
	$result = $conn->query($sql);
	echo "author has been modified<br/>";
}

if(!empty($cover)){
	$sql = "update info set cover='".$cover."' where bookId=".$bookId.";";  
	$result = $conn->query($sql);
	echo "cover has been modified";
}

header("refresh:2;url=http://localhost:90/bookstore/info.php");
	print('return to the infomaction page in 3 sec...');
/*
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
*/
?>