<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Memphis | Accueil</title>
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <link rel="stylesheet" href="../css/accueil.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="../js/accueil.js" defer></script>
    </head>
    <body>

        <?php
            include("../include/header.inc.php");
        ?>

        <section id="title">
            <article>
                <p>MEMPHIS : PREMIERE <br> CAPITALE D'ÉGYPTE</p>
                <div class="bouton">
                    <button type="button" href="activites#parcours.php?lang=fr"> Découvrez nos parcours</button>
                </div>
            </article>
        </section>
        
        <section id="carrousel">
            <div id="title-map">
                <p>Découvrir</p>
                <div class="slide-container">
                    <div class="custom-slider fade">
                        <div class="slide-index">1 / 3</div>
                        <a href="../article_gastro.html">
                            <img class="slide-img" src="../assets/Img_Accueil/Caroussel_gastronomie.jpg">
                        </a>
                        <div class="slide-text">Découvrez la gastronomie égyptienne</div>
                    </div>
                    <div class="custom-slider fade">
                        <div class="slide-index">2 / 3</div>
                        <a href="#monument_sphinx">
                            <img class="slide-img" src="../assets/Img_Accueil/Caroussel_sphinx.jpg">
                        </a>
                        <div class="slide-text">Sphinx d'Âlbatre</div>
                    </div>
                    <div class="custom-slider fade">
                        <div class="slide-index">3 / 3</div>
                        <a href="#parcours">
                            <img class="slide-img" src="../assets/Img_Accueil/Caroussel_chameau.jpg">
                        </a>
                        <div class="slide-text">Découvrez les balades à dos de chameaux</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div class="slide-dot">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
        </section>
        <section id="map">
            <div id="google-map">
                <article id="title-google-map">
                    <h3>VUE SATELLITE DE MEMPHIS</h3>
                </article>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16074.360607992454!2d31.125267624909775!3d29.977201721068788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584f7de239bbcd%3A0xca7474355a6e368b!2sPyramides%20de%20Gizeh!5e1!3m2!1sfr!2sfr!4v1702293492986!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <article id="descriptif">
                <h3>LA VILLE DE MEMPHIS</h3>
                <p>
                   Memphis (en arabe منف) était la capitale du premier nome de <b>Basse-Égypte</b>,
                   le nome de la Muraille blanche. Ses vestiges se situent près des villes 
                   de <b>Mit-Rahineh</b> et <b>d'Helwan</b>, au sud du <b>Caire</b>. La légende, rapportée par 
                   Manéthon, raconte que Memphis fut fondée par le roi Ménès vers -3000. 
                   Capitale de l’Égypte durant tout l’Ancien Empire, elle est restée une 
                   cité importante tout au long de l'histoire égyptienne, placée sous la 
                   protection du dieu Ptah.
                </p>
            </article>
        </section>
        <section id="img-transition">
        </section>
        <section id="CoeurCite">
            <article id="title-coeurcite">
                <p>AU COEUR DE LA CITÉ</p>
            </article>
            <article id="set-images">
                <button type="button">En voir plus</button>
            </article>
        </section>

        <section id="infos-pratiques">
            <p>Informations pratiques</p>
            <div id="container-infos-pratiques">
                <table id="menu-liste" cellpadding="20" cellspacing="20">
                    <tr>
                        <td><a href="#">Les lieux <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="#">Locations <i class="fa-solid fa-arrow-right"></i></a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="../php/article.php">Gastronomie <i class="fa-solid fa-arrow-right"></i></a></td>
                        <td><a href="#">Accès handicapés <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Parcours <i class="fa-solid fa-arrow-right"></i></a></td>
                    </tr>
                </table>
                <img src="../assets/Img_Accueil/Infos_pratiques.jpg" alt="Image de touristes">
            </div>
        </section>

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
