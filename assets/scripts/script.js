$(".copyright").find("span").append(new Date().getFullYear())
$('.toggler').click(function () {
    $('nav ul').toggleClass('down')
    if ($('nav ul').hasClass('down')) {
        $(this).empty().append(`
            <i class="fas fa-times" aria-hidden="true"></i>
        `)
    } else {
        $(this).empty().append(`
            <i class="fas fa-bars" aria-hidden="true"></i>
        `)
    }
})
if ($(document).scrollTop() > 50) {
    $("nav").addClass("bg")
} else {
    $("nav").removeClass("bg")
}
$(document).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $("nav").addClass("bg")
    } else {
        $("nav").removeClass("bg")
    }
})
$(".heading").click(function () {
    $(".heading").removeClass("active")
    $(this).toggleClass("active")
    let height = $(this).siblings(".content-wrapper").find(".content")[0].clientHeight
    $(".content-wrapper").css({
        "height": 0
    })
    $(".heading").find(".action").empty().append(`
    <i class="fa fa-plus" aria-hidden="true"></i>
    `)
    if ($(this).siblings(".content-wrapper")[0].clientHeight == 0) {
        $(this).siblings(".content-wrapper").css({
            "height": `${height}px`
        })
        $(this).find(".action").empty().append(`
            <i class="fa fa-minus" aria-hidden="true"></i>
        `)
    } else {
        $(this).toggleClass("active")
        $(this).siblings(".content-wrapper").css({
            "height": `0px`
        })
        $(this).find(".action").empty().append(`
            <i class="fa fa-plus" aria-hidden="true"></i>
        `)
    }
})