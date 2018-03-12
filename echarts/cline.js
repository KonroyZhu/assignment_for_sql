// ·������
	require.config({
		paths: {
			echarts: 'http://echarts.baidu.com/build/dist'
		}
	});
	
	
	require(
	
			[
                'echarts',
                //'echarts/chart/bar', 
				'echarts/chart/line'// ʹ������ͼ�ͼ���lineģ�飬�������
            ],
			
			function (ec) {
                // ����׼���õ�dom����ʼ��echartsͼ��
                var myChart = ec.init(document.getElementById('linechart')); 
                
                var option = {
								xAxis : [
									{
									  type : 'category',
									  
									  
									  data:(function(){
											arr=new Array();
											
											$.ajax({
													url:"php/GetSellTrend.php",
													type:"POST",
													async:false,
													success:function(raw_data){
														
														data=JSON.parse(raw_data);
														
														
														for(var i=0;data[i]["sellDate"]!="";i++){
															
															arr.push(data[i]["sellDate"]);
															//alert("ok"+data[i]["sellDate"])
														}
													},
													error:function(){
														alert("not ok");
														myChart.hideLoading();
													}
												});
											
											return arr;
									  
									  })()
									}
								  ],
								  yAxis : [
									{
									  type : 'value'
									}
								  ],
								  //��������
								  series : [
								  
								//����ͼ
								 {
								  "name":"����",
								  "type":"line",
								 
									"data":(function(){
											arr=new Array();
											
											$.ajax({
													url:"php/GetSellTrend.php",
													type:"POST",
													async:false,//һ��Ҫ�ǵü�
													success:function(raw_data){
														//alert("ok2");
														data=JSON.parse(raw_data);
														//alert(data[0]["amount"])
														for(var i=0;data[i]["sellDate"]!="";i++){
															arr.push(data[i]["amount"]);
														}
													},
													error:function(){
														alert("not ok");
														myChart.hideLoading();
													}
												});
											
											return arr;
									  
									  })(),
								   //����ƽ����
								   markLine : {
									 data : [
									   {type : 'average', name: 'ƽ��ֵ'}
									 ]
								   },
								  //���������͵�
								  markPoint : {
									data : [
									  {type : 'max', name: '���ֵ'},
									  {type : 'min', name: '��Сֵ'}
									]
								  }
								}//line chart end
								
							  ]	//series end				
                };//option end
				
				// Ϊecharts����������� 
                myChart.setOption(option); 
            }//function end
	
	
	);