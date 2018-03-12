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


$sql = "insert into supply (bookId,amount,supplyDate) values( '".$_POST["bookId"]."','".$_POST["amount"]."','".$_POST["date"]."');";  
$result = $conn->query($sql);
if($result==1){
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />add stock successfully!<br/>";
	header("refresh:2;url=http://localhost:90/bookstore/supply.php");
	print('return to the supply page in 3 sec...');
}

?>