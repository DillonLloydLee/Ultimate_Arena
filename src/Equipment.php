<?php
    class Equipment {
        private $name;
        private $type;
        private $attack;
        private $defense;
        private $max_hp;
        private $speed;
        private $id;

        function __construct($name, $type, $attack = 0, $defense = 0, $max_hp = 0, $speed = 0, $id = null) {
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

        function save() {
            $GLOBALS["DB"]->exec("INSERT INTO equipment (name, type, attack, defense, max_hp, speed) VALUES ('{this->getName()}', '{this->getType()}', {this->getAttack()}, {this->getDefense()}, {this->getMaxHp()}, {this->getSpeed()},)");
            $this->id = $GLOBALS["DB"]->lastInsertId();
        }

        static function getAll() {
            $raw_info = $GLOBALS["DB"]->query("SELECT * FROM equipment;");
            $all = array();
            foreach($raw_info as $equip) {
                $name = $equip["name"];
                $type = $equip["type"];
                $attack = $equip["attack"];
                $defense = $equip["defense"];
                $max_hp = $equip["max_hp"];
                $speed = $equip["speed"];
                $id = $equip["id"];
                $new_equip = new Equipment($name, $type, $attack, $defense, $max_hp, $speed, $id);
                array_push($all, $new_equip);
            }
            return $all;
        }

        static function deleteAll() {
            $GLOBALS["DB"]->exec("DELETE FROM equipment;");
        }
    }






?>
