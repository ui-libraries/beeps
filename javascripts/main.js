/*global $, jQuery, alert*/

$(document).ready(function () {
    $('.vanallen').slick({
        dots: true,
        autoplay: true,
        arrows: false
    });

});


$(document).ready(function() {
    $('#toc').sticklr({
        menuWidth   : 500,
    });
});

jQuery(function($){
    $(document).ready(function () {
         $('.pull').each(function () {
             $(this).clone()
             .removeClass('pull')
             .addClass('pulledquote')
             .prependTo($(this).prev('p'));
         });
    });
});
$(document).ready(function(){
  $(".fb-caption").click(function(){
    $("p").slideToggle(1000);
  });
});