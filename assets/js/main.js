//Global variables
var nav_c = 0;

//NAV
$("#nav_icon").on("click", function(){
    if (nav_c <= 0){
        $(this).html('<i class="fa fa-times"></i>');
        $(this).prop('href','#nav');
        nav_c++;
    } else {
        $(this).html('<i class="fa fa-bars"></i>');
        $(this).prop('href','#');
        nav_c = 0;
    }
});



$(document).ready(function() {
    if (window.location.href.indexOf("#nav") > -1) {
      $("#nav_icon").html('<i class="fa fa-times"></i>');
      $("#nav_icon").prop('href','#nav');
      nav_c = 1;
    }
  });
