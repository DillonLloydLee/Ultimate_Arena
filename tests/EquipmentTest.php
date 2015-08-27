<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Equipment.php';
    require_once 'src/Player.php';

    $server = 'mysql:host=localhost;dbname=ultimate_arena_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class EquipmentTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown() {
            Equipment::deleteAll();
            Player::deleteAll();
        }

        function test_save_and_getAll() {
            $name = "steel dagger";
            $type = "weapon";
            $test_equipment = new Equipment($name, $type);
            $test_equipment->save();

            $name2 = "steel dagger";
            $type2 = "weapon";
            $test_equipment2 = new Equipment($name2, $type2);
            $test_equipment2->save();

            $result = Equipment::getAll();

            $this->assertEquals([$test_equipment, $test_equipment2], $result);
        }





    }
?>
