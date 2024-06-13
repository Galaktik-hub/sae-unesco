<?php
    include("include/connexion.inc.php");

    $message = "";
    if (isset($_POST['email']) && isset($_POST['contenu']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
        $req = $cnx->prepare("INSERT INTO contact (nom, prenom, email, contenu) VALUES (:nom, :prenom, :email, :contenu)");
        $req->bindParam(':nom', $_POST['nom']);
        $req->bindParam(':prenom', $_POST['prenom']);
        $req->bindParam(':email', $_POST['email']);
        $req->bindParam(':contenu', $_POST['contenu']);
        if ($req->execute()) {
            $message = "<p class='success'>Votre message a bien été envoyé !</p>";
        } else {
            $message = "<p class='error'>Votre message n'a pas pu être envoyé.</p>";
        }
    }
?>
<link rel="stylesheet" href="../css/contact.css">
<section id="contact">
    <form action="../fr/contact.php" method="post">
        <h1>Nous contacter</h1>
        <label for="nom">Nom*</label>
        <input type="text" name="nom" maxlength="30" required/>
        
        <label for="prenom">Prénom*</label>
        <input type="text" name="prenom" maxlength="30" required/>
        
        <label for="email">E-mail*</label>
        <input type="email" name="email" maxlength="320" required/>
        
        <label for="contenu">Contenu du message*</label>
        <textarea name="contenu" maxlength="1000" required></textarea>
        
        <div class="form-buttons">
            <input type="reset" class="button" name="reset" value="Effacer" /> 
            <input type="submit" class="button" name="submit" value="Envoyer" />
        </div>
        <p>* Champ obligatoire</p>
    </form>
</section>