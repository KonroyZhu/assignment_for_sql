<?php
header("Content-type: text/html; charset=utf-8"); 
//require_once( 'ShopProcess.php' );
session_start();

try
{
	if(!empty($_SESSION["login"])){
	echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<head>
<meta charset='utf-8'/>
<title>改名</title>
<script type='text/javascript' src='http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js'></script>
<link href='css/supply.css' rel='stylesheet' text='text/css'>
</head>
<body>

<div class='main-content'>
<style>
form{
width:400px;
 margin:auto;
 position:relative;
 top:230px;	
 left:50px;
}
input{
	height:20px;
	width:300px;
	border-radius:8px;
	border:2px solid #fff;
	background-color:transparent;
	margin-bottom:20px;
	color:#fff;
	position:relative;
	left:-100px;
	top:-100px;
}
/*---placeholder 样式--*/
::-webkit-input-placeholder { /* WebKit browsers */ 
	color:#fff; 
	font-size:16px;
	
} 
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */ 
	color:#fff; 
	font-size:16px; 
} 
::-moz-placeholder { /* Mozilla Firefox 19+ */ 
	color:#fff; 
	font-size:16px;
} 
:-ms-input-placeholder { /* Internet Explorer 10+ */ 
	color:#fff; 
	font-size:16px;
} 
#sub{
	background-color:#4fe3c1;
	border:none;
	position:relative;
	width:300px;

	left:-100px;
}
</style>



<style>.nav-box{
	width:80px;
	height:100%;
	
	text-align:center;
	position:relative;
	left:600px;
	top:-26px;
	float:left;
	background-color:#342e48;
}
.nav-box a{
	position:relative;
	top:20px;
	
	
}
</style></style>
<nav style='width:1200px;height:68px;background-color:#342e48;margin:auto;'>
	<p style='color:#ccc;font-size:20px;font-weight:bold;margin:0px;margin-left:80px;position:relative;top:20px;'>书店进销存</p>
	<div class='nav-box' ><a href='sell.php' style='text-decoration:none;color:#fff;;font-size:14px;'>销售</a></div>
	<div class='nav-box' ><a href='supply.php' style='text-decoration:none;color:#fff;font-size:14px;'>进货</a></div>
	<div class='nav-box' ><a href='stock.php' style='text-decoration:none;color:#fff;font-size:14px;'>库存</a></div>
	<div class='nav-box' style='border-bottom:2px solid #4fe3c1;'><a href='rename.php' style='text-decoration:none;color:#fff;font-size:14px;'>改名</a></div>
	<div class='nav-box' ><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	<div class='nav-box' style='width:120px;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>





<div class='main-wrapper' id='main-wrapper'>
	<!--主要表格代码-->
	<input type='file' placeholder='封面' id='cover' style='position:relative;left:265px;top:100px;'id='filename'/>
	
	<form method='POST' action='upload/rename.php'>
		<input type='text' id='covername' name='filename' value='' style='display:none'/>
		<input type='text' id='newname' placeholder='书名' name='newname'/>
		<input type='submit' id='sub' />
	</from>
</div><!--main-wrapper-->
</div>
</body>



<!--检查表格填写情况-->
<script src='js/stock.js'>
</script>
<script>
 document.getElementById('sub').onclick=function(){
	 if(document.getElementById('cover').value==''){
		 alert('请选择封面');
		 return false;
	 }else{
		 var path=document.getElementById('cover').value;
		 document.getElementById('covername').value=path;
		 if(document.getElementById('newname').value==''){
			 alert('请输入封面名');
			 return false;
		 }
	 }
 }
</script>

</html>";
	}else{
		echo "请先登录";
		header("refresh:1;url=http://localhost:90/bookstore/login.php");
	}
}
catch (Exception $ex)
{ 
	//echo $ex->getTraceAsString();
	echo "请先登录";
	header("refresh:1;url=http://localhost:90/bookstore/login.php");
}

?>