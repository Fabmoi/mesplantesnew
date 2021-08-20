<?php require 'headerwelcomemodal.php'; ?>

<title>Mes plantes</title>
<body onload="prot()" onmousedown="return false" onselectstart="return false">
  <!--
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $("body").on("contextmenu",function(e){
              return false;
          });
      }); 
    </script>
-->
<section class="all-menu-scroll">                       <!-- MENU DÉROULANT -->
    <ul class="menu-scroll" onmouseover="changetext()" onmouseout="starttext()">   
        <li class="menu-green"><a id="js-menu-change-text">Choisir une fiche info ...</a>
            <ul>
                <li><a href="#">Adenium</a>
                    <ul>
                        <li><a href="link/adeniumindex.php">Accueil</a></li>
                        <li><a href="link/adeniumindex.php#obesum">obesum</a></li>
                    </ul>
                </li>
                <li><a href="#">Alocasia</a>
                    <ul>
                        <li><a href="link/alocasiaindex.php">Accueil</a></li>
                        <li><a href="link/alocasiaindex.php#amazonica">amazonica polly</a></li>
                        <li><a href="link/alocasiaindex.php#wentii">wentii</a></li>
                    </ul>
                </li>
                <li><a href="#">Aloe</a>
                    <ul>
                        <li><a href="link/aloeindex.php">Accueil</a></li>
                        <li><a href="link/aloeindex.php#humilis">humilis</a></li>
                        <li><a href="link/aloeindex.php#melanacantha">melanacantha</a></li>
                        <li><a href="link/aloeindex.php#rauhii">rauhii</a></li>
                        <li><a href="link/aloeindex.php#sp1">sp 1</a></li>   
                    </ul>
                </li>
                <li><a href="#">Anthurium</a>
                    <ul>
                        <li><a href="link/anthuriumindex.php">Accueil</a></li>
                        <li><a href="link/anthuriumindex.php#anthuriumblacklove">black love</a></li>
                        <li><a href="link/anthuriumindex.php#anthuriummadural">madural</a></li>
                        <li><a href="link/anthuriumindex.php#anthuriumsamora">samora</a></li>
                        <li><a href="link/anthuriumindex.php#anthurium">sp</a></li>
                    </ul>
                </li>
                <li><a href="#">Broméliacées</a>
                    <ul>
                        <li><a href="link/bromeliaceesindex.php">Accueil</a></li>
                        <li><a href="link/bromeliaceesindex.php#carolinaetricolor">Neoregelia carolinae tricolor</a></li>
                    </ul>
                </li>
                <li><a href="#">Cactus</a>
                    <ul>
                        <li><a href="link/othercactusindex.php">Accueil</a></li>
                        <li><a href="link/othercactusindex.php#myriostigma">Astrophytum myriostigma</a></li>
                        <li><a href="link/othercactusindex.php#cornifera">Coryphanta cornifera</a></li>
                        <li><a href="link/othercactusindex.php#grusonii">Echinocactus grusonii</a></li>
                        <li><a href="link/othercactusindex.php#multicostatus">Echinofossulocactus multicostatus</a></li>
                        <li><a href="link/othercactusindex.php#subdenudata">Echinopsis subdenudata</a></li>
                        <li><a href="link/othercactusindex.php#espostoa">Espostoa</a></li>
                        <li><a href="link/othercactusindex.php#aureiflora">Matucana aureiflora</a></li>
                        <li><a href="link/othercactusindex.php#madisonorium">Matucana madisonorium</a></li>
                        <li><a href="link/othercactusindex.php#polzii">Matucana polzii</a></li>
                        <li><a href="link/othercactusindex.php#celsianus">Oreocereus celsianus</a></li>
                        <li><a href="link/othercactusindex.php#azureus">Pilosocereus azureus</a></li>
                        <li><a href="link/othercactusindex.php#coryne">Stetsonia coryne</a></li>
                    </ul>
                </li>
                <li><a href="#">Cactus en suspension</a>
                    <ul>
                        <li><a href="link/cactussuspendedindex.php">Accueil</a></li>
                        <li><a href="link/cactussuspendedindex.php#macranthus">Disocactus macranthus</a></li>
                        <li><a href="link/cactussuspendedindex.php#anguliger">Epiphyllum anguliger</a></li>
                        <li><a href="link/cactussuspendedindex.php#salicornioides">Hatiora salicornioides</a></li>
                        <li><a href="link/cactussuspendedindex.php#cruciformis">Lepismium cruciformis</a></li>
                        <li><a href="link/cactussuspendedindex.php#ramulosa">Pseudorhipsalis ramulosa</a></li>
                        <li><a href="link/cactussuspendedindex.php#Rhipsalis">Rhipsalis</a></li>
                        <li><a href="link/cactussuspendedindex.php#validus">Selenicereus validus</a></li>
                    </ul>
                </li>
                <li><a href="#">Calathea</a>
                    <ul>
                        <li><a href="link/calatheaindex.php">Accueil</a></li>
                        <li><a href="link/calatheaindex.php#crocata">crocata</a></li>
                        <li><a href="link/calatheaindex.php#freddie">freddie</a></li>
                        <li><a href="link/calatheaindex.php#lancifolia">lancifolia</a></li>
                        <li><a href="link/calatheaindex.php#leuconera">leuconera</a></li>
                        <li><a href="link/calatheaindex.php#makoyana"> makoyana</a></li>
                        <li><a href="link/calatheaindex.php#orbifolia">orbifolia</a></li>
                        <li><a href="link/calatheaindex.php#ornatabeautystar">ornata beauty star</a></li>
                        <li><a href="link/calatheaindex.php#roseopictadottie">roseopicta dottie</a></li>
                        <li><a href="link/calatheaindex.php#vittata">vittata</a></li>
                    </ul>
                </li>
                <li><a href="#">Carnivores</a>
                    <ul>
                        <li><a href="link/carnivorousindex.php">Accueil</a></li>
                        <li><a href="link/carnivorousindex.php#muscipula">Dionaea muscipula</a></li>
                        <li><a href="link/carnivorousindex.php#Nepenthes">Nepenthes</a></li>
                        <li><a href="link/carnivorousindex.php#nepenthescadre">Nepenthes en cadre</a></li>
                        <li><a href="link/carnivorousindex.php#pinguicula">Pinguicula</a></li>
                        <li><a href="link/carnivorousindex.php#purpurea">Sarracenia purpurea</a></li>
                    </ul>
                </li>
                <li><a href="#">Crassula</a>
                    <ul>
                        <li><a href="link/crassulaindex.php">Accueil</a></li>
                        <li><a href="link/crassulaindex.php#ovata">ovata</a></li>
                        <li><a href="link/crassulaindex.php#gollum">ovata gollum</a></li>
                        <li><a href="link/crassulaindex.php#sunset">ovata sunset</a></li>
                        <li><a href="link/crassulaindex.php#pyramidalis">pyramidalis</a></li>
                    </ul>
                </li>
                <li><a href="#">Dracaena</a>
                    <ul>
                        <li><a href="link/dracaenaindex.php">Accueil</a></li>
                        <li><a href="link/dracaenaindex.php#Dracaena">Dracaena</a></li>
                        <li><a href="link/dracaenaindex.php#fragrans">fragrans</a></li>
                        <li><a href="link/dracaenaindex.php#surculosa">surculosa</a></li>
                    </ul>
                </li>
                <li><a href="#">Euphorbes</a>
                    <ul>
                        <li><a href="link/euphorbiasindex.php">Accueil</a></li>
                        <li><a href="link/euphorbiasindex.php#aeruginosa">aeruginosa</a></li>
                        <li><a href="link/euphorbiasindex.php#decaryi">decaryi</a></li>
                        <li><a href="link/euphorbiasindex.php#enopla">enopla</a></li>
                        <li><a href="link/euphorbiasindex.php#erythrea">erythrea</a></li>
                        <li><a href="link/euphorbiasindex.php#horrida">horrida</a></li>
                        <li><a href="link/euphorbiasindex.php#inconstantia">inconstantia</a></li>
                        <li><a href="link/euphorbiasindex.php#mammillarisvariegata">mammillaris variegata</a></li>
                        <li><a href="link/euphorbiasindex.php#polyacantha">polyacantha</a></li>
                        <li><a href="link/euphorbiasindex.php#pseudoglobosa">pseudoglobosa</a></li>
                        <li><a href="link/euphorbiasindex.php#trigona">trigona</a></li>
                        <li><a href="link/euphorbiasindex.php#trigonarubra">trigona rubra</a></li>
                    </ul>
                </li>
                <li><a href="#">Ferocactus</a>
                    <ul>
                        <li><a href="link/ferocactusindex.php">Accueil</a></li>
                        <li><a href="link/ferocactusindex.php#glaucescens">glaucescens</a></li>
                        <li><a href="link/ferocactusindex.php#stainesii">stainesii</a></li>
                    </ul>
                </li>
                <li><a href="#">Ficus</a>
                    <ul>
                        <li><a href="link/ficusindex.php">Accueil</a></li>
                        <li><a href="link/ficusindex.php#retusa">Ficus retusa</a></li>
                    </ul>
                </li>
                <li><a href="#">Fougères</a>
                    <ul>
                        <li><a href="link/fernsindex.php">Accueil</a></li>
                        <li><a href="link/fernsindex.php#niduscrissie">Asplenium nidus crissie</a></li>
                        <li><a href="link/fernsindex.php#emeiensis">Coniogramme emeiensis</a></li>
                    </ul>
                </li>
                <li><a href="#">Grimpantes</a>
                    <ul>
                        <li><a href="link/creepingplantindex.php">Accueil</a></li>
                        <li><a href="link/creepingplantindex.php#gloriosa">Gloriosa</a></li>
                    </ul>
                </li>
                <li><a href="#">Gymnocalycium</a>
                    <ul>
                        <li><a href="link/gymnocaliciumindex.php">Accueil</a></li>
                        <li><a href="link/gymnocaliciumindex.php#andreae">andreae</a></li>
                        <li><a href="link/gymnocaliciumindex.php#baldianum">baldianum</a></li>
                        <li><a href="link/gymnocaliciumindex.php#mihanovicii">mihanovicii</a></li>
                        <li><a href="link/gymnocaliciumindex.php#pflanzii">pflanzii</a></li>
                        <li><a href="link/gymnocaliciumindex.php#quehlianum">quehlianum</a></li>
                    </ul>
                </li>
                <li><a href="#">Kalanchoe</a>
                    <ul>
                        <li><a href="link/kalanchoeindex.php">Accueil</a></li>
                        <li><a href="link/kalanchoeindex.php#beharensis">beharensis</a></li>
                        <li><a href="link/kalanchoeindex.php#thyrsiflora">thyrsiflora</a></li>
                    </ul>
                </li>               
                <li><a href="#">Mammillaria</a>
                    <ul>
                        <li><a href="link/mammillariaindex.php">Accueil</a></li>
                        <li><a href="link/mammillariaindex.php#elongata">elongata anguinea</a></li>
                        <li><a href="link/mammillariaindex.php#longimamma">longimamma</a></li>
                        <li><a href="link/mammillariaindex.php#toluca">toluca</a></li>
                        <li><a href="link/mammillariaindex.php#sp1">sp 1</a></li>
                    </ul>
                </li>
                <li><a href="#">Monstera</a>
                    <ul>
                        <li><a href="link/monsteraindex.php">Accueil</a></li>
                        <li><a href="link/monsteraindex.php#adansonii">adansonii</a></li>
                        <li><a href="link/monsteraindex.php#deliciosa">deliciosa</a></li>
                    </ul>
                </li>              
                <li><a href="#">Notocactus</a>
                    <ul>
                        <li><a href="link/notocactusindex.php">Accueil</a></li>
                        <li><a href="link/notocactusindex.php#haselbergii">haselbergii</a></li>
                        <li><a href="link/notocactusindex.php#magnificus">magnificus</a></li>
                    </ul>
                </li>              
                <li><a href="#">Opuntia</a>
                    <ul>
                        <li><a href="link/opuntiaindex.php">Accueil</a></li>
                        <li><a href="link/opuntiaindex.php#monacanthamonstruosisvariegata">monacantha monstruosis variegata</a></li>
                        <li><a href="link/opuntiaindex.php#sp">sp</a></li>
                    </ul>
                </li>
                <li><a href="#">Orchidées</a>
                    <ul>
                        <li><a href="link/orchidsindex.php">Accueil</a></li>
                        <li><a href="link/orchidsindex.php#nobile">Dendrobium nobile</a></li>
                        <li><a href="link/orchidsindex.php#maudiae">Paphiopedilum maudiae</a></li>
                        <li><a href="link/orchidsindex.php#pinocchio">Paphiopedilum pinocchio</a></li>
                        <li><a href="link/orchidsindex.php#planifolia">Vanilla planifolia</a></li>
                    </ul>
                </li>
                <li><a href="#">Palmiers</a>
                    <ul>
                        <li><a href="link/palmtreesindex.php">Accueil</a></li>
                        <li><a href="link/palmtreesindex.php#recurvata">Beaucarnea recurvata</a></li>
                    </ul>
                </li>
                <li><a href="#">Phalaenopsis</a>
                    <ul>
                        <li><a href="link/phalaenopsisindex.php">Accueil</a></li>
                        <li><a href="link/phalaenopsisindex.php#blanchecoeurjaune">blanche coeur jaune</a></li>
                        <li><a href="link/phalaenopsisindex.php#blanchecoeurmauve">blanche coeur mauve</a></li>
                        <li><a href="link/phalaenopsisindex.php#column">colonne</a></li>
                        <li><a href="link/phalaenopsisindex.php#fullersgoldenstripe">fuller's golden stripe</a></li>
                        <li><a href="link/phalaenopsisindex.php#fullerssunset">fuller's sunset</a></li>
                        <li><a href="link/phalaenopsisindex.php#jaune">jaune</a></li>
                        <li><a href="link/phalaenopsisindex.php#jaunetachetee">jaune tachetée</a></li>
                        <li><a href="link/phalaenopsisindex.php#magicart">magic art</a></li>
                        <li><a href="link/phalaenopsisindex.php#papagayo">papagayo</a></li>
                        <li><a href="link/phalaenopsisindex.php#petiteblanchesuspendue">petite blanche suspendue</a></li>
                        <li><a href="link/phalaenopsisindex.php#petitemauvesuspendue">petite mauve suspendue</a></li>
                        <li><a href="link/phalaenopsisindex.php#petiteroseclaircolonne">petite rose clair colonne</a></li>
                        <li><a href="link/phalaenopsisindex.php#petiterosefonceecolonne">petite rose foncée colonne</a></li>
                        <li><a href="link/phalaenopsisindex.php#purplespotted">purple spotted</a></li>
                        <li><a href="link/phalaenopsisindex.php#rosecoeurcolore">rose coeur coloré</a></li>
                        <li><a href="link/phalaenopsisindex.php#rosemouchetee">rose mouchetée</a></li>
                        <li><a href="link/phalaenopsisindex.php#surfsong">surfsong</a></li>
                        <li><a href="link/phalaenopsisindex.php#suspended">suspension</a></li>
                        <li><a href="link/phalaenopsisindex.php#yellowcolonne">yellow colonne</a></li>
                    </ul>
                </li>
                <li><a href="#">Philodendrons</a>
                    <ul>
                        <li><a href="link/philodendronsindex.php">Accueil</a></li>
                        <li><a href="link/philodendronsindex.php#whitemeasure">Philodendron white measure</a></li>
                        <li><a href="link/philodendronsindex.php#spruceanum">Thaumatophyllum spruceanum</a></li>
                    </ul>
                </li>
                <li><a href="#">Polyscias</a>
                    <ul>
                        <li><a href="link/polysciasindex.php">Accueil</a></li>
                        <li><a href="link/polysciasindex.php#fabian">fabian</a></li>
                        <li><a href="link/polysciasindex.php#hawaiianaming">hawaiiana ming</a></li>
                    </ul>
                </li>
                <li><a href="#">Autres succulentes</a>
                    <ul>
                        <li><a href="link/othersucculentsindex.php">Accueil</a></li>
                        <li><a href="link/othersucculentsindex.php#cooperi">Adromischus cooperi</a></li>
                        <li><a href="link/othersucculentsindex.php#americanavariegata">Agave americana variegata</a></li>
                        <li><a href="link/othersucculentsindex.php#rufescensvariegata">Anacampseros rufescens variegata</a></li>
                        <li><a href="link/othersucculentsindex.php#lehmannii">Corpuscularia lehmannii</a></li>
                        <li><a href="link/othersucculentsindex.php#echinatum">Delosperma echinatum</a></li>
                        <li><a href="link/othersucculentsindex.php#pulchra">Frithia pulchra</a></li>
                        <li><a href="link/othersucculentsindex.php#lithops">Lithops</a></li>
                        <li><a href="link/othersucculentsindex.php#titanopsiscalcarea">Titanopsis calcarea</a></li>
                    </ul>
                </li>
                <li><a href="#">Tillandsia</a>
                    <ul>
                        <li><a href="link/tillandsiaindex.php">Accueil</a></li>
                        <li><a href="link/tillandsiaindex.php#tillandsia">Tillandsia</a></li>
                        <li><a href="link/tillandsiaindex.php#ionantha">Tillandsia ionantha</a></li>
                    </ul>
                </li>
                <li><a href="#">Autres plantes vertes</a>
                    <ul>
                        <li><a href="link/otherplantsindex.php">Accueil</a></li>
                        <li><a href="link/otherplantsindex.php#pinkpassion">Aglaonema pink passion</a></li>
                        <li><a href="link/otherplantsindex.php#strawberry">Caladium strawberry</a></li>
                        <li><a href="link/otherplantsindex.php#jurassica">Solanum quitoense jurassica</a></li>
                        <li><a href="link/otherplantsindex.php#sensation">Spathiphyllum sensation</a></li>
                        <li><a href="link/otherplantsindex.php#wallisii">Spathiphyllum wallisii</a></li>
                    </ul>
                </li>
                <li><a href="#">Autres suspendues</a>
                    <ul>
                        <li><a href="link/othersuspendedindex.php">Accueil</a></li>
                        <li><a href="link/othersuspendedindex.php#marmoratus">Aeschynanthus marmoratus</a></li>
                    </ul>
                </li>
                <li><a href="#">Yucca</a>
                    <ul>
                        <li><a href="link/yuccaindex.php">Accueil</a></li>
                        <li><a href="link/yuccaindex.php#elephantipes">elephantipes</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<header>                                                <!--TITRES ET SOUS-TITRES BOUTONS FENÊTRES MODALES - ARROSAGES - BOUTURAGES - PARASITES - REMPOTAGES -->
    <section class="site-desc">
        <div><h1 class="title" id="top">Mes plantes
        </h1>
            <p>
                <h2 class="sub-title">
                    Ici, je vais présenter les plantes que j'ai et aussi que j'ai eues avec une petite description de leur maintenance.
                </h2>
            </p>
            <p>
                <h3><br/>
                    Il est possible qu'il s'y trouve une ou l'autre erreur dans les identifications ou variétés car la plupart je les ai eues sans noms et j'ai effectué des recherches moi-même mais celà n'est pas toujours évident d'identifier les espèces et variétés et il arrive que les noms soient juste commerciaux et aussi d'avoir des hybrides.
                </h3>
            </p>
            <p>
                <h2 class="sub-sub-title">
                    Cliquez sur les images pour en savoir plus.
                </h2>
            </p>
        </div>
    </section>                                          
<footer class="all-btn-header">
        <section class="modal-window">
                <button class="js-modal modal-btn modal-update"><a href="modal.php#modal-update">Liste des mises à jour</a></button>
                <button class="js-modal modal-btn modal-soon"><a href="modal.php#modal-soon">Liste des choses à venir</a></button>
                <button class="js-modal modal-btn modal-author"><a href="modal.php#modal-author">À propos de l'auteur</a></button>
        </section>
        <section class="section-btn-nav-header">
                <!--
                <button class="btn-nav-header nav-watering"><a href="link/wateringindex.php" alt="En savoir plus sur mes arrosages" title="En savoir plus sur mes arrosages" >Arrosages </a></button>
                <button class="btn-nav-header nav-cutting"><a href="link/cuttingindex.php" alt="En savoir plus sur mes bouturages" title="En savoir plus sur mes bouturages" >Bouturages</a></button>
                <button class="btn-nav-header nav-vermin"><a href="link/verminindex.php" alt="En savoir plus sur mes observations de parasites" title="En savoir plus sur mes observations de parasites">Parasites </a></button>
                <button class="btn-nav-header nav-repotting"><a href="link/repottingindex.php" alt="En savoir plus sur mes rempotages" title="En savoir plus sur mes rempotages">Rempotages</a></button>
                -->
                <button class="btn-nav-header nav-phalaenopsis-column"><a href="link/phalaenopsiscolumn.php" alt="Comment j'installe des phalaenopsis en colonne" title="Comment j'installe des phalaenopsis en colonne" >Installation phalaenopsis en colonne</a></button>
                <button class="btn-nav-header nav-phalaenopsis-suspended"><a href="link/phalaenopsissuspended.php" alt="Comment j'installe des phalaenopsis en suspension" title="Comment j'installe des phalaenopsis en suspension" >Installation phalaenopsis en suspension</a></button>
                <button class="btn-nav-header nav-nepenthes-frame"><a href="link/nepenthescadre.php" alt="Comment j'installe des nepenthes en cadre" title="Comment j'installe des nepenthes en cadre" >Installation Nepenthes en cadre</a></button>
                <button class="btn-nav-header nav-install-tillandsia"><a href="link/installtillandsia.php" alt="Comment j'accroche mes Tillandsia" title="Comment j'accroche mes Tillandsia" >Accrochage Tillandsia</a></button>
        </section>
</footer>
</header>
        <hr><hr>
<main>                                                  <!-- CATÉGORIES DE PLANTES -->
<section class="category-plant">                        <!-- ADENIUM -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Adenium</div><div class="category-in">Cliquez sur l'image pour en savoir plus</div></div><a href="link/adeniumindex.php">
    <img class="resize" src="assets/img/welcome/species/adenium.jpg" alt="En savoir plus sur mes Adenium" title="En savoir plus sur mes Adenium" onmouseover="javascript:this.src='assets/img/welcome/species/adenium2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/adenium.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- ALOCASIA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Alocasia</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/alocasiaindex.php">
    <img class="resize" src="assets/img/welcome/species/alocasia.jpg" alt="En savoir plus sur mes Alocasia" title="En savoir plus sur mes Alocasia" onmouseover="javascript:this.src='assets/img/welcome/species/alocasia2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/alocasia.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- ALOE -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Aloe</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/aloeindex.php">
    <img class="resize" src="assets/img/welcome/species/aloe.jpg" alt="En savoir plus sur mes Aloe" title="En savoir plus sur mes Aloe" onmouseover="javascript:this.src='assets/img/welcome/species/aloe2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/aloe.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- ANTHURIUM -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Anthurium</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/anthuriumindex.php">
    <img class="resize" src="assets/img/welcome/species/anthurium.jpg" alt="En savoir plus sur mes anthurium" title="En savoir plus sur mes anthurium" onmouseover="javascript:this.src='assets/img/welcome/species/anthurium2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/anthurium.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- BROMÉLIACÉES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Broméliacées</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/bromeliaceesindex.php">
    <img class="resize" src="assets/img/welcome/species/bromeliacee.jpg" alt="En savoir plus sur mes Broméliacée" title="En savoir plus sur mes Broméliacée" onmouseover="javascript:this.src='assets/img/welcome/species/bromeliacee2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/bromeliacee.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- AUTRES CACTUS --> 
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes autres Cactus</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/othercactusindex.php">
    <img class="resize" src="assets/img/welcome/species/cactus.jpg" alt="En savoir plus sur mes Cactus" title="En savoir plus sur mes Cactus" onmouseover="javascript:this.src='assets/img/welcome/species/cactus2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/cactus.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- CACTUS SUSPENDUS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Cactus suspendus</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/cactussuspendedindex.php">
    <img class="resize" src="assets/img/welcome/species/cactussuspension.jpg" alt="En savoir plus sur mes cactus en suspension" title="En savoir plus sur mes cactus en suspension" onmouseover="javascript:this.src='assets/img/welcome/species/cactussuspension2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/cactussuspension.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- CALATHEA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Calathea</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/calatheaindex.php">
    <img class="resize" src="assets/img/welcome/species/calathea.jpg" alt="En savoir plus sur mes Calathea" title="En savoir plus sur mes Calathea" onmouseover="javascript:this.src='assets/img/welcome/species/calathea2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/calathea.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- CARNIVORES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes carnivores</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/carnivorousindex.php">
    <img class="resize" src="assets/img/welcome/species/carnivores.jpg" alt="En savoir plus sur mes Carnivores" title="En savoir plus sur mes Carnivores" onmouseover="javascript:this.src='assets/img/welcome/species/carnivores2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/carnivores.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- CRASSULA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Crassula</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/crassulaindex.php">
    <img class="resize" src="assets/img/welcome/species/crassula.jpg" alt="En savoir plus sur mes Crassula" title="En savoir plus sur mes Crassula" onmouseover="javascript:this.src='assets/img/welcome/species/crassula2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/crassula.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- DRACAENA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Dracaena</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/dracaenaindex.php">
    <img class="resize" src="assets/img/welcome/species/dracaena.jpg" alt="En savoir plus sur mes autres Dracaena" title="En savoir plus sur mes autres Dracaena" onmouseover="javascript:this.src='assets/img/welcome/species/dracaena2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/dracaena.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- EUPHORBES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Euphorbes</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/euphorbiasindex.php">
    <img class="resize" src="assets/img/welcome/species/euphorbe.jpg" alt="En savoir plus sur mes Euphorbes" title="En savoir plus sur mes Euphorbes" onmouseover="javascript:this.src='assets/img/welcome/species/euphorbe2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/euphorbe.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- FEROCACTUS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Ferocactus</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/ferocactusindex.php">
    <img class="resize" src="assets/img/welcome/species/ferocactus.jpg" alt="En savoir plus sur mes ferocactus" title="En savoir plus sur mes ferocactus" onmouseover="javascript:this.src='assets/img/welcome/species/ferocactus2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/ferocactus.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- FICUS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Ficus</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/ficusindex.php">
    <img class="resize" src="assets/img/welcome/species/ficus.jpg" alt="En savoir plus sur mes Ficus" title="En savoir plus sur mes Ficus" onmouseover="javascript:this.src='assets/img/welcome/species/ficus2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/ficus.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- FOUGÈRES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Fougères</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/fernsindex.php">
    <img class="resize" src="assets/img/welcome/species/fougeres.jpg" alt="En savoir plus sur mes Fougères" title="En savoir plus sur mes Fougères" onmouseover="javascript:this.src='assets/img/welcome/species/fougeres2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/fougeres.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- GRIMPANTES -->
    <button class="category-plant-title"><div class="category"><div class="category-out">Mes grimpantes</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/creepingplantindex.php">
      <img class="resize" src="assets/img/welcome/species/creepingplant.jpg" alt="En savoir plus sur mes grimpantes" title="En savoir plus sur mes grimpantes" onmouseover="javascript:this.src='assets/img/welcome/species/creepingplant2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/creepingplant.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- GYMNOCALICIUM -->
    <button class="category-plant-title"><div class="category"><div class="category-out">Mes Gymnocalicium</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/gymnocaliciumindex.php">
      <img class="resize" src="assets/img/welcome/species/gymnocalicium.jpg" alt="En savoir plus sur mes Gymnocalicium" title="En savoir plus sur mes Gymnocalicium" onmouseover="javascript:this.src='assets/img/welcome/species/gymnocalicium2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/gymnocalicium.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- KALANCHOE -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Kalanchoe</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/kalanchoeindex.php">
    <img class="resize" src="assets/img/welcome/species/kalanchoe.jpg" alt="En savoir plus sur mes Kalanchoe" title="En savoir plus sur mes Kalanchoe" onmouseover="javascript:this.src='assets/img/welcome/species/kalanchoe2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/kalanchoe.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- MAMMILLARIA -->
    <button class="category-plant-title"><div class="category"><div class="category-out">Mes Mammillaria</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/mammillariaindex.php">
      <img class="resize" src="assets/img/welcome/species/mammillaria.jpg" alt="En savoir plus sur mes mammillaria" title="En savoir plus sur mes mammillaria" onmouseover="javascript:this.src='assets/img/welcome/species/mammillaria2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/mammillaria.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- MONSTERA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Monstera</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/monsteraindex.php">
    <img class="resize" src="assets/img/welcome/species/monstera.jpg" alt="En savoir plus sur mes Monstera" title="En savoir plus sur mes Monstera" onmouseover="javascript:this.src='assets/img/welcome/species/monstera2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/monstera.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- NOTOCACTUS -->
    <button class="category-plant-title"><div class="category"><div class="category-out">Mes Notocactus</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/notocactusindex.php">
      <img class="resize" src="assets/img/welcome/species/notocactus.jpg" alt="En savoir plus sur mes Notocactus" title="En savoir plus sur mes Notocactus" onmouseover="javascript:this.src='assets/img/welcome/species/notocactus2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/notocactus.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- AUTRES ORCHIDÉES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes autres Orchidées</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/orchidsindex.php">
    <img class="resize" src="assets/img/welcome/species/orchidees.jpg" alt="En savoir plus sur mes Orchidées" title="En savoir plus sur mes Orchidées" onmouseover="javascript:this.src='assets/img/welcome/species/orchidees2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/orchidees.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- OPUNTIA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Opuntia</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/opuntiaindex.php">
    <img class="resize" src="assets/img/welcome/species/opuntia.jpg" alt="En savoir plus sur mes opuntia" title="En savoir plus sur mes opuntia" onmouseover="javascript:this.src='assets/img/welcome/species/opuntia2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/opuntia.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- PALMIERS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Palmiers</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/palmtreesindex.php">
    <img class="resize" src="assets/img/welcome/species/palmiers.jpg" alt="En savoir plus sur mes Palmiers" title="En savoir plus sur mes Palmiers" onmouseover="javascript:this.src='assets/img/welcome/species/palmiers2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/palmiers.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- PHALAENOPSIS -->
    <button class="category-plant-title"><div class="category"><div class="category-out">Mes Phalaenopsis</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/phalaenopsisindex.php">
      <img class="resize" src="assets/img/welcome/species/phalaenopsis.jpg" alt="En savoir plus sur mes Phalaenopsis" title="En savoir plus sur mes Phalaenopsis" onmouseover="javascript:this.src='assets/img/welcome/species/phalaenopsis2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/phalaenopsis.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- PHILODENDRONS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Philodendrons</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/philodendronsindex.php">
    <img class="resize" src="assets/img/welcome/species/philodendrons.jpg" alt="En savoir plus sur mes Philodendrons" title="En savoir plus sur mes Philodendrons" onmouseover="javascript:this.src='assets/img/welcome/species/philodendrons2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/philodendrons.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- POLYSCIAS -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Polyscias</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/polysciasindex.php">
    <img class="resize" src="assets/img/welcome/species/polyscias.jpg" alt="En savoir plus sur mes Polyscias" title="En savoir plus sur mes Polyscias" onmouseover="javascript:this.src='assets/img/welcome/species/polyscias2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/polyscias.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- AUTRES SUCCULENTES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes autres Succulentes</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/othersucculentsindex.php">
    <img class="resize" src="assets/img/welcome/species/succulentes.jpg" alt="En savoir plus sur mes autres Succulentes" title="En savoir plus sur mes autres Succulentes" onmouseover="javascript:this.src='assets/img/welcome/species/succulentes2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/succulentes.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- TILLANDSIA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Tillandsia</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/tillandsiaindex.php">
    <img class="resize" src="assets/img/welcome/species/tillandsia.jpg" alt="En savoir plus sur mes Tillandsia" title="En savoir plus sur mes Tillandsia" onmouseover="javascript:this.src='assets/img/welcome/species/tillandsia2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/tillandsia.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- AUTRES PLANTES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes autres plantes</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/otherplantsindex.php">
    <img class="resize" src="assets/img/welcome/species/vertes.jpg" alt="En savoir plus sur mes autres plantes" title="En savoir plus sur mes autres plantes " onmouseover="javascript:this.src='assets/img/welcome/species/vertes2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/vertes.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- PLANTES SUSPENDUES -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes plantes suspendues</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/othersuspendedindex.php">
    <img class="resize" src="assets/img/welcome/species/vertessuspension.jpg" alt="En savoir plus sur mes autres plantes suspendues" title="En savoir plus sur mes autres plantes suspendues" onmouseover="javascript:this.src='assets/img/welcome/species/vertessuspension2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/vertessuspension.jpg';"/></a></button>
</section>
<section class="category-plant">                        <!-- YUCCA -->
  <button class="category-plant-title"><div class="category"><div class="category-out">Mes Yucca</div><a class="category-in">Cliquez sur l'image pour en savoir plus</a></div><a href="link/yuccaindex.php">
    <img class="resize" src="assets/img/welcome/species/yucca.jpg" alt="En savoir plus sur mes Yucca" title="En savoir plus sur mes Yucca" onmouseover="javascript:this.src='assets/img/welcome/species/yucca2.jpg';"onmouseout="javascript:this.src='assets/img/welcome/species/yucca.jpg';"/></a></button>
</section>
</main>
        <hr><hr>
<footer>                                                <!-- BOUTONS ARROSAGES - BOUTURAGES - PARASITES - REMPOTAGES - TOP -->
    <!--
    <div class="all-btn-footer">
        <button class="btn-nav-footer nav-watering"><a href="link/wateringindex.php" alt="En savoir plus sur mes arrosages" title="En savoir plus sur mes arrosages" >Arrosages </a></button>
        <button class="btn-nav-footer nav-cutting"><a href="link/cuttingindex.php" alt="En savoir plus sur mes bouturages" title="En savoir plus sur mes bouturages" >Bouturages</a></button>
        <button class="btn-nav-footer nav-vermin"><a href="link/verminindex.php" alt="En savoir plus sur mes observations de parasites" title="En savoir plus sur mes observations de parasites" >Parasites </a></button>
        <button class="btn-nav-footer nav-repotting"><a href="link/repottingindex.php" alt="En savoir plus sur mes rempotages" title="En savoir plus sur mes rempotages" >Rempotages</a></button>
        <button class="btn-nav-footer nav-install-tillandsia"><a href="link/installtillandsia.php" alt="Comment j'accroche mes Tillandsia" title="Comment j'accroche mes Tillandsia" >Accrochage Tillandsia</a></button>
    </div>
    -->

    <div class="btn-top">
        <button class="btn-top-footer"><a href="#top">Aller direct sur le haut de la page.</a></button>
    </div>
</footer>
<?php require 'footerwelcomemodal.php'; ?>
</body>
</html>