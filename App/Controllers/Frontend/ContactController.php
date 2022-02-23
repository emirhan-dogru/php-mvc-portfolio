<?php

namespace App\Controllers\Frontend;

use Core\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return $this->view('frontend.contact');
    }
}

?>