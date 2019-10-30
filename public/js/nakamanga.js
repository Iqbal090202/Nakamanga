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
    $('#judul-' + a).mouseleave(function () {
        $('#detail-' + a).fadeOut()
        $('#down-' + a).removeAttr('class')
        $('#down-' + a).attr('class', 'fa fa-arrow-down pull-right pr-2 text-white')
    })

    $('#down-' + a).click(function () {
        $('#detail-' + a).slideDown()
        $(this).removeAttr('class')
        $(this).attr('class', 'fa fa-minus pull-right pr-2 text-white')
    })
}
