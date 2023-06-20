<?php require_once 'Views/head.php'; ?>

<div class="col-6 offset-3">
    <form action="../../character/edit/<?= $character->getId() ?>" method="post">
        <div class="form-group">
            <label for="race">Race du personnage</label>
            <input value="<?= $character->getRace() ?>" type="text" name="race" id="race" class="form-control" required maxlength="20" disabled>
        </div>
        <div class="form-group">
            <label for="class">Classe du personnage</label>
            <input value="<?= $character->getClass() ?>" type="text" name="class" id="class" class="form-control" required maxlength="20" disabled>
        </div>
        <div class="form-group">
            <label for="name">Nom du personnage</label>
            <input value="<?= $character->getName() ?>" type="text" name="name" id="name" class="form-control" required maxlength="45" disabled>
        </div>
        <div class="form-group">
            <label for="attack">Attaque du personnage</label>
            <input value="<?= $character->getAttack() ?>" type="number" name="attack" id="attack" class="form-control" required disabled>
        </div>
        <div class="form-group">
            <label for="defense">Défense du personnage</label>
            <input value="<?= $character->getDefense() ?>" type="number" name="defense" id="defense" class="form-control" required disabled>
        </div>
    </form>
</div>

<?php require_once 'Views/foot.php'; ?>