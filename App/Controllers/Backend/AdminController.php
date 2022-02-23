<?php

namespace App\Controllers\Backend;

use Core\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return $this->view('backend.index');
    }
}

?>