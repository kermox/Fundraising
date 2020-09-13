let navigation = document.getElementById("navigation");
window.addEventListener("scroll", function () {
    if (window.pageYOffset >= 300) {
        navigation.classList.add("active", "navigation-white")
    } else if (window.pageYOffset < 250) {
        navigation.classList.remove("active", "navigation-white")
    }
})

let openNavigation = $('.navbar-toggler')
openNavigation.click(function () {
    $('body').toggleClass("overflow-hidden")
    $('#whiteNavigationNavbar').toggleClass("nav-bg-light")
    if ($(navigation).hasClass("active")) {
        $('#navbar').toggleClass("nav-bg-light")
    } else
        $('#navbar').toggleClass("nav-bg-dark")
})

let navLinks = $('.nav-link')
navLinks.click(function () {
    $('body').toggleClass("overflow-hidden")
    $('#whiteNavigationNavbar').toggleClass("nav-bg-light")
})

let whiteNatigation = document.getElementById("whiteNavigation");
window.addEventListener("scroll", function () {
    if (window.pageYOffset >= 300) {
        whiteNatigation.classList.add("active")
    } else if (window.pageYOffset < 250) {
        whiteNatigation.classList.remove("active")
    }
})
