<?php

use App\Libs\Controller;

class AdminController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/blog') ;
    }
   
}
