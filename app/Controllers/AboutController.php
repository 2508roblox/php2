<?php

use App\Libs\Controller;

class AboutController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/about') ;
    }
   
}
