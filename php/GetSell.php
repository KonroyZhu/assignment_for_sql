<?php  
header("content-Type: text/html; charset=utf-8");//�ַ���������  
$servername = "localhost:3306";  
$username = "root";  
$password = "81357336";  
$dbname = "test"; 


// ��������  
$conn =new mysqli($servername, $username, $password, $dbname);  
// �������  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  
  
$sql = " select bookId,sellDate ,sum(amount) from sell group by sellDate,bookId;";  
$result = $conn->query($sql);  
  
$arr = array();  
// ���ÿ������  
while($row = $result->fetch_assoc()) {  
    $count=count($row);//������ѭ������У�����ÿ��ɾ��row���鳤�ȶ���С  
    for($i=0;$i<$count;$i++){  
        unset($row[$i]);//ɾ����������  
    }  
    array_push($arr,$row);  
  
}  
//print_r($arr);  
echo json_encode($arr,JSON_UNESCAPED_UNICODE);//json����  
$conn->close();  
  
?>  