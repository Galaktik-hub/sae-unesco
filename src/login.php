<?php
    session_start();
    include("../include/connexion.inc.php");
    include("../include/header.inc.php");
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $req = $cnx->query("SELECT * FROM login WHERE mdp=$login");
        if ($req) {
            $_SESSION['connected'] = 1;
        } else {
            echo "Mot de passe incorrect";
        }
    }
?>
<!DOCTYPE html>

<html lang="français">
    <head>
        <meta charset="utf-8">
        <title>Login administrateur</title>
        <link rel="stylesheet" href="../css/article.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <script type="text/javascript" src="../js/article_gastro.js" defer></script> -->
    </head>
    <body>
        <section class="bg-article">
            <div class="article">
               <form action="login.php" method="post">
                    <label for="login">Mot de passe</label><input type="password" name="login" required/>
                    <input type="submit" class="button" name="submit" value="Valider" />
               </form>
            </div>
        </section>

        <?php
            include("../include/footer.inc.php");
        ?>
    </body>
</html>
