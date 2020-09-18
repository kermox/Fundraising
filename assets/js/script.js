let navigation = document.getElementById("navigation");
let whiteNatigation = document.getElementById("whiteNavigation");
window.addEventListener("scroll", function () {
    if (window.pageYOffset >= 300) {
        if (navigation) {
            navigation.classList.add("active", "navigation-white")
        } else {
            whiteNatigation.classList.add("active")
        }
    } else if (window.pageYOffset < 250) {
        if (navigation) {
            navigation.classList.remove("active", "navigation-white")
        } else {
            whiteNatigation.classList.remove("active")
        }
    }
})

let openNavigation = $('.navbar-toggler')
openNavigation.click(function () {
        $('body').toggleClass("overflow-hidden")
        if (!$(navigation).hasClass("active")) {
            $('#navbar').toggleClass("nav-bg-dark")
        }
    }
)

let navLinks = $('.nav-link')
if ($(window).width() < 992) {
    navLinks.click(function () {
        $('body').toggleClass("overflow-hidden")

        if ($(navigation).hasClass("active")) {
            $('#navbar').toggleClass("nav-bg-light")
        } else
            $('#navbar').toggleClass("nav-bg-dark")
    })
}
$(window).resize(function () {
    if ($(window).width() < 992) {
        navLinks.click(function () {
            $('body').toggleClass("overflow-hidden")

            if ($(navigation).hasClass("active")) {
                $('#navbar').toggleClass("nav-bg-light")
            } else
                $('#navbar').toggleClass("nav-bg-dark")
        })
    }
});
