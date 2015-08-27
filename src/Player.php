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

        function __construct($name, $attack = 0, $defense = 0, $max_hp = 1, $speed = 0, $weapon = "unequipped", $armor = "unequipped", $id = null) {
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

        function save() {
            $GLOBALS['DB']->exec("INSERT INTO players (name, attack, defense, max_hp, speed, weapon, armor) VALUES ('{$this->getName()}', {$this->getAttack()}, {$this->getDefense()}, {$this->getMaxHp()}, {$this->getSpeed()}, '{$this->getWeapon()}', '{$this->getArmor()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll() {
            $raw_info = $GLOBALS["DB"]->query("SELECT * FROM players;");
            $all = array();
            foreach($raw_info as $player) {
                $name = $player["name"];
                $attack = $player["attack"];
                $defense = $player["defense"];
                $max_hp = $player["max_hp"];
                $speed = $player["speed"];
                $weapon = $player["weapon"];
                $armor = $player["armor"];
                $id = $player["id"];
                $new_player = new Player($name, $attack, $defense, $max_hp, $speed, $weapon, $armor, $id);
                array_push($all, $new_player);
            }
            return $all;
        }

        static function deleteAll() {
            $GLOBALS["DB"]->exec("DELETE FROM players;");
        }
    }






?>
