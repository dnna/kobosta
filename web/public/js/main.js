$(document).ready(function() {
    //get all link with class panel
    $('a.panel').click(function () {
 
        //reset and highlight the clicked link
        $('a.panel').removeClass('selected');
        $(this).addClass('selected');
         
        //grab the current item, to be used in resize function
        current = $(this);
         
                //scroll it to the destination
        $('#wrapper').scrollTo($(this).attr('href'), 800);     
         
                //cancel the link default behavior
        return false;
    });

    //resize all the items according to the new browser size
    $(window).resize(function () {
        //call the resizePanel function
        resizePanel();
    });
    
    // Preload Images
    $.fn.preload = function() {
        this.each(function(){
            $('<img/>')[0].src = this;
        });
    }
    $([selectedArrowUrl]).preload();
    // Arrows select
    $('.arrow').mouseover(function() {$(this).parent().addClass('hover'); $(this).attr('src', selectedArrowUrl)});
    $('.arrow').mouseout(function() {$(this).parent().removeClass('hover'); $(this).attr('src', arrowUrl)});

    // Logo select
    $('#logo img').mouseover(function() {$(this).attr('src', unselectedLogoUrl)});
    $('#logo img').mouseout(function() {$(this).attr('src', selectedLogoUrl)});

    resizePanel(); // This HAS to be last
});

function resizePanel() {
 
    //get the browser width and height
    width = $(window).width();
    height = $(window).height();
 
    //get the mask height: height * total of items
    mask_height = height * $('.item').length;
         
    //set the dimension    
    $('#wrapper, .item').css({width: width, height: height});
    $('#mask').css({width: width, height: mask_height});
 
    //if the item is displayed incorrectly, set it to the corrent pos
    $('#wrapper').scrollTo($('a.selected').attr('href'), 0);
}