$(document).ready(function(){
	resize();
	
	$(window).resize(function(){
		resize();				 
	 })
	
	function resize(){
		var navbarHeight = $(".navbar").height();
		var footerHeight = $(".footer").height();
		var body = $(window).height();
		console.log("nav: " + navbarHeight + " footer " + footerHeight + " body: " + body);
		body = body - navbarHeight - footerHeight - 60;
		console.log(body);
		$(".body").css('minHeight', body);
	}
	
	
	

});