<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    session_start();

    if (empty($_SESSION['player_one_choice'])) {
        $_SESSION['player_one_choice'] = (string)"";
    }

    if (empty($_SESSION['player_two_choice'])) {
        $_SESSION['player_two_choice'] = (string)"";
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
        $player_one = new RockPaperScissors($_POST['p1']);
            return $app['twig']->render('player_two.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $player_two = new RockPaperScissors($_POST['p2']);
            return $app['twig']-render('results.html.twig');
    })

    return $app;

?>
