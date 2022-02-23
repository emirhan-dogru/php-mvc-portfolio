<?php

$app->router->get('/', 'Frontend\HomeController@index');
$app->router->get('/hakkimda', 'Frontend\AboutController@index');
$app->router->get('/portfolio', 'Frontend\PortfolioController@index');
$app->router->get('/yazilarim', 'Frontend\BlogController@index');
$app->router->get('/iletisim', 'Frontend\ContactController@index');

$app->router->get('/denemes', 'Backend\AdminController@index');

?>