<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <title> Article Gastronomie </title>
        <link rel="stylesheet" href="../css/infos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            include("../include/header.inc.php");

            include("../include/connexion.inc.php");
        ?>
        <section class="main">
            <h2>Informations pratiques</h2>
            <hr>
                <div class="carousel-container3">
                    <div class="sous-carrousel2">
                        <div class="carousel-slide3"><img src="../assets/Img_Infos/lieux.jpg"></img></div>
                        <a href="../fr/carte.html">Les lieux <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="sous-carrousel1">
                        <div class="carousel-slide3"><img src="../assets/Img_Infos/gastronomie.jpg"></img> </div>
                        <a href="../fr/gastronomie.html"><i class="fa-solid fa-arrow-left"></i>Gastronomie </a>
                    </div>

                    <div class="sous-carrousel2">
                        <div class="carousel-slide3"><img src="../assets/Img_Infos/parcours.jpeg"></img></div>
                        <a href="../fr/activites/activites.html">Parcours <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="sous-carrousel1">
                        <div class="carousel-slide3"><img src="../assets/Img_Infos/loger.jpg"></img> </div>
                        <a href="../fr/loger.html"><i class="fa-solid fa-arrow-left"></i>Se loger </a>
                    </div>

                    <div class="sous-carrousel2">
                        <div class="carousel-slide3"><img src="../assets/Img_Infos/accès.jpeg"></img> </div>
                        <a href="../fr/accès.html">Accès handicapé<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
    
                </div>
        </section>
            

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
