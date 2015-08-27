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

    class PlayerTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown() {
            Equipment::deleteAll();
            Player::deleteAll();
        }

        function test_save_and_getAll() {
            $name = "Erdrick";
            $test_player = new Player($name);
            $test_player->save();

            $name2 = "Link";
            $test_player2 = new Player($name2);
            $test_player2->save();

            $result = Player::getAll();

            $this->assertEquals([$test_player, $test_player2], $result);
        }

    }
?>
