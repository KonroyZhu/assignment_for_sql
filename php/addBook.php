<?php

header("Content-type: text/html; charset=utf-8"); 
/*
echo $_POST["bookId"]+"<br/>";
echo $_POST["amount"]+"<br/>";
echo $_POST["date"]+"<br/>";
*/
$servername = "localhost:3306";  
$username = "root";  
$password = "81357336";  
$dbname = "test"; 
/*
echo $_POST["bookName"]."<br/>";
echo $_POST["type"]."<br/>";
echo $_POST["price"]."<br/>";
echo $_POST["author"]."<br/>";
*/

$conn =new mysqli($servername, $username, $password, $dbname);  
// 检测连接  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}


//$sql = " insert into info (bookName,type,author,price,cover) values ('".$_POST["bookName"]."','".$_POST["type"]."','".$_POST["author"]."','".$_POST["price"]."','');";  
$sql=" insert into info (bookName,type,author,price,cover) values ('".$_POST["bookName"]."','".$_POST["type"]."','".$_POST["type"]."','".$_POST["price"]."','');";
$result = $conn->query($sql);
if($result==1){
	echo "successful added!<br/>";
	header("refresh:2;url=http://localhost:90/bookstore/info.php");
	print('return to the info page in 3 sec...');

}

	
  

?>