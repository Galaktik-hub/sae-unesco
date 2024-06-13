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
            echo "您的信息已发送！";
        } else {
            echo "您的信息无法发送.";
        }
    }
?>
<link rel="stylesheet" href="../css/contact.css">
<section id="contact">
    <form action="../cn/contact.php" method="post">
        <h1>联系我们</h1>
        <?php echo $message; ?>
        <label for="nom">姓*</label>
        <input type="text" name="nom" maxlength="30" required/>
        
        <label for="prenom">名*</label>
        <input type="text" name="prenom" maxlength="30" required/>
        
        <label for="email">邮件*</label>
        <input type="email" name="email" maxlength="320" required/>
        
        <label for="contenu">信息内容*</label>
        <textarea name="contenu" maxlength="1000" required></textarea>
        
        <div class="form-buttons">
            <input type="reset" class="button" name="reset" value="删除" /> 
            <input type="submit" class="button" name="submit" value="发送" />
        </div>
        <p>*必填字段</p>
    </form>
</section>
