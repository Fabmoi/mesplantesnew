
(function() {

  var scrollY = function () {
    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
    return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
  }

var element = document.querySelector('.menu-scroll')
var top = element.getBoundingClientRect().top + scrollY()
var onScroll = function () {
      if (scrollY() > top) {
        element.classList.add('menu-scroll-fixed')
        element.classList.remove('menu-scroll')
      } else {
        element.classList.remove('menu-scroll-fixed')
        element.classList.add('menu-scroll')
      }
   }  
window.addEventListener('scroll', onScroll)
})()


/*
COLLE LE MENU LORS DU SCROLL EN ARRIVANT AU TOP
*/