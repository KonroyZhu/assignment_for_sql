<!--找书号-->
	$(document).ready(function(){
		//$("#bianhao").empty();
	});
	function convert(){
		//alert("convert");
		$.ajax({
			url:"php/GetInfo.php",
			type:"POST",
			
			success:function(raw_data){
				data=JSON.parse(raw_data);
				//alert(data['0']["bookName"]);
				//$("#bianhao").html($("#getBookName").val());
				
				//$("#bianhao").html(data["3"]["bookId"]);
				
				//if($("#getBookName").val()==data["3"]["bookName"]){
				var btnName=$("#getBookName").val()
				for(var i=0;data[i]["bookId"]!=0;i++){
					var str=data[i]["bookName"];
					if(str.indexOf(btnName)!=-1){
					$("#bianhao").html(data[i]["bookId"]);
					break;
				}
				}
					
			},
			error: function(){
				alert("ajax error at supply.js!");
			}
		});
	}
	
	
		
		
	<!--加载图书每日进货情况-->
	function loadRS(){
		//alert("load");
		if($("#loadBookId").val()==""){
			alert("请输入图书编号");
		}else{
			//alert($("#loadBookId").val());
			$.ajax({
				url:"php/GetSupply.php",
				success:function(raw_data){
					//alert("success");
					data=JSON.parse(raw_data);
					var str=$("#loadBookId").val();
					
					
					$(".supplyRS").empty();
					for(var i=0;data[i]["bookId"]!="";i++){
						if(data[i]["bookId"].match(str)==str){
							$(".supplyRS").append("<div class='supplyR'><p>"+data[i]["supplyDate"]+" "+data[i]["sum(amount)"]+"</p></div>")
							$(".supplyR").animate({marginTop:"20px"},1);
							$(".supplyR").animate({marginLeft:"10px"},1);
							$(".supplyR").animate({display:"block"},1);
							$(".supplyR").animate({width:"170px"},1);
							$(".supplyR").animate({marginLeft:"20px"},1);
							$(".supplyR").animate({height:"42px"},1);
							$(".supplyR").animate({marginTop:"0px"},1);
						}
					}
				},
				error:function(){
					alert("error");
				}
			});
		}
	}