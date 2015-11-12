<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app)
    {
        return $app['twig']->render('play.html.twig');
    });

    $app->get("ping_ponged", function() user($app)
    {
        $my_PingPongGenerator = new PingPongGenerator;
        $ping_played = $my_PingPongGenerator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('ping_ponged.html.twig', array('result' => $ping_played));
    });

    return $app;

?>
