<?php

use App\Libs\Controller;

class CartController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/cart') ;
    }
   
}
