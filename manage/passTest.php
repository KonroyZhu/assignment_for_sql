<html>
<head>
<meta charset="utf-8"/>
<title>remember password</title>
</head>


<body>

<form method="POST" action="passRem.php">


	<input type="text" placeholder="用户名" value="<?php try{  
				if(!empty($_COOKIE["usr"])){
					echo $_COOKIE["usr"];
				}
			}  
			catch(Exception $e){  
				
			}  ?>"name="username"/><br/>
	<input type="password" placeholder="密码" value="<?php try{  
				if(!empty($_COOKIE["password"])){
					echo $_COOKIE["password"];
				}
			}  
			catch(Exception $e){  
				
			}  ?>"name="password"/><br/>
	记住密码<label><input name="rem" type="radio" value="1" />是 </label> 
<label><input name="rem" type="radio" value="0" />否 </label> 
	<input type="submit" class="sub"onClick="test()"/><br/>






</form>



</body>

</html>
