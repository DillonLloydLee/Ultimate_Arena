<?php
    class Player {
        private $name;
        private $attack;
        private $defense;
        private $max_hp;
        private $speed;
        private $weapon;
        private $armor;
        private $id;

        function __construct($name, $attack, $defense, $max_hp, $speed, $weapon, $armor, $id = null) {
            $this->name = $name;
            $this->attack = $attack;
            $this->defense = $defense;
            $this->max_hp = $max_hp;
            $this->speed = $speed;
            $this->weapon = $weapon;
            $this->armor = $armor;
            $this->id = $id;
        }

        function setName($name) {
            $this->name = (string) $name;
        }

        function getName() {
            return $this->name;
        }

        function setAttack($attack) {
            $this->attack = $attack;
        }

        function getAttack() {
            return $this->attack;
        }

        function setDefense($defense) {
            $this->defense = $defense;
        }

        function getDefense() {
            return $this->defense;
        }

        function setMaxHp($max_hp) {
            $this->max_hp = $max_hp;
        }

        function getMaxHp() {
            return $this->max_hp;
        }

        function setSpeed($speed) {
            $this->speed = $speed;
        }

        function getSpeed() {
            return $this->speed;
        }

        function setWeapon($weapon) {
            $this->weapon = $weapon;
        }

        function getWeapon() {
            return $this->weapon;
        }

        function setArmor($armor) {
            $this->armor = (string) $armor;
        }

        function getArmor() {
            return $this->armor;
        }

        function getId() {
            return $this->id;
        }

    }






?>
