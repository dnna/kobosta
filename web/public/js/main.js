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
        window.location.hash = '!'+$(this).attr('href').substring(1)
        ftbmiVisibility($(this).attr('href').substring(1));
        
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
    $("#logoselected").hover(
        function() {
            $(this).stop().animate({"opacity": "1"}, "slow");
        },
        function() {
            $(this).stop().animate({"opacity": "0"}, "slow");
        }
    );
    //$('#logo img').mouseover(function() {$(this).attr('src', unselectedLogoUrl)});
    //$('#logo img').mouseout(function() {$(this).attr('src', selectedLogoUrl)});
    $('.fb').mouseover(function() {$(this).attr('src', selectedFbUrl)});
    $('.fb').mouseout(function() {$(this).attr('src', fbUrl)});
    $('.twitter').mouseover(function() {$(this).attr('src', selectedTwitterUrl)});
    $('.twitter').mouseout(function() {$(this).attr('src', twitterUrl)});
    $('.blog').mouseover(function() {$(this).attr('src', selectedBlogUrl)});
    $('.blog').mouseout(function() {$(this).attr('src', blogUrl)});
    $('.mail').mouseover(function() {$(this).attr('src', selectedMailUrl)});
    $('.mail').mouseout(function() {$(this).attr('src', mailUrl)});
    $('.info').mouseover(function() {$(this).attr('src', selectedInfoUrl)});
    $('.info').mouseout(function() {$(this).attr('src', infoUrl)});

    // Tshirt month select
    myTransitionBoxApi = $('#tshirts-pic').transitionBox({"height": 300});
    $('#tshirts-prevmonth, #tshirts-nextmonth').click(function() {
        changeMonth($(this).data('month'));
    });
    changeMonth(new Date(), 0);
    $('#tshirts-prevmonth').data('month', new Date());
    $('#kobosta_sitebundle_tshirtordertype_tshirt').parent().hide();

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
    var hash;
    if(window.location.hash != '') {
        hash = '#'+window.location.hash.substring(2);
    } else {
        hash = '#welcome';
    }
    $('#wrapper').scrollTo(hash, 0);
    ftbmiVisibility(hash.substring(1));
}

function ftbmiVisibility(link, speed) {
    // FTBMi
    if(link == 'welcome') {
        $('.topright').stop().animate({"opacity": "0"}, "slow");
    } else {
        $('.topright').stop().animate({"opacity": "1"}, "slow");
    }
}

function changeMonth(month, duration) {
    if(typeof duration == "undefined") {
        duration = 500;
    }
    function pad(num, size) {
        var s = num+"";
        while (s.length < size) s = "0" + s;
        return s;
    }
    $('#tshirts-prevmonth').hide();
    $('#tshirts-nextmonth').hide();
    var sliderdir;
    if(month > $('#tshirts-prevmonth').data('month')) {
        sliderdir = 'slideleft';
    } else {
        sliderdir = 'slideright';
    }
    myTransitionBoxApi.show(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].logo, sliderdir, duration, 'linear', true, function() {
        myTransitionBoxApi.clearCache();
        var prevMonth = new Date(new Date(month).setMonth(month.getMonth()-1));
        var nextMonth = new Date(new Date(month).setMonth(month.getMonth()+1));
        if(typeof monthlyTshirts[pad(prevMonth.getMonth()+1, 2)+'_'+prevMonth.getFullYear()] != "undefined") {
            $('#tshirts-prevmonth').show();
            $('#tshirts-prevmonth').data('month', prevMonth);
        } else {
            $('#tshirts-prevmonth').hide();
        }
        if(typeof monthlyTshirts[pad(nextMonth.getMonth()+1, 2)+'_'+nextMonth.getFullYear()] != "undefined") {
            $('#tshirts-nextmonth').show();
            $('#tshirts-nextmonth').data('month', nextMonth);
        } else {
            $('#tshirts-nextmonth').hide();
        }
    });
    $('#order-left img').attr('src', monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].fabric);
    $('#order-bottom h1').html(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].title);
    $('#order-bottom div').html(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].description);
    var sizes = monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].sizes;
    var sizetextstr = '';
    var sizesstr = '';
    for(size in sizes) {
        sizetextstr = sizetextstr + ', ' + sizes[size];
        sizesstr = sizesstr + '<option value='+size+'>'+sizes[size]+'</option>';
    }
    $('#kobosta_sitebundle_tshirtordertype_size').html(sizesstr);
    $('#order-sizes div').html(sizetextstr.substring(2));
    $('#kobosta_sitebundle_tshirtordertype_tshirt').val(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].tshirtid).change();
}