<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <title> Architecture </title>
        <link rel="stylesheet" href="../css/architecture.css">
        
    </head>
    <body>
        <?php
            include("../include/header_fr.inc.php");
        ?>

        <section class="urbanism">
            <div class="titre"><p>STYLE ET <br> ARCHITECTURE</p></div>
            
            <div class="cadre">
                <div class="texte">
                    <p>
                        L'architecture de Memphis, berceau de l'Égypte antique, fascine par son style majestueux et sa grandeur intemporelle. </p>
                    <p id="moreText">
                        Les monuments de cette ancienne capitale se distinguent par leurs formes monumentales et leurs structures imposantes.
                        <br><br> Une symétrie rigoureuse caractérise les temples et les palais, témoignant d'une conception architecturale équilibrée et harmonieuse. 
                        <br><br> Richement décorés de sculptures et de reliefs, ces édifices arborent des motifs symboliques chargés de sens religieux et politique. 
                        <br><br> La pierre calcaire, abondamment utilisée dans la région, confère aux monuments une solidité et une durabilité remarquables. 
                        <br><br> Chaque structure raconte une histoire captivante de pouvoir et de spiritualité, reflétant l'ingéniosité des anciens Égyptiens. 
                        <br><br> Les hiéroglyphes gravés dans la pierre permettent de perpétuer le récit de cette civilisation avancée. 
                        <br><br> Aujourd'hui encore, l'architecture de Memphis continue d'impressionner et d'inspirer, offrant aux visiteurs un voyage inoubliable dans l'histoire de l'humanité.
                        
                    <div id="lirePlusBtnContainer">
                        <button id="lirePlusBtn" onclick="afficherTexteComplet()">Lire plus</button>
                    </div>
        </section>


        <section class="monuments">
            <p>LES PRINCIPAUX <br> MONUMENTS</p>
            <div class="carrousel">
                <div class="container">
                    <input type="radio" name="slider" id="item-1" checked>
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <input type="radio" name="slider" id="item-4">
                    <input type="radio" name="slider" id="item-5">
                    
                    <div class="cards">
                        <label class="card" for="item-1" id="song-1">
                            <img src="../assets/Img_Architecture/image_1.jpg" alt="song">
                        </label>
                        <label class="card" for="item-2" id="song-2">
                            <img src="../assets/Img_Architecture/image_2.jpg" alt="song">
                        </label>
                        <label class="card" for="item-3" id="song-3">
                            <img src="../assets/Img_Architecture/image_3.jpeg" alt="song">
                        </label>
                        <label class="card" for="item-4" id="song-4">
                            <img src="../assets/Img_Architecture/image_4.jpg" alt="song">
                        </label>
                        <label class="card" for="item-5" id="song-5">
                            <img src="../assets/Img_Architecture/image_5.JPG" alt="song">
                        </label>
                    </div>
                    
                    <div class="nom-container">
                        <div class="scrolling-text">
                            <div class="info-area-nom" id="test">
                                <label class="nom" id="text-1">
                                    <div class="nom">Le Sphinx de Gizeh</div>
                                </label>

                                <label class="nom" id="text-2">
                                    <div class="nom">Les Pyramides de Gizeh</div>
                                </label>

                                <label class="nom" id="text-3">
                                    <div class="nom">Le Musée de Memphis</div>
                                </label>

                                <label class="nom" id="text-4">
                                    <div class="nom">Le Temple de Ptah</div>
                                </label>

                                <label class="nom" id="text-5">
                                    <div class="nom">Le Serapeum de Saqqarah </div>
                                </label>
                                
                            </div>
                        </div>
                    </div>

                    <div class="footer-container">
                        <div class="scrolling-text">
                            <div class="info-area" id="test">

                                <label class="text" id="text-1">
                                    <div class="title">Le Sphinx de Gizeh, une imposante sculpture au corps de lion et à la tête de pharaon, est l'un des symboles les plus emblématiques de l'Égypte ancienne. Gardien silencieux des pyramides de Gizeh, il mesure 73 mètres de long et 20 mètres de haut, témoignant de l'ingéniosité architecturale des anciens Égyptiens. Cet énigmatique gardien de la nécropole continue d'inspirer admiration et mystère.</div>
                                </label>

                                <label class="text" id="text-2">
                                    <div class="title">Les Pyramides de Gizeh, parmi les Sept Merveilles du Monde antique, demeurent les structures les plus célèbres de Memphis. Construites pour abriter les tombeaux des pharaons Khéops, Khéphren et Mykérinos, ces monuments massifs, avec leurs blocs de calcaire parfaitement taillés, sont des chefs-d'œuvre de l'architecture égyptienne antique, fascinant les visiteurs du monde entier depuis des millénaires.</div>
                                </label>

                                <label class="text" id="text-3">
                                    <div class="title">Le Musée de Memphis, situé sur le site archéologique, offre une immersion captivante dans l'histoire de la ville. Abritant des artefacts tels que des statues, des bijoux et des objets rituels, le musée retrace l'évolution de Memphis, de son statut de capitale à son déclin, offrant aux visiteurs une compréhension approfondie de la civilisation égyptienne.</div>
                                </label>

                                <label class="text" id="text-4">
                                    <div class="title">Le Temple de Ptah, dédié au dieu créateur, est un autre trésor de Memphis. Construit au cœur de la ville, il symbolise la dévotion religieuse et la puissance politique de l'ancienne Égypte. Les vestiges de ce temple révèlent des salles de cérémonie richement ornées, soulignant l'importance du culte de Ptah dans la vie quotidienne des anciens Égyptiens.</div>
                                </label>

                                <label class="text" id="text-5">
                                    <div class="title">Le Serapeum de Saqqarah, à proximité de Memphis, est un complexe souterrain qui abritait les sépultures sacrées des taureaux Apis, vénérés en tant que manifestations du dieu Ptah. Les vastes galeries souterraines, creusées dans la roche, présentent des sarcophages monumentaux en granit, témoignant du respect religieux et de la dévotion accordés à ces animaux sacrés.</div>
                                </label>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section id="img-transition">
        </section>



        <section class="urbanism">
            <div class="titre"><p>URBANISME ET <br> PATRIMOINE</p></div>
            
            <div class="cadre">
                <div class="texte">
                    <p>
                        À Memphis, en Égypte, l'urbanisme et le patrimoine s'entrelacent dans une danse intemporelle, reflétant les millénaires d'histoire qui ont façonné cette ancienne cité. </p>
                    <p id="moreText">
                        Fondée il y a plus de 4 000 ans, Memphis fut la capitale de l'Égypte antique, berceau de la civilisation pharaonique. 
                        <br><br> Aujourd'hui, ses ruines et vestiges archéologiques témoignent de son passé glorieux. 
                        <br><br> L'urbanisme à Memphis se traduit par les vestiges du grand temple de Ptah, dédié au dieu créateur, et par l'alignement majestueux des sphinx qui jadis bordaient l'entrée de la ville. 
                        <br><br> Ces structures imposantes racontent l'histoire de l'urbanisme planifié et de l'ingéniosité architecturale qui caractérisaient l'Égypte antique. 
                        <br><br> Le patrimoine de Memphis est palpable dans le musée en plein air qu'est devenu le site archéologique, abritant des statues colossales, des stèles gravées et des sépultures royales. 
                        <br><br> Chaque pierre, chaque hiéroglyphe, évoque la grandeur passée de Memphis en tant que centre politique, religieux et culturel. 
                        <br><br> Ainsi, l'urbanisme et le patrimoine de Memphis se conjuguent pour offrir aux visiteurs une plongée captivante dans les racines de la civilisation égyptienne.
                        
                    <div id="lirePlusBtnContainer">
                        <button id="lirePlusBtn" onclick="afficherTexteComplet()">Lire plus</button>
                    </div>
        </section>

        <section class="A_lire">
            <div class="titre2">
                <p>A LIRE AUSSI</p>
            </div>
            <div id="title-map">
                <div class="slide-container">
                    <div class="custom-slider fade">
                        <div class="slide-index">1 / 3</div>
                        <a href=#>
                            <img class="slide-img" src="../assets/Img_Histoire/article1.jpg">
                        </a>
                        <div class="slide-text">
                            <div>Archéologie</div>
                            <p>Découverte d'une momie de 4300 ans enveloppée d’or</p>
                        </div>
                    </div>
                    <div class="custom-slider fade">
                        <div class="slide-index">2 / 3</div>
                        <a href="#">
                            <img class="slide-img" src="../assets/Img_Histoire/article2.jpg">
                        </a>
                        <div class="slide-text">
                            <div>Recherche</div>
                            <p>Des scientifiques "déballent" numériquement la momie d'Amenhotep Ier pour la première fois en 3000 ans</p>
                        </div>
                    </div>
                    <div class="custom-slider fade">
                        <div class="slide-index">3 / 3</div>
                        <a href="#">
                            <img class="slide-img" src="../assets/Img_Histoire/article3.png">
                        </a>
                        <div class="slide-text">
                            <div>Découverte</div>
                            <p>Trois momies avec une langue en or découvertes en Egypte</p>
                        </div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="slide-dot">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
        </section>         

        <?php
            include("../include/footer_fr.inc.php");
        ?>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();

            function afficherTexteComplet() {
                var moreText = document.getElementById("moreText");
                var btn = document.getElementById("lirePlusBtn");

                if (moreText.style.display === "none" || moreText.style.display === "") {
                    moreText.style.display = "block";
                    btn.innerHTML = "Lire moins";
                } else {
                    moreText.style.display = "none";
                    btn.innerHTML = "Lire plus";
                }
            }
        var slideIndex = 1;

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("custom-slider");
        var dots = document.getElementsByClassName("dot");
        var texts = document.querySelectorAll('.slide-text .text-item');

        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        for (i = 0; i < texts.length; i++) {
            texts[i].classList.remove("active");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        texts[slideIndex - 1].classList.add("active");
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    showSlides(slideIndex);
        </script>
    </body>
</html>
