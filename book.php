
<?php
header("Content-type: text/html; charset=utf-8"); 
//require_once( 'ShopProcess.php' );
session_start();

$bookId=$_GET['bookId'];

try
{
	if(!empty($_SESSION["login"])){
	echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<head>
<meta charset='utf-8'/>
<title>书籍信息</title>
<script type='text/javascript' src='http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js'></script>
<script type='text/javascript' src='js/sell.js'></script>
<link href='css/supply.css' rel='stylesheet' text='text/css'>
</head>
<body>

<div class='main-content'>
<style>
.infoblock{
	
	position:relative;
	left:700;
	float:left;
}
.bookIbfo{
	font-size:14px;color:#fff;
	margin-bottom:50px;
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
	<div class='nav-box' ><a href='rename.php' style='text-decoration:none;color:#fff;font-size:14px;'>改名</a></div>
	<div class='nav-box' ><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	<div class='nav-box' style='width:120px;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>



<div class='main-wrapper' id='main-wrapper'>
	<!--主要表格代码-->
	<div id='cover' style='width:1000px;position:relative;left:80px;'>
		<div class='infoblock'>
		
				<div class='bookIbfo' id='bookName'><a style='font-size:14px;color:#fff'>书名：</a></div>
				<div class='bookIbfo'id='author'><a style='font-size:14px;color:#fff'>作者：</a></div>
				<div class='bookIbfo'id='type'><a style='font-size:14px;color:#fff'>类型 ：</a></div>
				<div class='bookIbfo'id='price'><a style='font-size:14px;color:#fff'>价格：</a></div>
				<div class='bookIbfo'><a href='stock.php'   style='font-size:30px;color:#4fe3c1'>返回</a></div>
		</div>
		<img id='imgId' style='width:400px;margin-left:200px'/>
	</div>
  
</div><!--main-wrapper-->
</div>
</body>
<script>
<!--检查表格填写情况-->

	//alert('book".$bookId."');
	
	$.ajax({
		url:'/bookstore/php/GetInfo.php',
		type:'post',
		success:function(raw_data){
			//alert('success');
			data=JSON.parse(raw_data);
			for(var i=0;data[i]['bookId']!='';i++){
				
				if(data[i]['bookId']==".$bookId."){
					alert(data[i]['bookId']+'  '+data[i]['bookName']);
					var bookname=data[i]['bookName']+'.jpg';
					var name=data[i]['bookName'];
					var author=data[i]['author'];
					var type=data[i]['type'];
					var price=data[i]['price'];
					/*alert(bookname);*/
					var path='upload/'+bookname;
					$('#imgId').attr('src',path);
					$('#bookName').html('书名：'+name);
					$('#author').html('作者：'+author);
					$('#type').html('类型 ：'+type);
					$('#price').html('价格：'+price);
				}
				
			}
			
		},
		error:function(){
			alert('falie');
		}
	});
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