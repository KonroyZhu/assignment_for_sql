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
<title>进货</title>
<script type='text/javascript' src='http://ajax.microsoft.com/ajax/jquery
/jquery-1.4.min.js'></script>
<script type='text/javascript' src='js/sup.js'></script>
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
	<div class='nav-box' style='border-bottom:2px solid #4fe3c1;'><a href='supply.php' style='text-decoration:none;color:#fff;font-size:14px;'>进货</a></div>
	<div class='nav-box' ><a href='stock.php' style='text-decoration:none;color:#fff;font-size:14px;'>库存</a></div>
	<div class='nav-box' ><a href='rename.php' style='text-decoration:none;color:#fff;font-size:14px;'>改名</a></div>
	<div class='nav-box' ><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	<div class='nav-box' style='width:120px;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>


<div class='main-wrapper' id='main-wrapper'>
	<!--主要表格代码-->
    <div class='query-block block'>
    	<p>书号查询</p>
        <textarea placeholder='书名' class='bookId' id='getBookName'></textarea>
        <button class='query' onclick='convert()'>查询</button>
        <p id='bianhao' style='position:relative; top :58px;left:65px;;font-size:20px;'></p>
    </div>
    <div class='selling-block block'>
    	<p>进货单</p>
        <form method='post' action='php/SubmitSupply.php'>
        	<input type='text' placeholder='图书编号' id='supplyBookId' name='bookId'/>
            <input type='text' placeholder='数量' id='amount'name='amount'/>
            <input type='date' placeholder='进货日期' id='date'name='date'/>
            
            <input class='submit' id='supplyInfo' type='submit'  value='录入' />
        </form>
    </div>
    <div class='query-block block' style='position:relative;left:440px;top:-822px;'>
    	<p>进货查询</p>
        <textarea placeholder='图书编号' id='loadBookId' class='bookId' ></textarea>
        <button class='query' onclick='loadRS()'>查询</button>
    </div>
    
    <div class='supplyRS'>	
			<!-- <div class='supplyR'><p>what what what</p></div> -->
    </div>
</div><!--main-wrapper-->
</div>
</body>
<script>
<!--检查表格填写情况-->
$('#supplyInfo').click(function(){
	JD=true;
		$.ajax({
		url:'php/GetInfo.php',
		type:'POST',
		async:false, //将执行ajax召回函数的顺序提前
		success:function(raw_data){
			data=JSON.parse(raw_data);
			JD=false;
			//alert('ok JD: '+JD);
			for(var i=0;data[i]['bookId']!='';i++){
				if($('#supplyBookId').val().replace(/\b(0+)/gi,'')==data[i]['bookId'].replace(/\b(0+)/gi,'')){
					JD=true;
					break;
				}
			}
			
		},
		error:function(){
			JD=false;
			alert('not ok');
		}
		
	});
	if($('#supplyBookId').val()==''||$('#amount').val()==''||$('#date').val()==''){
		alert('请完整填写信息');
		JD=false;
	}
	//alert('last JD: '+JD);
	//return JD;
	if(JD){
		alert($('#supplyBookId').val()+' 号书 进货 '+$('#amount').val()+' 本');
		return true;
	}else{
		alert('库存里面没有该书');
		return false;
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