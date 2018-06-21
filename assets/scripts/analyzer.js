$(document).ready(function($) {
    // $("#preloader").delay(1500).fadeOut("slow");

    setInterval(function() {
        $("#pre_text").remove();
        $("#text").css('visibility', 'visible');
        $("#progress").remove();
        $("#price").css('visibility', 'visible');
    }, 2000);

});