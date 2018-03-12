<html>
<head>
<meta charset="utf-8"/>
<title>登陆</title>
</head>
<style>
body{
	background-image:url('image/img_bg_3.jpg');
	overflow:hidden;
}
form{
width:400px;
 margin:auto;
 position:relative;
 top:230px;	
 left:50px;
}
input{
	
	width:300px;
	border-radius:8px;
	border:2px solid #fff;
	background-color:transparent;
	margin-bottom:20px;
	padding-left:10px;
	color:#fff;
	
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
	top:00px;
	left:-80px;
}
label{
	color:#fff;
	margin:0px;
	margin-top:-10px;
	margin-left:-140px;
	position:relative;
	left:-145px;
	
}

.radio{
	margin:none;
	padding-left:0px;
	position:relative;
	left:-145px;
}
.QR{
	float:left;
	width:80px;
	height:80px;
	background-color:#342e48;
	margin:0px;
	position:relative;
	left:218px;
	top:-50px;
	border-radius:8px;
}
.QR img{
	position:relative;
	left:7px;
	top:7px;
	border-radius:8px;
}
</style>


<body>

<form method="post" action="/bookstore/passRem.php">
	<input type="text" id="username" placeholder="用户名" name="username" value="<?php  if(!empty($_COOKIE["usr"])){ echo $_COOKIE["usr"];}else{ echo "";} ?>"/>
	<input type="password" id="password" placeholder="密码" name="password" value="<?php if(!empty($_COOKIE["password"])){ echo $_COOKIE["password"];}else{ echo "";} ?>"/>
	<input class="radio" id="rem" name="rem" type="radio" value="1" /><label>记住密码 </label> 
	<input class="radio" id="rem" name="rem" type="radio" value="0" checked="checked" style="position:relative;left:-225px;" /><label style="position:relative;left:-225px;">一律不 </label> 
	<div class="QR">
		<img style="-webkit-user-select: none;background-position: 0px 0px, 10px 10px;background-size: 20px 20px;background-image:linear-gradient(45deg, #eee 25%, transparent 25%, transparent 75%, #eee 75%, #eee 100%),linear-gradient(45deg, #eee 25%, white 25%, white 75%, #eee 75%, #eee 100%);" src="http://localhost:90/bookstore/QDcode.php">
	</div>
	<input type="submit" id="sub"   classclass="sub"/>
</form>


 <!-- <div id='ball' style='position:relative;left:70px;width:20px;height:20px;border-radius:80px;background-color:#4fe3c1'></div><!--border-radius 偏大时 可实现平滑增大-->
   <div id='ball' style='position:relative;left:100px;top:500px;width:60px;height:60px;border-radius:80px;background-color:#4fe3c1'></div>
   <div id='ball1' style='position:relative;left:170px;top:500px;width:20px;height:20px;border-radius:80px;background-color:#4fe3c1'></div>
   <div id='ball2' style='position:relative;left:770px;top:500px;width:60px;height:60px;border-radius:80px;background-color:#4fe3c1'></div>
    <div id='ball3' style='position:relative;left:1200px;top:500px;width:50px;height:50px;border-radius:80px;background-color:#4fe3c1'></div>
   <div id='ball4' style='position:relative;left:400px;top:500px;width:50px;height:50px;border-radius:80px;background-color:#4fe3c1'></div>
   <div id='ball5' style='position:relative;left:900px;top:500px;width:30px;height:30px;border-radius:80px;background-color:#4fe3c1'></div>
   <div id='ball6' style='position:relative;left:490px;top:500px;width:40px;height:40px;border-radius:80px;background-color:#4fe3c1'></div>
	 <div id='ball7' style='position:relative;left:1300px;top:500px;width:10px;height:10px;border-radius:80px;background-color:#4fe3c1'></div>

</body>
<!--
<script type='text/javascript'/>
-->
<script type='text/javascript'>

//表格查空
document.getElementById("sub").onclick=function(){
	if(document.getElementById("username").value==""||document.getElementById("password").value==""){
		alert("请先完整填写信息");
		return false;
	}
	
}


//绿色气泡效果

var R=500;

function bigger(){
	 //alert('test');
	 var ballR=R;
	var ball=document.getElementById('ball');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R-=3;
	
	if(ballR<-50){
		R=500;
	}

}

var i=setInterval('bigger()',50);
/////////////////////

var R1=500;

function bigger1(){
	 //alert('test');
	 var ballR=R1;
	var ball=document.getElementById('ball1');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R1-=6;
	
	if(ballR<0){
		R1=500;
	}

}

var i=setInterval('bigger1()',66);
/////////////////////

var R2=500;

function bigger2(){
	 //alert('test');
	 var ballR=R2;
	var ball=document.getElementById('ball2');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R2-=6;
	
	if(ballR<-100){
		R2=500;
	}

}

var i=setInterval('bigger2()',70);
/////////////////////

var R3=500;

function bigger3(){
	 //alert('test');
	 var ballR=R3;
	var ball=document.getElementById('ball3');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R3-=6;
	
	if(ballR<0){
		R3=500;
	}

}

var i=setInterval('bigger3()',80);
/////////////////////

var R4=500;

function bigger4(){
	 //alert('test');
	 var ballR=R4;
	var ball=document.getElementById('ball4');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R4-=6;
	
	if(ballR<0){
		R4=500;
	}

}

var i=setInterval('bigger4()',40);
//////////////////////////
var R5=500;

function bigger5(){
	 //alert('test');
	 var ballR=R5;
	var ball=document.getElementById('ball5');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R5-=5;
	
	if(ballR<0){
		R5=500;
	}

}

var i=setInterval('bigger5()',60);
//////////////////////////
var R6=500;

function bigger6(){
	 //alert('test');
	 var ballR=R6;
	var ball=document.getElementById('ball6');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R6-=6;
	
	if(ballR<0){
		R6=500;
	}

}
var i=setInterval('bigger6()',70);
//////////////////////////
var R7=500;

function bigger7(){
	 //alert('test');
	 var ballR=R7;
	var ball=document.getElementById('ball7');
	var radius=Math.cos(ballR)*30;
	/*ball.style.width=radius+'px';
	ball.style.height=radius+'px';*/
	
	ball.style.top=ballR+'px';

	R7-=6;
	
	if(ballR<0){
		R7=500;
	}

}

var i=setInterval('bigger7()',100);

</script>

</body>
<script type="text/javascript"/>
function test(){
	return false;
}
</script>
</html>