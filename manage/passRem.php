<?php
//记住密码
$usr=$_POST["username"];
$pass=$_POST["password"];
$rem=$_POST["rem"];

echo $usr."<br/>";
echo $pass."<br/>";
echo $rem."<br/>";


	if($rem==1){
		setcookie('password',$pass,time()+3600);
		setcookie('usr',$usr,time()+3600);
		
		echo "cookie: ".$_COOKIE['usr']."<br/>";
		echo "cookie: ".$_COOKIE['password']."<br/>";
	}else{
		
	}




?>