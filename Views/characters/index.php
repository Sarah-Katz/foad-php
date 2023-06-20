<?php require_once 'Views/head.php'; ?>

<div class="container">
    <div class="row m-3">
        <div class="col-2 offset-5">
            <a class="btn btn-primary" href="../character/create">Ajouter un personnage</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($characters as $character) : ?>
                    <tr>
                        <td><?= $character->getId() ?></td>
                        <td><?= $character->getName() ?></td>
                        <td>
                            <a class="btn btn-success" href="../character/detail/<?= $character->getId() ?>">Détails</a>
                            <a class="btn btn-warning" href="../character/edit/<?= $character->getId() ?>">Modifier</a>
                            <a class="btn btn-danger" href="../character/remove/<?= $character->getId() ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<?php require_once 'Views/foot.php'; ?>