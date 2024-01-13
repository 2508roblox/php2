<?php

use App\Libs\Controller;

class CheckoutController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/checkout') ;
    }
   
}
