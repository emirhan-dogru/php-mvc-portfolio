<?php

$app->router->get('/', 'Frontend\HomeController@index');
$app->router->get('/hakkimda', 'Frontend\AboutController@index');
$app->router->get('/portfolio', 'Frontend\PortfolioController@index');
$app->router->get('/yazilarim', 'Frontend\BlogController@index');
$app->router->get('/iletisim', 'Frontend\ContactController@index');
$app->router->post('/iletisim', 'Frontend\ContactController@sendMessage');

$app->router->group(admin_url() , function($router) {
    $router->get('/home', 'Backend\AdminController@index');
    $router->get('/about', 'Backend\AdminController@about');
    $router->post('/about', 'Backend\AdminController@aboutAdd');
    $router->get('/skills', 'Backend\AdminController@skills');
    $router->get('/skill-add', 'Backend\AdminController@skillAdd');
    $router->post('/skill-add', 'Backend\AdminController@skillSave');
    $router->get('/skill-edit/:id', 'Backend\AdminController@skillEdit');
    $router->post('/skill-edit/:id', 'Backend\AdminController@skillUpdate');
    $router->get('/skill-delete/:id', 'Backend\AdminController@skillDelete');
    $router->get('/portfolio', 'Backend\AdminController@portfolio');
    $router->get('/portfolio-add', 'Backend\AdminController@portfolioAdd');
    $router->post('/portfolio-add', 'Backend\AdminController@portfolioSave');
    $router->get('/portfolio-edit/:id', 'Backend\AdminController@portfolioEdit');
    $router->post('/portfolio-edit/:id', 'Backend\AdminController@portfolioUpdate');
    $router->get('/portfolio-delete/:id', 'Backend\AdminController@portfolioDelete');
});


?>