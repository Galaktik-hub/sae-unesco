<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
        <title><?php
            if (isset($_GET['lang'])) {
                if ($_GET['lang'] == "cn") {
                    echo "Article Chinois";
                } else {
                    echo "Article";
                }
            } else {
                echo "Article";
            }
        ?></title>
        <link rel="stylesheet" href="../css/article.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <script type="text/javascript" src="../js/article_gastro.js" defer></script> -->
    </head>
    <body>
        <?php

            include("../include/connexion.inc.php");
            include("../include/header_fr.inc.php");
        ?>
        <section class="bg-article">
            <div class="article">
                <div class="header-article">
                    <div class="title">
                    <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $result=$cnx->query("SELECT titre FROM article_fr WHERE id=$id");
                            if ($result) {
                                $titre=$result->fetch(PDO::FETCH_OBJ);
                                echo $titre->titre;
                            }
                        }
                    ?>
                    </div>
                    <div class="img-article">
                        <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $result=$cnx->query("SELECT titre FROM article_fr WHERE id=$id");
                                if ($result) {
                                    echo "<img src='../assets/Img_Article/$id.jpg' alt='$alt'>";
                                }
                            }
                        ?>
                    </div>
                </div>
               <div class="content-article">
                    <?php
                        function articleNotFound() {
                            echo "<h1>Désolé, l'article que vous recherchez n'existe pas</h1>";
                        }

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $result = $cnx->query("SELECT contenu FROM article_fr WHERE id=$id");
                            if ($result) {
                                $contenu = $result->fetch(PDO::FETCH_OBJ);
                                if ($contenu) {
                                    echo $contenu->contenu;
                                } else {
                                    articleNotFound();
                                }
                            } else {
                                articleNotFound();
                            }
                        }
                    ?>
               </div>
            </div>
        </section>

        <?php
            include("../include/footer_fr.inc.php");
        ?>
    </body>
</html>
