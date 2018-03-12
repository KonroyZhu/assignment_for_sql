// 路径配置
	require.config({
		paths: {
			echarts: 'http://echarts.baidu.com/build/dist'
		}
	});
	
	
	require(
	
			[
                'echarts',
                //'echarts/chart/bar', 
				'echarts/chart/line'// 使用折线图就加载line模块，按需加载
            ],
			
			function (ec) {
                // 基于准备好的dom，初始化echarts图表
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
								  //设置数据
								  series : [
								  
								//折线图
								 {
								  "name":"销量",
								  "type":"line",
								 
									"data":(function(){
											arr=new Array();
											
											$.ajax({
													url:"php/GetSellTrend.php",
													type:"POST",
													async:false,//一定要记得加
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
								   //绘制平均线
								   markLine : {
									 data : [
									   {type : 'average', name: '平均值'}
									 ]
								   },
								  //绘制最高最低点
								  markPoint : {
									data : [
									  {type : 'max', name: '最大值'},
									  {type : 'min', name: '最小值'}
									]
								  }
								}//line chart end
								
							  ]	//series end				
                };//option end
				
				// 为echarts对象加载数据 
                myChart.setOption(option); 
            }//function end
	
	
	);