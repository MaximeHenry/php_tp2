<?php
    include 'utils.inc.php';
?>

<?php start_page('formulaire') ?>
<div>
    <form action="data-processing.php" method="post">
        <label>Identifiant</label>
        <input type="text" name="identifiant"><br/>
        <label>Sexe</label>
        <input type="radio" name="civilite" value="Homme">
        <label>Homme</label><br/>
        <input type="radio" name="civilite" value="Femme">
        <label>Femme</label><br/>
        <label>Mail</label>
        <input type="email" name="mail"><br/>
        <label>Mot de passe</label>
        <input type="password" name="mdp"><br/>
        <label>Confirmer le mot de passe</label>
        <input type="password" name="verif_mdp"><br/>
        <label>Téléphone</label>
        <input type="text" name="telephone"><br/>
        <label>Pays</label>
        <select id="pays">
            <option value="France">France</option>
            <option value="Allemagne">Allemagne</option>
            <option value="Italie">Italie</option>
            <option value="Russie">Russie</option>
            <option value="Royaume-Uni">Royaume-Uni</option>
            <option value="Espagne">Espagne</option>
        </select><br/>
        <label>J'accepte les conditions générales</label>
        <input type="checkbox" name="conditions_generales"><br/>
        <input type="submit" name="action" value="mailer">
    </form>
</div>
<?php end_page() ?>