 // 路径配置
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
                var myChart = ec.init(document.getElementById('main')); 
                
                var option = {
					 title : {
						text: '各类图书销售情况'
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
                            //data : ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
							//data  :  ["条形1","柱状2"]
							data:(function(){
								arr=[];
								arr.push("条形1");
								arr.push("条形2");
								arr.push("条形3");
								arr.push("条形4");
								return arr;
							})()
							/*data:(
								function(){
											var arr=[];
											$.ajax({
												
												url:"php/GetTyData.php",
												type:"POST",
												success:function(raw_data){
													alert("load successfully")
													data=JSON.parse(raw_data);
													for(var i=0;data[i]["type"]!="";i++){
														arr.push(data[i]["type"]);
													}
												},
												error:function(){
													
													alert("sorry，请求数据失败");
													myChart.hideLoading();

												}
											
											})return arr;
							
								}
							)()*/
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
                            //"data":[ 20, 40, 10, 10]
							//"data":[10,30],
							"data":(function(){
								//return [ 20, 30, 10, 50];
								var arr=new Array();
								arr.push("20");
								arr.push("40");
								arr.push("10");
								arr.push("40");
								return arr;
								
							})()
							/*data:(
									
									function(){
												var arr[];
												$.ajax({
													url:"php/GetTyData.php",
													type:"POST";
													success:function(raw_data){
														data=JSON.parse(raw_data);
														for(var i=0;data[i]["type"]!="";i++){
															arr.push(data[i]["sellData"])
														}
													},
													error:function(){
														alert("sorry，请求数据失败");
														myChart.hideLoading();
													}
												
												})
											
												return arr;
									}
							)()*/
							
                        }
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );