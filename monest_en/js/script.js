//Menu function

$(function(){
$(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        });
});
//
// // JS of Gallery
// $(document).ready(function(){
//     //FANCYBOX
//     //https://github.com/fancyapps/fancyBox
//     $(".fancybox").fancybox({
//         openEffect: "none",
//         closeEffect: "none"
//     });
// });



jQuery(document).ready(function() {

  var navOffset = jQuery("nav").offset().top;
  jQuery("nav").wrap('<div class="nav-placeholder"></div>');
  jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());
  jQuery(window).scroll(function(){
    var scrollPos = jQuery(window).scrollTop();
    // jQuery(".status").html(scrollPos);
    if(scrollPos >= navOffset){
      jQuery("nav").addClass("fixed");
    }else{
      jQuery("nav").removeClass("fixed");
    }
  });

});
