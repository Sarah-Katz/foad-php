<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/Character.php';

use App\Database;

use PDO;

class CharacterModel {
    private $connection;

    public function __construct() {
        $this->connection = new Database();
    }
    public function getAll() {
        $query = $this->connection->getPdo()->prepare("SELECT id,class,race,name FROM chars");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\Character");
    }

    public function getById($id) {
        $query = $this->connection->getPdo()->prepare("SELECT id,class,race,name,attack,defense FROM chars WHERE id = :id");
        $query->execute(array(":id" => $id));
        return $query->fetch(PDO::FETCH_CLASS, "App\Models\Character");
    }

    public function create($character) {
        $query = $this->connection->getPdo()->prepare('INSERT INTO chars (class, race, name, attack, defense) VALUES (:class, :race, :name, :attack, :defense)');
        $query->execute([
            'class' => $character['class'],
            'race' => $character['race'],
            'name' => $character['name'],
            'attack' => $character['attack'],
            'defense' => $character['defense']
        ]);
    }

    public function update($character) {
        $query = $this->connection->getPdo()->prepare('UPDATE chars SET race=:race, name=:name, attack=:attack, defense=:defense WHERE id=:id');
        $query->execute([
            'race' => $character['race'],
            'name' => $character['name'],
            'attack' => $character['attack'],
            'defense' => $character['defense']
        ]);
    }

    public function delete($id) {
        $query = $this->connection->getPdo()->prepare('DELETE FROM chars WHERE id=:id');
        $query->execute([
            'id' => $id
        ]);
    }
}
