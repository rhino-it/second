// var h_hght = 0; // высота шапки
// var h_mrg = 0;    // отступ когда шапка уже не видна
// var elem = $('#top_nav');           
// $(function(){
// 	var top = $(this).scrollTop();    
// 	if(top > h_hght){
// 		elem.css('top', h_mrg);
// 	}              
// 	$(window).scroll(function(){
// 		top = $(this).scrollTop();
// 		if ($(window).width()>767) {
// 			if (top+h_mrg < h_hght ) {
// 				elem.css('top', (h_hght-top));
// 				// $('#top_nav .navbar-collapse').removeClass('menucollapse')
				
// 			} else {
// 				elem.css('top', h_mrg);
// 				// $('#top_nav .navbar-collapse').addClass('menucollapse')
// 			}}
// 			else elem.css('top', h_mrg);       
// 		});
// 	window.onresize=function(){
// 		if ($(window).width()<768){
// 			elem.css('top', h_mrg);
// 		} else {
// 			elem.css('top', (h_hght+top));
// 		}
// 	}
// });
$(document).ready(function($) {
    $nav = $('.fixed-div');
    $nav.css('width', $nav.outerWidth());
    $window = $(window);
    $h = $nav.offset().top;
    $window.scroll(function() {
        if ($window.scrollTop() > $h) {
            $nav.addClass('fixed');
        } else {
            $nav.removeClass('fixed');
        }
    });
});


<<<<<<< HEAD

var castle = false;
if ($(window).width()<990) {
	castle = true;
}
else {
	castle = false
}
=======
//$('#openBtn').click(function(){
//$('#myModal').modal({show:true})
//});
>>>>>>> a6215ca8cdc3540eb11877bf74e95ee1158c66ed

if (castle==true) {
	var a=false;
	function menu_click_js1(){
		if (a==true) {
			$("#menu_1").css("opacity", "0");
			$("#menu_1").css("visibility", "hidden");
			$("#menu_1").css("position", "absolute");
			a=false;	
		}
		else if (a==false) {
			$("#menu_1").css("opacity", "1");
			$("#menu_1").css("visibility", "visible");
			$("#menu_1").css("position", "static");
			$("#menu_1").css("boxShadow", "0px 10px 20px transparent");			
			a=true;
		}
	}  
}	