
var h_hght = 170; // высота шапки
var h_mrg = 0;    // отступ когда шапка уже не видна
var elem = $('#top_nav');
             
$(function(){
 
     var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);

    }              
    $(window).scroll(function(){
        top = $(this).scrollTop();
         if ($(window).width()>767) {
        if (top+h_mrg < h_hght ) {
            elem.css('top', (h_hght-top));
            // elem.css('background-color', '#fff');
            // elem.css('color', '#fff');
           $('#top_nav .navbar-collapse').removeClass('menucollapse')
            
        } else {
            elem.css('top', h_mrg);
            // elem.css('background-color', '#253B80');
            // elem.css('color', 'white');
             $('#top_nav .navbar-collapse').addClass('menucollapse')
        }}
        else elem.css('top', h_mrg);
        
    });

 window.onresize=function(){
       if ($(window).width()<768){
        elem.css('top', h_mrg);
    } else {
        elem.css('top', (h_hght+top));
    }
}
});


<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 05b5f6e00c87e191f070e8108e6660cc4811369e
var castle = false;
if ($(window).width()<990) {
	castle = true;
}
else {
	castle = false
}
<<<<<<< HEAD
=======
//$('#openBtn').click(function(){
//$('#myModal').modal({show:true})
//});
>>>>>>> bd427794e9cf073415d22cc99995e4ad45d23696
=======

//$('#openBtn').click(function(){
//$('#myModal').modal({show:true})
//});

>>>>>>> 05b5f6e00c87e191f070e8108e6660cc4811369e

