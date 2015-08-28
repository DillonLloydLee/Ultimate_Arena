<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Equipment.php";
    require_once __DIR__."/../src/Item.php";
    require_once __DIR__."/../src/Player.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $server = 'mysql:host=localhost;dbname=ultimate_arena';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    // Home Route: Choose a hero.
    $app->get("/", function() use($app){
        $players = Player::getAll();
        return $app['twig']->render('index.html.twig', array('players' => $players, 'new' => 0 ));
    });

    // Home Route: New hero added.
    $app->post("/heroes", function() use($app){
        $new_hero = new Player($_POST["name"]);
        $new_hero->save();
        $players = Player::getAll();
        return $app['twig']->render('index.html.twig', array('players' => $players, 'new' => 1 ));
    });

    // Menu Route: Hero selected.
    $app->get("/menu/{id}", function($id) use($app){
        $player = Player::find($id);
        return $app['twig']->render('menu.html.twig', array('player' => $player));
    });

    return $app;
?>


"/menu/{{ player.getId }}"
