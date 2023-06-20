<?php

namespace App\Controllers;

require_once 'Models/CharacterModel.php';

use App\Models\CharacterModel;

class CharacterController {
    protected $characterModel;

    public function __construct() {
        $this->characterModel = new CharacterModel();
    }

    public function getIndex() {
        $characters = $this->characterModel->getAll();
        require_once 'Views/characters/index.php';
    }

    public function getCreate() {
        require_once 'Views/characters/create.php';
    }

    public function getEdit($id) {
        $character = $this->characterModel->getById($id);
        require_once 'Views/characters/edit.php';
    }

    public function getDetail($id) {
        $character = $this->characterModel->getById($id);
        require_once 'Views/characters/detail.php';
    }

    public function getRemove($id) {
        $this->characterModel->delete($id);
        header('Location: ../../character/index');
    }

    public function postCreate() {
        $character = $_POST;
        $this->characterModel->create($character);
        header('Location: ../character/index');
    }

    public function postEdit($id) {
        $character = $_POST;
        $this->characterModel->update($character, $id);
        header('Location: ../../character/index');
    }
}
