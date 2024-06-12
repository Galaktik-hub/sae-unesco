<?php
    session_start();
    include("../include/connexion.inc.php");
    if (isset($_SESSION['connected'])) {
        if (isset($_POST['titre']) && isset($_POST['contenu']) && isset($_POST['lang'])) {
            if ($_POST['lang'] == 'fr') {
                $req = $cnx->prepare("INSERT INTO article_fr (titre, contenu) VALUES (:titre, :contenu)");
                $req->bindParam(':titre', $_POST['titre']);
                $req->bindParam(':contenu', $_POST['contenu']);
                $req->execute();
                if ($req) {
                    echo "L'article a été ajouté !";
                } else {
                    echo "L'article n'a pas pu être ajouté.";
                }
            } elseif ($_POST['lang'] == "en") {
                $req = $cnx->prepare("INSERT INTO article_en (id, titre, contenu) VALUES (:id, :titre, :contenu)");
                $req->bindParam(':id', $_POST['id']);
                $req->bindParam(':titre', $_POST['titre']);
                $req->bindParam(':contenu', $_POST['contenu']);
                $req->execute();
                if ($req) {
                    echo "L'article a été ajouté !";
                } else {
                    echo "L'article n'a pas pu être ajouté.";
                }
            } else {
                $req = $cnx->prepare("INSERT INTO article_cn (id, titre, contenu) VALUES (:id, :titre, :contenu)");
                $req->bindParam(':id', $_POST['id']);
                $req->bindParam(':titre', $_POST['titre']);
                $req->bindParam(':contenu', $_POST['contenu']);
                $req->execute();
                if ($req) {
                    echo "L'article a été ajouté !";
                } else {
                    echo "L'article n'a pas pu être ajouté.";
                }
            }
        }
    } else {
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="icon" type="image/png" href="../assets/Header-Footer/pyramide.png">
</head>
<body>
    <form action="panel.php" method="post">
        <h1>Ajout d'articles</h1>
        <table>
            <tr><td><label for="titre">Titre*</label></td><td><input type="text" name="titre" required/></td></tr>
            <tr><td><label for="contenu">Contenu*</label></td><td><input type="text" name="contenu" required/></td></tr>
            <tr><td><label for="lang">Langue*</label></td><td>
                <select name="lang" id="">
                    <option value="fr">Français</option>
                    <option value="en">Anglais</option>
                    <option value="cn">Chinois</option>
                </select>
            </td></tr>
            <tr><td><label for="id">Id (Pour les articles anglais et chinois)</label></td><td>
                <select name="id" id="">
                    <option value="" disabled selected>Id</option>
                    <?php
                        $req = $cnx->query("SELECT id FROM article_fr");
                        while ($ligne = $req->fetch(PDO::FETCH_OBJ)) {
                            echo '<option value = "'.$ligne->id.'">'.$ligne->id.'</option>';
                        }
                    ?>
                </select>
            </td></tr>
        </table>
        <br />
        <input type="reset" class="button" name="reset" value="Effacer" /> 
        <input type="submit" class="button" name="submit" value="Valider" />
        <p>* Champ obligatoire</p>
    </form>

</body>
</html>
