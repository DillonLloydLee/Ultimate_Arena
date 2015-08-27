<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Item.php';
    require_once 'src/Player.php';

    $server = 'mysql:host=localhost;dbname=ultimate_arena_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ItemTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown() {
            Item::deleteAll();
            Player::deleteAll();
        }

        function test_save_and_getAll() {
            $name = "Potion";
            $test_item = new Item($name);
            $test_item->save();

            $name2 = "Bomb";
            $test_item2 = new Item($name2);
            $test_item2->save();

            $result = Item::getAll();

            $this->assertEquals([$test_item, $test_item2], $result);
        }

    }
?>
