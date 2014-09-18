/*global $, jQuery, alert*/

$(document).ready(function () {
    $('.vanallen').slick({
        dots: true,
        autoplay: true,
        arrows: false
    });

});

$(document).ready(function(){

            /*
             * Instance CirclePlayer inside jQuery doc ready
             *
             * CirclePlayer(jPlayerSelector, media, options)
             *   jPlayerSelector: String - The css selector of the jPlayer div.
             *   media: Object - The media object used in jPlayer("setMedia",media).
             *   options: Object - The jPlayer options.
             *
             * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
             */

            var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
            {
                m4a: "http://iws.mx/vanallen/audio/audi-signals.m4a",
                oga: "http://iws.mx/vanallen/audio/audio-signals.ogg"
                //mp3: "http://www.kaltura.com/p/1004581/sp/0/playManifest/entryId/0_dz0murd6/format/url/flavorParamId/0_gnibl24t/explorer1-voice-streaming.mp3"
            }, {
                cssSelectorAncestor: "#cp_container_1"
            });

            // This code creates a 2nd instance. Delete if not required.

            var myOtherOne = new CirclePlayer("#jquery_jplayer_2",
            {
                m4a: "http://iws.mx/vanallen/audio/explorer1-voice-streaming.m4a",
                oga: "http://iws.mx/vanallen/audio/explorer1-voice-streaming.ogg"                
                
            }, {
                cssSelectorAncestor: "#cp_container_2"
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