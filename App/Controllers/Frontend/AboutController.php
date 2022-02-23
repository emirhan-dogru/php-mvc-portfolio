<?php

namespace App\Controllers\Frontend;

use Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return $this->view('frontend.about');
    }
}

?>