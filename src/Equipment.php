<?php
    class Equipment {
        private $name;
        private $type;
        private $attack;
        private $defense;
        private $max_hp;
        private $speed;
        private $id;

        function __construct($name, $type, $attack, $defense, $max_hp, $speed, $id = null) {
            $this->name = $name;
            $this->type = $type;
            $this->attack = $attack;
            $this->defense = $defense;
            $this->max_hp = $max_hp;
            $this->speed = $speed;
            $this->id = $id;
        }

        function setName($name) {
            $this->name = (string) $name;
        }

        function getName() {
            return $this->name;
        }

        function setType($type) {
            $this->type = (string) $type;
        }

        function getType() {
            return $this->type;
        }

        function setAttack($attack) {
            $this->attack = (string) $attack;
        }

        function getAttack() {
            return $this->attack;
        }

        function setDefense($defense) {
            $this->defense = (string) $defense;
        }

        function getDefense() {
            return $this->defense;
        }

        function setMaxHp($max_hp) {
            $this->max_hp = (string) $max_hp;
        }

        function getMaxHp() {
            return $this->max_hp;
        }

        function setSpeed($speed) {
            $this->speed = (string) $speed;
        }

        function getSpeed() {
            return $this->speed;
        }

        function getId() {
            return $this->id;
        }

    }






?>
