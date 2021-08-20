<?php require '../headerindexcategory.php'; ?>

<title>Galerie photo de mes Notocactus</title>
<body onload="prot()" id="notocactus-background">
<main>
    <header>                                                                                        <!-- TITLE, SUB-TITLE ET ANCRES VERS PLANTES -->
            <div>
                <h1 class="title-gallery-category" id="top"> Galerie photo de mes Notocactus</h1>
            </div>
            <section class="all-menu-scroll">                                       <!-- MENU DÉROULANT -->
                <ul class="menu-scroll">   
                    <li class="menu-green"><a id="js-menu-change-text">Végétaux présents ici ...</a>
                        <ul>
                            <li><a href="#">Choisir une plante ...</a>
                                <ul>
                                    <li><a href="#haselbergii">haselbergii</a></li>
                                    <li><a href="#magnificus">magnificus</a></li>
                                </ul>
                            </li>
                                    <li><a href="#top">Haut de la page</a></li>
                                    <li><a href="notocactusgallery.php">Voir la galerie photos</a></li>
                                    <li><a href="../index.php">Retourner sur la page d'accueil</a></li>
                        </ul>
                    </li>
                </ul>
            </section>     
    </header>
            <hr>
            <div class="species-title-gallery-category" id="haselbergii">haselbergii                <!-- HASELBERGII -->
                <a href="notocactusindex.php#haselbergii">Voir la fiche info</a>
            </div>
            <hr>
    <section>                                                                   
        <img class="flex" src="../assets/img/notocactus/gallery/notocactushaselbergii(1).jpg" alt=" haselbergii" title=" haselbergii"/>
        <img class="flex" src="../assets/img/notocactus/gallery/notocactushaselbergii(2).jpg" alt=" haselbergii" title=" haselbergii"/>
        <img class="flex" src="../assets/img/notocactus/gallery/notocactushaselbergii(3).jpg" alt=" haselbergii" title=" haselbergii"/>
        <img class="flex" src="../assets/img/notocactus/gallery/notocactushaselbergii(4).jpg" alt=" haselbergii" title=" haselbergii"/>
    </section>
            <hr>
            <div class="species-title-gallery-category" id="magnificus">magnificus                  <!-- MAGNIFICUS -->
                <a href="notocactusindex.php#magnificus">Voir la fiche info</a>
            </div>
            <hr>
    <section>                                                                   
        <img class="flex" src="../assets/img/notocactus/gallery/magnificus(1).jpg" alt=" magnificus" title=" magnificus"/>
        <img class="flex" src="../assets/img/notocactus/gallery/magnificus(2).jpg" alt=" magnificus" title=" magnificus"/>
        <img class="flex" src="../assets/img/notocactus/gallery/magnificus(3).jpg" alt=" magnificus" title=" magnificus"/>
        <img class="flex" src="../assets/img/notocactus/gallery/magnificus(4).jpg" alt=" magnificus" title=" magnificus"/>
        <img class="flex" src="../assets/img/notocactus/gallery/magnificus(5).jpg" alt=" magnificus" title=" magnificus"/>
    </section>
</main>
<footer>
    <nav class="btn-index-category">                                                                <!-- BOUTONS DE NAVIGATION ET TOP -->
    <button class="styled-btn-index"><a href="notocactusindex.php">Page des autres Notocactus</a></button>
</nav>
<?php require '../footerindexcategory.php'; ?>
</footer>
</body>
</html>