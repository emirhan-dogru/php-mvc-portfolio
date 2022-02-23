<?php

$app->router->get('/', function() {
    echo 'Hello World!';
});

$app->router->get('/denemes', 'Backend\AdminController@index');

?>