<?php

namespace App\Controllers\Frontend;

use Core\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        return $this->view('frontend.portfolio');
    }
}

?>