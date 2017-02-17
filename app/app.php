<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('input.html.twig');
    });

    $app->post("/display", function() use ($app) {
        $new_RepeatCounter = New RepeatCounter($_POST['input_string'], $_POST['input_search']);
        $returned_string = $new_RepeatCounter->getString();
        $returned_search = $new_RepeatCounter->getSearch();
        $returned_output = $new_RepeatCounter->getMatches();
        $returned_validated = $new_RepeatCounter->getValidated();

        return $app['twig']->render("display.html.twig", array("input" => $returned_string, "search" => $returned_search, "validated" => $returned_validated, "output" => $returned_output));
    });

    return $app;
?>
