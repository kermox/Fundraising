let openNavigation = $('.navbar-toggler')
openNavigation.click(function () {
  $('body').toggleClass("overflow-hidden")
  $('#overlay').toggleClass("overlay-display")
})