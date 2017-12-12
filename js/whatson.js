/**
 * Created by Kamna on 08-Dec-17.
 */
$(document).ready(function() {
    $('i').hide();
})

$(window).load(function() {
    $('i').show();

    var twitterPos = $('#twitter').position();
    var githubPos = $('#github').position();
    var stackPos = $('#stack').position();
    var linkedinPos = $('#linkedin').position();
    var codePos = $('#code').position();
    var plusPos = $('#plus').position();
    var mailPos = $('#mail').position();
    var imgPos = $('.me').position();

    $('i').css({
        position: 'absolute',
        zIndex: '1',
        top: imgPos.top + 100,
        left: '47%'
    });

    setTimeout(function() {
        $('#twitter').animate({
            top: twitterPos.top + 10,
            left: twitterPos.left - 10
        }, 500);
    }, 250);

    setTimeout(function() {
        $('#twitter').animate({
            top: twitterPos.top,
            left: twitterPos.left
        }, 250);

        $('#github').animate({
            top: githubPos.top + 10,
            left: githubPos.left - 6
        }, 500);
    }, 500);

    setTimeout(function() {
        $('#github').animate({
            top: githubPos.top,
            left: githubPos.left
        }, 250);

        $('#stack').animate({
            top: stackPos.top + 10,
            left: stackPos.left - 3
        }, 500);
    }, 750);

    setTimeout(function() {
        $('#stack').animate({
            top: stackPos.top,
            left: stackPos.left
        }, 250);

        $('#linkedin').animate({
            top: linkedinPos.top + 10,
            left: linkedinPos.left
        }, 500);
    }, 1000);

    setTimeout(function() {
        $('#linkedin').animate({
            top: linkedinPos.top,
            left: linkedinPos.left
        }, 250);

        $('#code').animate({
            top: codePos.top + 10,
            left: codePos.left + 3
        }, 500);
    }, 1250);

    setTimeout(function() {
        $('#code').animate({
            top: codePos.top,
            left: codePos.left
        }, 250);

        $('#plus').animate({
            top: plusPos.top + 10,
            left: plusPos.left + 6
        }, 500);
    }, 1500);

    setTimeout(function() {
        $('#plus').animate({
            top: plusPos.top,
            left: plusPos.left
        }, 250);

        $('#mail').animate({
            top: mailPos.top + 10,
            left: mailPos.left + 10
        }, 500);
    }, 1750);

    setTimeout(function() {
        $('#mail').animate({
            top: mailPos.top,
            left: mailPos.left
        }, 250);
    }, 2000);

})


// flipping box

$('.flip').hover(function(){
    $(this).find('.card').toggleClass('flipped');

});


// carousel
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});



/* blog carousel */
// Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
    interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});