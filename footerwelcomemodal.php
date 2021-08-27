
<script type="text/javascript" src="assets/js/changetext.js"></script>                                      <!-- CHANGER LE TEXTE MENU DÉROULANT INDEX -->
<script type="text/javascript" src="assets/js/modal.js"></script>                                           <!-- FENÊTRE MODALE INDEX -->


<script>                                                                                                    // COLLE LE MENU DÉROULANT DE L'INDEX
    (function() {
var scrollY = function () {
  var supportPageOffset = window.pageXOffset !== undefined;
  var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");
  return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
}

var element = document.querySelector('.menu-scroll-js')
var top = element.getBoundingClientRect().top + scrollY()
var onScroll = function () {
    if (scrollY() > top) {
      element.classList.add('menu-scroll-fixed-js')
      element.classList.remove('menu-scroll-js')
    } else {
      element.classList.remove('menu-scroll-fixed-js')
      element.classList.add('menu-scroll-js')
    }
 }  
window.addEventListener('scroll', onScroll)
})()
</script>

<script>                                                                                                    // BOUTON CHANGER BACKGROUND 
    var button = document.querySelector('.change-background-anthurium')
        button.addEventListener('click', function() 
        {
            document.body.style.background = "url('../assets/img/background/anthurium.jpg')";
        });   // --------------------------------------------------------------------------------------------- ANTHURIUM
    var button = document.querySelector('.change-background-ficus')
        button.addEventListener('click', function() 
        {                                                                                                   
            document.body.style.background = "url('../assets/img/background/ficus.jpg')";
        });   // --------------------------------------------------------------------------------------------- FICUS
    var button = document.querySelector('.change-background-gloriosa')
        button.addEventListener('click', function() 
        {                                                                                                   
            document.body.style.background = "url('../assets/img/background/creepingplant.jpg')";
        });   // --------------------------------------------------------------------------------------------- GLORIOSA
    var button = document.querySelector('.change-background-solanumquitoensejurassica')
        button.addEventListener('click', function() 
        {
            document.body.style.background = "url('../assets/img/background/solanumquitoensejurassica.jpg')";
        });   // --------------------------------------------------------------------------------------------- SOLANUM
    var button = document.querySelector('.change-background-vanillaplanifolia')
        button.addEventListener('click', function() 
        {
            document.body.style.background = "url('../assets/img/background/vanillaplanifolia.jpg')";
        });   // --------------------------------------------------------------------------------------------- VANILLA
    var button = document.querySelector('.change-background-yuccaelephantipes')
        button.addEventListener('click', function() 
        {
            document.body.style.background = "url('../assets/img/background/yuccaelephantipes.jpg')";
        });   // --------------------------------------------------------------------------------------------- YUCCA
</script>   

