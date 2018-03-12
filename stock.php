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
<title>库存</title>
<script type='text/javascript' src='http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js'></script>
<link href='css/supply.css' rel='stylesheet' text='text/css'>
</head>
<body>

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
	<div class='nav-box' style='border-bottom:2px solid #4fe3c1;'><a href='stock.php' style='text-decoration:none;color:#fff;font-size:14px;'>库存</a></div>
	<div class='nav-box' ><a href='rename.php' style='text-decoration:none;color:#fff;font-size:14px;'>改名</a></div>
	<div class='nav-box' ><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	<div class='nav-box' style='width:120px;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>





<div class='main-wrapper' id='main-wrapper'>
	<!--主要表格代码-->
    <div class='query-block block' style='height:100px;width:350px;'>
        <p>库存</p>
        <button class='query' onclick='getStock()' style='position:relative;left:130px;top:2px'>查询</button>
    </div>
	
	
	<div class='sell-chart block' id='sell-chart' style='width:500px;height:850px;float:right;z-index:100;position:relative;top:-115px;left:-110px;'>
		
		 <script src='echarts.js'></script>
			<script src='cmixChar.js'></script>
		   <!--柱状图-->
				<div id='barchart' style='height:400px;width:500px;'></div>
				<!--柱状图-->
			<!-- ECharts单文件引入 -->
			
			<!--折线图-->
			<!--<div id='linechart' style='width:600px;height:400px;position:relative;top:700px;margin-top:700px;'></div>-->
			<div id='linechart' style='width:500px;height:400px;margin-top:50px'></div>
			<!--折线图-->
	</div>
	
	
	<div id='stock' style='/*background-color:#000;*/width:350px;'>
	<!--库存数据展示-->
	</div>
	
	
	
	
	
	
	
	
    
    
    <div class='supplyRS'>	
			<!-- <div class='supplyR'><p>what what what</p></div> -->
    </div>
</div><!--main-wrapper-->
</div>
</body>



<!--检查表格填写情况-->
<script src='js/stock.js'></script>


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