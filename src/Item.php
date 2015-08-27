<?php
    class Item {
        private $name;
        private $hp_add;
        private $damage;
        private $id;

        function __construct($name, $hp_add, $damage, $id = null) {
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
            $this->hp_add = (string) $hp_add;
        }

        function getHpAdd() {
            return $this->hp_add;
        }

        function setDamage($damage) {
            $this->damage = (string) $damage;
        }

        function getDamage() {
            return $this->damage;
        }

        function getId() {
            return $this->id;
        }

    }






?>
