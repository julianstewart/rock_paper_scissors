<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();

    if (empty($_SESSION['player_choices'])) {
        $_SESSION['player_choices'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('rock_paper_scissors.html.twig');
    });

    $app->post("/player_one", function() use ($app) {
            return $app['twig']->render('player_one.html.twig');
    });

    $app->post("/player_two", function() use ($app) {
            $player_one_temp = ($_POST['p1']);
            return $app['twig']->render('player_two.html.twig');
    });



    return $app;

?>
