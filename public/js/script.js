$(document).ready(function(){
    $('#carouselHeader').carousel({
        interval: 30000
    });

    $socialh =  $('.sponsor-zone').height();
    $abouth = $('.assos').height();
    $bgh = $socialh + $abouth;
    $bgh = $bgh + 50;
    $('.assos-bg').css('height', $bgh+"px" );

    $(document).resize(function () {
        $socialh =  $('.sponsor-zone').height();
        $abouth = $('.assos').height();
        $bgw = $socialh + $abouth;
        $bgh = $bgh + 50;
        $('.assos-bg').css('height', $bgw+"px" );

        $eventcardh = $('.event-head').width();
        $('.event-head-bg').css('width', $eventcardh+"px" );
    });

    $eventcardh = $('.event-head').width();
    $('.event-head-bg').css('width', $eventcardh+"px" );
    $('.event-head-progress').css('width', $eventcardh+"px" );
    $('.progress-title').css('width', $eventcardh+"px" );

    $('#leaderboardtable').DataTable({
        lengthChange: false,
        info: false,
        "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',
        "language": {
            "search": "Chercher un utilisateur:"
        }
    });

    var delay = 1000;
    $(".progress-bar").each(function(i){
        $(this).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );
    });


});