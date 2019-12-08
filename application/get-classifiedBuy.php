
<?php
require('database.php');


 $classifiedBuy=listClassifiedBuy();

?> 
<table class='classifiedLocation'>

            <tr>
                <th colspan='10'>Mes annonces</th>
            </tr>

            <tr>
                <td>N° de l'annonce</td>
                <td>Type de bien</td>
                <td>Type d'appartement</td>
                <td>Ville</td>
                <td>Département</td>
                <td>Prix</td>
                <td>Surface habitable</td>
                <td>Nombre de piéce</td>
             </tr>

            <?php foreach ($classifiedBuy as $classified) : ?>

                <tr>
                    <td><a href='detailsClassifiedBuy.php?id=<?= $classified['id']; ?>'><?= $classified['id']; ?></a></td>
                    <td><?= $classified['type']; ?></td>
                    <td><?= $classified['typeBien']; ?></td>
                    <td><?= $classified['ville']; ?></td>
                    <td><?= $classified['departement']; ?></td>
                    <td><?= $classified['prix']; ?></td>
                    <td><?= $classified['surfaceHabitable']; ?>m2</td>
                    <td><?= $classified['nombrePiece']; ?></td>
                    <td><a href="editClassifiedBuy.php?id=<?= $classified['id']; ?>"><span><i class="fas fa-pencil-alt"></i></span></a></td>
                    <td><a href='deletClassifiedBuy.php?id=<?= $classified['id']; ?>'><span><i class="fas fa-times"></i></span></a></td>
                </tr>

            <?php endforeach; ?>
       </table>