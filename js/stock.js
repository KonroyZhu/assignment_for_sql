function getStock(){
	//alert('testing');
	$.ajax({
	
		url:'php/GetStock.php',
		type:'POST',
		success:function(raw_data){
			//alert(raw_data);
			data=JSON.parse(raw_data);
			//alert(data[0]['bookId'])
			for(var i=0;data[i]['bookId']!='';i++){
				//alert(data[i]['bookId']);
				$('#stock').append("<a href='/bookstore/book.php?bookId="+data[i]['bookId']+"' style=' text-decoration:none' ><div class='show-stock' style='width:350px;background-color:#4fe3c1;border-radius:8px;' ><p  style='color:#fff;font-size:24px;position:relative;	left:60px;'>书号 "+data[i]['bookId']+" 数量 "+data[i]['stock']+" 本</p></div></a>");
			}
		},
		error:function(){
			alert('not ok on loading stock info');
		}
	
	});
}
	