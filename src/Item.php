<?php
    class Item {
        private $name;
        private $hp_add;
        private $damage;
        private $id;

        function __construct($name, $hp_add = 0, $damage = 0, $id = null) {
            $this->name = $name;
            $this->hp_add = $hp_add;
            $this->damage = $damage;
            $this->id = $id;
        }

        function setName($name) {
            $this->name = (string) $name;
        }

        function getName() {
            return $this->name;
        }

        function setHpAdd($hp_add) {
            $this->hp_add = $hp_add;
        }

        function getHpAdd() {
            return $this->hp_add;
        }

        function setDamage($damage) {
            $this->damage = $damage;
        }

        function getDamage() {
            return $this->damage;
        }

        function getId() {
            return $this->id;
        }

        function save() {
            $GLOBALS['DB']->exec("INSERT INTO items (name, hp_add, damage) VALUES ('{$this->getName()}', {$this->getHpAdd()}, {$this->getDamage()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll() {
            $raw_info = $GLOBALS["DB"]->query("SELECT * FROM items;");
            $all = array();
            foreach($raw_info as $item) {
                $name = $item["name"];
                $hp_add = $item["hp_add"];
                $damage = $item["damage"];
                $id = $item["id"];
                $new_item = new Item($name, $hp_add, $damage, $id);
                array_push($all, $new_item);
            }
            return $all;
        }

        static function deleteAll() {
            $GLOBALS["DB"]->exec("DELETE FROM items;");
        }
    }






?>
