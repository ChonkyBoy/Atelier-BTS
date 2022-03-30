<?php
include ("header.php"); ?>
<div class="container">
    <br>
    <form method="post" action="actions/ajouterVers.php">
        <div class="form-group">
            <label for="genre">Entrez le genre du vers</label>
            <input type="text" class="form-control" id="genre" name="genre"
                   placeholder="Arenicola">
        </div>
        <div class="form-group">
            <label for="espece">Entrez l'espèce du vers</label>
            <input type="text" class="form-control" id="espece" name="espece"
                   placeholder="marina">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<?php include ("footer.php");
