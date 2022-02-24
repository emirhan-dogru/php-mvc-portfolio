<?php

namespace App\Controllers\Frontend;

use App\Models\About;
use Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::where('id', '1')->first();
        return $this->view('frontend.about' , compact('data'));
    }
}

?>