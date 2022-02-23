<?php

namespace Core;

use Buki\Router\Router;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Dotenv\Dotenv;

class Bootstrap
{

    public $router;
    public $capsule;
    public $view;

    public function __construct()
    {
        //env
        $dotenv = new Dotenv();
        $dotenv->load(dirname(__DIR__) .'/.env');
        //router
        $this->router = new Router(
            [
                'base_folder' => config('BASE_PATH'),
                'paths' => [
                    'controllers' => 'App/Controllers', 
                    'middlewares' => 'App/Middlewares'
                ],
                'namespaces' => [
                    'controllers' => 'App\Controllers', 
                    'middlewares' => 'App\Middlewares', 
                ]
            ]
        );

        //whoops => error handling
        $whoops = new Run;
        $whoops->pushHandler(new PrettyPageHandler);
        $whoops->register();

        //illuminate database
        $this->capsule = new Capsule();

        $this->capsule->addConnection([
            'driver' => 'mysql',
            'host' => config('DB_HOST'),
            'database' => config('DB_NAME'),
            'username' => config('DB_USER'),
            'password' => config('DB_PASS'),
            'charset' => 'utf8',
            'collation' => 'utf8_turkish_ci',
            'prefix' => '',
        ]);



        $this->capsule->setAsGlobal(); 
        $this->capsule->bootEloquent();

        //view
        $this->view = new View();


    }


    public function run()
    {
        $this->router->run();
    }


}


?>