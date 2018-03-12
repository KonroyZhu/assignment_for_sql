// 路径配置   柱状图
        require.config({
            paths: {
                echarts: 'http://echarts.baidu.com/build/dist'
            }
        });
        
        // 使用
        require(
            [
                'echarts',
                'echarts/chart/bar' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('barchart')); 
                
                var option = {
					
					 title : {
						text: '各类图书销售情况',
						textStyle: {
						           //标题颜色
						color: '#fff'
						}
						
					},
                    tooltip: {
                        show: true
                    },
                    legend: {
                        data:['销量'],
						
						
                    },
                    xAxis : [
                        {
                            type : 'category',
							
							data:(
								function(){
											//var arr=[];
											var arr=new Array();
											$.ajax({
												url:"php/GetTyData.php",
												type:"POST",
												async : false,
												success:function(raw_data){
													//alert("success");
													 
													data=JSON.parse(raw_data);
													for (var i=0;data[i]["type"]!="";i++){
														arr.push(data[i]["type"]);
													}
												},
												error:function(){
													alert("not ok");
													myChart.hideLoading();
												}
											});
											return arr;
							
								}
							)()
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            "name":"销售",
                            "type":"bar",
							
							"data":(
								function(){
											//var arr=[];
											var arr=new Array();
											$.ajax({
												url:"php/GetTyData.php",
												type:"POST",
												async : false,
												success:function(raw_data){
													//alert("success");
													 
													data=JSON.parse(raw_data);
													for (var i=0;data[i]["type"]!="";i++){
														arr.push(data[i]["sellData"]);
													}
												},
												error:function(){
													alert("not ok");
													myChart.hideLoading();
												}
											});
											return arr;
							
								}
							)()
							
                        }
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
	

// 路径配置  折线图
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
								 title : {
									text: '图书销量趋势',
									textStyle: {
						           //标题颜色
									color: '#fff'
									}
								},
								tooltip: {
									show: true
								},
								legend: {
									data:['销量'],
									
								},
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