<?php

require 'vendor/autoload.php';


$app = new \Core\Bootstrap();


require './router.php';
 $app->run();




?>