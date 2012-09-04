$(document).ready(function() {
    //get all link with class panel
    $(window).bind('hashchange', function() {
        //reset and highlight the clicked link
        /*$('a.panel').removeClass('selected');
        $(this).addClass('selected');*/
        
        //scroll it to the destination
        var hash;
        if(window.location.hash != '') {
            hash = '#'+window.location.hash.substring(2);
        } else {
            hash = '#welcome';
        }
        $('#wrapper').scrollTo(hash, 800);
        //window.location.hash = '!'+$(this).attr('href').substring(1)
        
        //cancel the link default behavior
        return false;
    });
    //$("#kobosta_sitebundle_tshirtordertype_size").selectbox();

    // Preload Images
    $.fn.preload = function() {
        this.each(function(){
            $('<img/>')[0].src = this;
        });
    }
    $([selectedUpUrl, selectedDownUrl, selectedLeftUrl, selectedRightUrl, selectedFormOrderUrl]).preload();
    // Arrows select
    $('.uparrow img').mouseover(function() {$(this).parent().addClass('hover'); $(this).attr('src', selectedUpUrl)});
    $('.uparrow img').mouseout(function() {$(this).parent().removeClass('hover'); $(this).attr('src', unselectedUpUrl)});
    $('.downarrow img').mouseover(function() {$(this).parent().addClass('hover'); $(this).attr('src', selectedDownUrl)});
    $('.downarrow img').mouseout(function() {$(this).parent().removeClass('hover'); $(this).attr('src', unselectedDownUrl)});
    $('.leftarrow img').mouseover(function() {$(this).parent().addClass('hover'); $(this).attr('src', selectedLeftUrl)});
    $('.leftarrow img').mouseout(function() {$(this).parent().removeClass('hover'); $(this).attr('src', unselectedLeftUrl)});
    $('.rightarrow img').mouseover(function() {$(this).parent().addClass('hover'); $(this).attr('src', selectedRightUrl)});
    $('.rightarrow img').mouseout(function() {$(this).parent().removeClass('hover'); $(this).attr('src', unselectedRightUrl)});
    // Order button fix
    $('.orderarrow').mouseover(function() {$(this).addClass('hover'); $(this).find('img').attr('src', selectedOrderUrl)});
    $('.orderarrow').mouseout(function() {$(this).removeClass('hover'); $(this).find('img').attr('src', unselectedOrderUrl)});
    // Logo arrow
    $('.logoarrow').mouseover(function() {$('#logoselected').stop().animate({"opacity": "1"}, "slow");});
    $('.logoarrow').mouseout(function() {$('#logoselected').stop().animate({"opacity": "0"}, "slow");});

    // Logo select
    $("#logoselected").hover(
        function() {
            $('.downarrow img').attr('src', selectedDownUrl);
            $(this).stop().animate({"opacity": "1"}, "slow");
        },
        function() {
            $('.downarrow img').attr('src', unselectedDownUrl);
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
    $('.info').mouseover(function() {$(this).attr('src', selectedInfoUrl)});
    $('.info').mouseout(function() {$(this).attr('src', infoUrl)});
    
    $('#order-now-button button').mouseover(function() {$(this).css('background', "#292626 url('"+selectedFormOrderUrl+"')")});
    $('#order-now-button button').mouseout(function() {$(this).css('background', "#292626 url('"+unselectedFormOrderUrl+"')")});

    // About window
    $('.info').click(function() {
        $('#about').css('visibility', 'visible');
        /*$('#about').css('top', $('#order').scrollTop());*/
    });
    $('.xinfo').click(function() {
        $('#about').css('visibility', 'hidden');
    });
    $(document).keyup(function(e) {
        if (e.keyCode == 27) { $('#about').css('visibility', 'hidden'); }   // esc
    });

    // Tshirt month select
    myTransitionBoxApi = $('#tshirts-pic').transitionBox();
    curMonth = new Date();
    $('#tshirts-prevmonth, #tshirts-nextmonth').click(function() {
        changeMonth($(this).data('month'));
    });
    $('#tshirts-prevmonth').data('month', new Date());
    $('#kobosta_sitebundle_tshirtordertype_tshirt').parent().hide();

    //resize all the items according to the new browser size
    $(window).resize(function () {
        //call the resizePanel function
        resizePanel();
    });
    resizePanel(); // This HAS to be last

    // Fix size select borders
    $('#kobosta_sitebundle_tshirtordertype_size').wrap('<div class="sbSelector" />');
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
    $('#tshirts-pic').replaceWith('<div id="tshirts-pic"></div>');
    myTransitionBoxApi = $('#tshirts-pic').transitionBox({"height": Math.round($(window).height()*0.55), "width": width});
    changeMonth(curMonth, 0);
    $('#about-inner').innerstaticHeight();
}

function changeMonth(month, duration) {
    if(typeof duration == "undefined") {
        duration = 1000;
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
    curMonth = month;
    myTransitionBoxApi.show(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].logo, sliderdir, duration, 'linear', true, function() {
        //myTransitionBoxApi.clearCache();
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
    $('#order-bottom .otshirttitle').html(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].title);
    $('#order-bottom .otshirtname').html(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].description);
    $('#order-bottom .otshirtprice').html(monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].price+'&euro;');
    /*var sizes = monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()].sizes;
    var sizetextstr = '';
    var sizesstr = '';
    for(size in sizes) {
        sizetextstr = sizetextstr + ', ' + sizes[size];
        sizesstr = sizesstr + '<option value='+size+'>'+sizes[size]+'</option>';
    }
    $('#kobosta_sitebundle_tshirtordertype_size').html(sizesstr);
    $('#order-sizes div').html(sizetextstr.substring(2));*/
    var tshirt = monthlyTshirts[pad(month.getMonth()+1, 2)+'_'+month.getFullYear()];
    $('#tshirts-text').html(tshirt.monthtext+' / '+tshirt.title.replace(new RegExp(' ', 'g'),'')+' / '+tshirt.stock+'LEFT');
}

(function($) {
  $.fn.innerstaticHeight = function() {
        var heightOfOuterfixed = $(window).height(),
        offset = $('#about-inner').offset(),
        topOfInnerstatic2 = offset.top,
        potentialHeight = heightOfOuterfixed - topOfInnerstatic2;

        $('#about-inner').css('height',potentialHeight);
  }
})(jQuery);