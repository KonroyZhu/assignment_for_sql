function loadContent() {
	$("#main-wrapper").animate({display:"block"},200);
	$("#main-wrapper").animate({marginLeft:"800px"},200);
	$("#main-wrapper").animate({width:"850px"},200);
	$("#main-wrapper").animate({height:"1200px"},200);
		
	$("#main-wrapper").animate({marginLeft:"175px"},200);
	//alert("load");
	/*$("#main-content").animate({display:"block"},200);
	$("#main-content").animate({height:"1200px"},200);
		
	$("#main-content").animate({marginLeft:"auto"},200);*/
	//alert("load complete");
}
$(document).ready(function(e) {
    //alert("ready");
	loadContent();
});