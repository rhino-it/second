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

var castle = false;
if ($(window).width()<990) {
    castle = true;
}
else {
    castle = false
}

if (castle==true) {
    var a=document.querySelectorAll('.menu_click > li');
    for (var i = 0; i < a.length; i++) {
        a[i].onclick = click_m;
    }
    function click_m() {
        this.children[1].classList.toggle('q1');
    }
}


  function showOrHide(cb, cat) {
    cb = document.getElementById(cb);
    cat = document.getElementById(cat);
    if (cb.checked) cat.style.display = "block";
    else cat.style.display = "none";
  }

  $(document).ready(function(){
 $("input#check").change(function(){

  if ($(this).attr("checked")) {
      $('#').fadeIn().show();
      return;
  } else {
      $('#hide').fadeOut(300); 
  }

 });
})

