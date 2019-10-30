$('#card_banner').fadeIn("slow")
$('#manga_populer').slideDown("slow")
$('#logo-nakamanga').animate({
    left: 0,
    opacity: 1
}, "slow")
$('#ad_filter').slideDown("slow")

$(window).scroll(function () {
    let scWin = $(this).scrollTop();

    if (scWin > 200) {
        $('#scrl-up').fadeIn(1500)
    } else {
        $('#scrl-up').fadeOut(1500)
    }
})

$('#scrl-up').on('click', function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000)
})

if ($('.page').attr('id') == 'home') {
    $('#linkHome').attr('class', 'active')
} else if ($('.page').attr('id') == 'manga') {
    $('#linkManga').attr('class', 'active')
} else if ($('.page').attr('id') == 'genre') {
    $('#linkGenre').attr('class', 'active')
} else if ($('.page').attr('id') == 'request') {
    $('#linkRequest').attr('class', 'active')
}


for (let a = 1; a <= 9; a++) {
    // $('#up-' + a).click(function () {
    //     $('#detail-' + a).fadeOut()
    //     $(this).removeAttr('class')
    //     $(this).attr('class', 'fa fa-plus pull-right pr-2 text-white')
    //     $(this).attr('id', 'down-'+a)
    // })

    $('#down-' + a).click(function () {
        $('#detail-' + a).slideToggle()
    })
}
