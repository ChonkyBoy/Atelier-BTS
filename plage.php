<?php
include("header.php"); ?>
<div class="container">
    <br>
    <form method="post" action="actions/ajouterPlage.php">
        <div class="form-group">
            <label for="nom">Entrez le nom de la plage</label>
            <input type="text" class="form-control" id="nom" name="nom"
                   placeholder="La plage d'apremont">
        </div>
        <div class="form-group">
            <label for="commune">Entrez la commune</label>
            <input type="text" class="form-control" id="commune" name="commune"
                   placeholder="Apremont">
        </div>
        <div class="form-group">
            <label for="departement">Entrez le département </label>
            <input type="text" class="form-control" id="departement" name="departement"
                   placeholder="Vendée">
        </div>
        <div class="form-group">
            <label for="superficie">Entrez la superficie (en m²) </label>
            <input type="number" class="form-control" id="superficie" name="superficie"
                   placeholder="2000">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
