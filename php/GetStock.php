 
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


  
//$sql = "select I.bookId,I.am-D.am as stock from (select bookId , sum(amount) as am from supply group by bookId) as I left outer join (select bookId ,sum(amount) as am from sell group by bookId) as D on I.bookId=D.bookId;";  
//���û������ �����п������
$sql=" select I.bookId,ifnull(I.am,0)-ifnull(D.am,0) as stock from (select bookId , sum(amount) as am from supply group by bookId) as I left outer join (select bookId ,sum(amount) as am from sell group by bookId) as D on I.bookId=D.bookId;";
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