<?php

use App\Libs\Controller;

class HomeController extends Controller
{

    public function get()
    {
       

            $this->view('frontend/index');
         
    }
    public function getProducts()
    {
    }
}
