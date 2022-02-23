<?php

namespace Core;

use Jenssegers\Blade\Blade;

class View
{
    public function show($view, $data)
    {
        $blade = new Blade(dirname(__DIR__) . '/resource/views', dirname(__DIR__) . '/Cache');

        return $blade->render($view, $data);
    }
}


?>