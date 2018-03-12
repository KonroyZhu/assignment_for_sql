<meta charset="utf-8"/>
<?php
	 //使用$_File[]["error"]检查错误
	
	 if($_FILES["pic"]["error"]>0){
		switch($_FILES["pic"]["error"]){
			case 1:
			 echo "error 1 上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值";
			 break;
			case 2:
			 echo "error 2  上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
			 break;
			case 3:
			 echo "error 3 文件只有部分被上传";
			 break;
			case 4:
			 echo "error 4 没有文件被上传";
			 break;
			default:
			 echo "未知错误";
			 break;
		}
		exit;
	 }
	 
	 //以自定义文件大小控制文件
	 $maxsize=5000000;//5k
	 if($_FILES["pic"]["size"]>$maxsize){
	 	echo "上传的文件太大，不能超过{$maxsize}字节";
		exit;
	 }
	 
	 //只允许上传jpg png gif jpeg
	 $allowtype=array("png","jpeg","jpg","gif");
	 
	 $arr=explode(".",$_FILES["pic"]["name"]);//将用"."分割后的文件名存到一个数组arr里面
	 $suffix=$arr[count($arr)-1];//后缀 指向arr数组的最后一个元素
	 if(!in_array($suffix,$allowtype)){
	   echo "这是不允许的文件类型";
	   exit;
	 }
	 
	 //文件改名
	 $newname=date("Y").date("m").date("d").date("H").date("s").rand(100,999).".".$suffix;
	 $filepath="./upload/";//上传文件夹路径
	 
	 //将文件移动到指定的路径
	 if(is_uploaded_file($_FILES["pic"]["tmp_name"])){//先判断着是不是tmp文件夹下面的上传文件 以免误移了其余的文件
	 	if(move_uploaded_file($_FILES["pic"]["tmp_name"],$filepath.$newname)){
			echo "上传成功";
		}else{
			echo "上传失败";
		}
	 }else{
		echo "不是上传文件"; 
	 }
	 
	 echo "
	 <div id='countdown'></div>
	 <script>
	 	count=2;
	 	window.onload=setInterval(function(){
			document.getElementById('countdown').innerHTML=count;
			if(count>0){count--;}
			if(count==0){
				window.location='form.php';
			}
		},900);
	 </script>";
	 
	 