<!--检查表格填写情况-->

	alert('book".$bookId."');
	$.ajax({
		url:'/bookstore/php/GetInfo.php',
		type:'post',
		success:function(raw_data){
			//alert('success');
			data=JSON.parse(raw_data);
			
			//$('#cover').html('<img src='upload/'+data[".$bookId."]['bookName'].jpg'/>);
			/*var bookname=data[".$bookId."]['bookName']+'.jpg';
			alert(bookname);*/
			
		},
		error:function(){
			alert('falie');
		}
	});