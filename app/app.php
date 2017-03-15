<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Places.php";


  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('places.html.twig');
  });

  $app->post("/", function() use ($app) {

    $berlin = new Places ("Berlin", "Germany", "3 weeks", "image.png");

    $cityInput = $_POST['cityName'];
    $match = array();

    if($cityInput === $berlin->getCityName()){
      array_push($match,$berlin);
    }

    return $app['twig']->render('places.html.twig',array('matchcities'=>$match));
  });

  return $app;
?>
