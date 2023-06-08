<?php

namespace App\Models;


class Character {
    private $id;
    private $class;
    private $race;
    private $name;
    private $attack;
    private $defense;

    public function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function getClass() {
        return $this->class;
    }

    public function getRace() {
        return $this->race;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setClass($class) {
        $this->class = $class;
    }

    public function setRace($race) {
        $this->race = $race;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function setDefense($defense) {
        $this->defense = $defense;
    }
}
