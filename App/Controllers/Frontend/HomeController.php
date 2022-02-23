<?php

namespace App\Controllers\Frontend;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('frontend.index');
    }
}

?>