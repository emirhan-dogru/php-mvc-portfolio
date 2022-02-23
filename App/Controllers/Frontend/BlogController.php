<?php

namespace App\Controllers\Frontend;

use Core\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return $this->view('frontend.blog');
    }
}

?>