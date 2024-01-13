<?php

use App\Libs\Controller;

class ShopController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/shop') ;
    }
   
}
