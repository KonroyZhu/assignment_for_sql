<?php
//记住密码
$usr=$_POST["username"];
$pass=$_POST["password"];
$rem=$_POST["rem"];

/*
echo $usr."<br/>";
echo $pass."<br/>";
echo $rem."<br/>";
*/

	if($rem==1){
		setcookie('password',$pass,time()+3600);
		setcookie('usr',$usr,time()+3600);
		/*
		echo "cookie: ".$_COOKIE['usr']."<br/>";
		echo "cookie: ".$_COOKIE['password']."<br/>";*/
	}else{
		
	}
	if($_COOKIE['usr']!=$usr){
		setcookie('password',$pass,time()+3600);
		setcookie('usr',$usr,time()+3600);
	}

	
	//登陆
	$servername = "localhost:3306";  
	$username = "root";  
	$password = "81357336";  
	$dbname = "test"; 

	session_start();
	$_SESSION["login"]=false;

	// 创建连接  
	$conn =new mysqli($servername, $username, $password, $dbname);  
	// 检测连接  
	if ($conn->connect_error) {  
		die("Connection failed: " . $conn->connect_error);  
	}  
	  
	$sql = "select pass from usr where usr='".$usr."';";  
	$result = $conn->query($sql); 

	$row = $result->fetch_assoc();
	/*
	echo $row["pass"]."<br/>";
	echo $pass;
	*/

	if($row["pass"]==$pass&$usr!=""&$pass!=""){
		
		$_SESSION["login"]=true;
		echo "successfully login";
		echo "password incorrect";
		header("refresh:1;url=http://localhost:90/bookstore/supply.php");
	}else{
		
		echo "password incorrect";
		header("refresh:1;url=http://localhost:90/bookstore/login.php");
	}



?>