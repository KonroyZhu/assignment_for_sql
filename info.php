<?php

header("Content-type: text/html; charset=utf-8"); 
//require_once( 'ShopProcess.php' );
session_start();

try
{
	if(!empty($_SESSION["login"])){
	echo "<html>
<head>
<meta charset='utf-8'/>
<title>基本信息</title>
<link href='css/homeScreen.css' rel='stylesheet' text='text/css'>
<script type='text/javascript' src='http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js'></script>
<!--<script type='text/javascript' src='js/loadContent.js'></script>-->
<script type='text/javascript' src='js/itemChange.js'></script>
</head>
<body>
<style>
input{

	padding-left:10px;
}
</style>
<div class='main-content'>



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
	<div class='nav-box' ><a href='rename.php' style='text-decoration:none;color:#fff;font-size:14px;'>改名</a></div>
	<div class='nav-box' ><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	<div class='nav-box' style='width:120px;border-bottom:2px solid #4fe3c1;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>


 <div class='main-wrapper' id='main-wrapper' style='display:block;margin-left:175px;'>
 <!--在这里放主要的表单代码-->
  <form method='post' action=''>
    <input type='button' value='增加' class='button' name='addButton' onclick='showAdd()'/>
    <input type='button' value='删除' class='button' name='deleltButton' onclick='showDel()'/>
    <input type='button' value='修改' class='button' name='trimButton' onclick='showTrim()'/>
  </form>
  <div id='add' class='content' style='display:block'>
   <form method='post' action='php/addBook.php' enctype='multipart/form-data'>
	 <input type='text' name='bookName' value='' placeholder='书名' class='add-label' id='add-label1'/>
	 <input type='text' name='type' value='' placeholder='类型' class='add-label' id='add-label5'/>
	 <input type='text' name='price' value='' placeholder='价格' class='add-label' id='add-label2'/>
	 <input type='text' name='author' value='' placeholder='作者' class='add-label' id='add-label3'/>
	
	 <input type='submit' value='添加' class='innerButton' id='add-button' />
   </form>
  </div>
  <div id='del' class='content' style='display:none'>
   <form method='post' action='/bookstore/DeleteInfo'>
	 <input type='text' name='deleteId' value='' placeholder='图书编号' class='delete-label' id='delete-label1'/>
	 <p><input type='submit' value='删除' class='innerButton' id='delete-button' onclick='checkDel(1)'/></p>
   </form>
  </div>
  <div id='trim' class='content' style='display:none'>
   <form method='post' action='php/updateBook.php' enctype='multipart/form-data'>
     <input type='text' name='trim-label1' value='' placeholder='图书编号' class='trim-label' id='trim-label1'/>
	 <p>
	 <input type='text' name='trim-label2'  value='' placeholder='书名' class='trim-label' id='trim-label2'/>
	 <input type='text' name='trim-label3'   value=''placeholder='价格' class='trim-label' id='trim-label3'/>
	 <input type='text' name='trim-label4'  value='' placeholder='作者' class='trim-label' id='trim-label4'/>
	 <input type='text' name='trim-label6' value='' placeholder='类型' class='trim-label' id='trim-label6'/>
	 </p>
	 <input type='submit' value='确定' class='innerButton' id='trim-button' style='' />
   </form>
  </div>
 </div><!--main-wrapper-->
</div>
</body>
<script>
	document.getElementById('add-button').onclick=function(){
		if(document.getElementById('add-label1').value==''||document.getElementById('add-label5').value==''||document.getElementById('add-label2').value==''||document.getElementById('add-label3').value==''||document.getElementById('add-label4').value==''){
		
			alert('请完整填写信息');
			return false;
		}
		
	}
	document.getElementById('delete-button').onclick=function(){
		if(document.getElementById('delete-label1').value==''){
		
			alert('请完整填写信息');
			return false;
		}
	}
	document.getElementById('trim-button').onclick=function(){
		if(document.getElementById('trim-label1').value==''){
			alert('请先选择书号');
			return false;
		}
		if(document.getElementById('trim-label1').value==''||(document.getElementById('trim-label2').value==''&document.getElementById('trim-label3').value==''&document.getElementById('trim-label4').value==''&document.getElementById('trim-label6').value==''&document.getElementById('trim-label5').value=='')){
		
			alert('至少填写一处修改');
			return false;
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