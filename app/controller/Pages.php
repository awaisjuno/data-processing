<?php

namespace App\Controller;
use System\Controller;

class Pages extends Controller
{
    public function index()
    {
        $this->load->view('pages/landing');
    }
}
