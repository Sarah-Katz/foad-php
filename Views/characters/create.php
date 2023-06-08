<?php require_once 'Views/head.php'; ?>

<div class="col-6 offset-3">
    <form action="../character/create" method="post">
        <div class="form-group">
            <label for="race">Race du personnage</label>
            <input type="text" name="race" id="race" class="form-control" required maxlength="20">
        </div>
        <div class="form-group">
            <label for="class">Classe du personnage</label>
            <input type="text" name="class" id="class" class="form-control" required maxlength="20">
        </div>
        <div class="form-group">
            <label for="name">Nom du personnage</label>
            <input type="text" name="name" id="name" class="form-control" required maxlength="45">
        </div>
        <div class="form-group">
            <label for="attack">Attaque du personnage</label>
            <input type="number" name="attack" id="attack" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="defense">Défense du personnage</label>
            <input type="number" name="defense" id="defense" class="form-control" required>
        </div>
        <button class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php require_once 'Views/foot.php'; ?>