<?php
include("header.php");
#Je me co à la BDD
include_once "Config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
#Requete SQL qui me permet d'aller chercher les info dans la BDD
$requete = $pdo->prepare("select * from plages");
#j'exe la requete
$requete->execute();
#Je recup le résultat de la requete dans une variable
$plages = $requete ->fetchAll();

?>
    <div class="container">
        <br>
        <h1>Voici vos études : (plages surtout)</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Commune</th>
                <th scope="col">Département</th>
                <th scope="col">Superficie</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            #Je choisis chaque plage
            foreach ($plages as $p) {
            ?>
            <tr>
                <td><?php echo $p['nom']?></td>
                <td><?php echo $p['commune']?></td>
                <td><?php echo $p['departement']?></td>
                <td><?php echo $p['superficie']?></td>
                <td>
                    <form action="actions/supprimerPlage.php" method="post">
                        <!--J'assimile l'id d'une plage à un boutton en form -->
                        <input type="hidden" value="<?php echo $p['id']?>" name="id">
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
                 <?php } ?>

            </tbody>
        </table>
    </div>


<?php
include("footer.php");