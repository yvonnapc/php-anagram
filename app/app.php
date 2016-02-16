<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app){
      return $app['twig']->render('form.html.twig');
    });

    $app->post('/shuffle', function() use($app){
      $new_word = new Anagram;
      $result = $new_word->makeAnagram($_POST['word']);
      return $app['twig']->render('shuffle.html.twig', array('result' => $result));

    });

    return $app;

 ?>
