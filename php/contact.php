<?php
    include("include/connexion.inc.php");

    if (isset($_POST['email']) && isset($_POST['contenu']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
        $req = $cnx->prepare("INSERT INTO contact (nom, prenom, email, contenu) VALUES (:nom, :prenom, :email, :contenu)");
        $req->bindParam(':nom', $_POST['nom']);
        $req->bindParam(':prenom', $_POST['prenom']);
        $req->bindParam(':email', $_POST['email']);
        $req->bindParam(':contenu', $_POST['contenu']);
        $req->execute();
        if ($req) {
            echo "Votre message a bien été envoyé !";
        } else {
            echo "Votre message n'a pas pu être envoyé.";
        }
    }
?>
<link rel="stylesheet" href="style.css">
<div id="wrapper">
    <form action="contact.php" method="post">
        <h1>Nous contacter</h1>
        <table>
            <tr><td><label for="nom">Nom*</label></td><td><input type="text" name="nom" maxlength="30" required/></td></tr>
            <tr><td><label for="prenom">Prénom*</label></td><td><input type="text" name="prenom" maxlength="30" required/></td></tr>
            <tr><td><label for="email">E-mail*</label></td><td><input type="email" name="email" maxlength="320" required/></td></tr>
            <tr><td><label for="contenu">Contenu du message*</label></td><td><input type="text" name="contenu" required/></td></tr>
        </table>
        <br />
        <input type="reset" class="button" name="reset" value="Effacer" /> 
        <input type="submit" class="button" name="submit" value="Valider" />
        <p>* Champ obligatoire</p>
    </form>
</div>
