<?php

$app->router->get('/', 'Frontend\HomeController@index');
$app->router->get('/hakkimda', 'Frontend\AboutController@index');
$app->router->get('/portfolio', 'Frontend\PortfolioController@index');
$app->router->get('/yazilarim', 'Frontend\BlogController@index');
$app->router->get('/iletisim', 'Frontend\ContactController@index');
$app->router->post('/iletisim', 'Frontend\ContactController@sendMessage');


$app->router->group(admin_url() , function($router) {
    $router->get('/login' , 'Backend\AdminController@loginPage');
    $router->post('/login' , 'Backend\AdminController@login');
});

$app->router->group(admin_url() , function($router) {
    $router->get('/', 'Backend\AdminController@index');
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
    $router->get('/blog', 'Backend\AdminController@blog');
    $router->get('/blog-add', 'Backend\AdminController@blogAdd');
    $router->post('/blog-add', 'Backend\AdminController@blogSave');
    $router->get('/blog-edit/:id', 'Backend\AdminController@blogEdit');
    $router->post('/blog-edit/:id', 'Backend\AdminController@blogUpdate');
    $router->get('/blog-delete/:id', 'Backend\AdminController@blogDelete');
    $router->get('/contact', 'Backend\AdminController@contact');
    $router->get('/settings', 'Backend\AdminController@settings');
    $router->post('/settings', 'Backend\AdminController@settingsUpdate');
    $router->get('/logout' , function() {
        auth()->remove("adminAuth");
        header("Location:" . admin_url('/login'));
        exit();
    });
}, ['before' => "AdminAuth"]);


?>