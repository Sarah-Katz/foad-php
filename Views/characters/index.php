<?php require_once 'Views/head.php'; ?>

<a href="../character/create">Ajouter un personnage</a>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Race</th>
        <th>Classe</th>
    </tr>
    <?php foreach ($characters as $character) : ?>
        <tr>
            <td><?= $character->getId() ?></td>
            <td><?= $character->getName() ?></td>
            <td><?= $character->getRace() ?></td>
            <td><?= $character->getClass() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>