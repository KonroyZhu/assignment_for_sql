<html>
<head>
<meta charset='utf-8'/>
<title>上传</title>
</head>
<style>
body{
	background-image:url('image/img_bg_3.jpg');
}
form{
width:400px;
 margin:auto;
 position:relative;
 top:100px;	
}
input{
	
	width:300px;
	border-radius:8px;
	border:2px solid #fff;
	background-color:transparent;
	margin-bottom:20px;
	padding-left:10px;
	
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
.sub{
	background-color:#4fe3c1;
	border:none;
}
img{
	position:relative;
	width:200px;
	border:none;
	margin-left:30px;
	float:left;
}
.gallery{
	width:1000px;
	margin:auto;
	background-color:#fff;
	position:relative;
	top:200px;
}
</style>


<body>
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
	<div class='nav-box' style='border-bottom:2px solid #4fe3c1;'><a href='form.php' style='text-decoration:none;color:#fff;font-size:14px;'>上传</a></div>
	
	<div class='nav-box' style='width:120px;'><a href='info.php' style='text-decoration:none;color:#fff;font-size:14px;'>基本信息</a></div>
	<div class='nav-box' ><a href='login.php' style='text-decoration:none;color:#fff;font-size:14px;'>退出</a></div>
</nav>

	<form action='upload.php' method='post' enctype='multipart/form-data'>
            <input type='file' name='pic'/><br/>
            <input class='sub' type='submit' value='确认'/>
    </form>  
	
	<div class='gallery' >
				<?php
				$dir='./upload/';
				if(is_dir($dir)){//先判断是否为文件夹
					if($dh=opendir($dir)){
						while(($pic=readdir($dh))!=false){
							//echo $dir.$pic.'<br/>';
							$imgpath=iconv('GB2312','UTF-8',$dir.$pic );
							if($imgpath=='./upload/.'||$imgpath=='./upload/..'||$imgpath=='./upload/rename.php'){
								
							}else{
								echo "<img src='$imgpath'/>";
							}
						}
						closedir($dh);
					}
				}
				
			?>
			
			
		
	
	</div>
    
</body>
</html>