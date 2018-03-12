 
 <?php  
header("content-Type: text/html; charset=utf-8");//字符编码设置  
$servername = "localhost:3306";  
$username = "root";  
$password = "81357336";  
$dbname = "test"; 


// 创建连接  
$conn =new mysqli($servername, $username, $password, $dbname);  
// 检测连接  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  


  
//$sql = "select I.bookId,I.am-D.am as stock from (select bookId , sum(amount) as am from supply group by bookId) as I left outer join (select bookId ,sum(amount) as am from sell group by bookId) as D on I.bookId=D.bookId;";  
//解决没有销售 但是有库存的情况
$sql=" select I.bookId,ifnull(I.am,0)-ifnull(D.am,0) as stock from (select bookId , sum(amount) as am from supply group by bookId) as I left outer join (select bookId ,sum(amount) as am from sell group by bookId) as D on I.bookId=D.bookId;";
$result = $conn->query($sql);  
  
$arr = array();  
// 输出每行数据  
while($row = $result->fetch_assoc()) {  
    $count=count($row);//不能在循环语句中，由于每次删除row数组长度都减小  
    for($i=0;$i<$count;$i++){  
        unset($row[$i]);//删除冗余数据  
    }  
    array_push($arr,$row);  
  
}  
//print_r($arr);  
echo json_encode($arr,JSON_UNESCAPED_UNICODE);//json编码  
$conn->close();  
  
?>  