<?php

use App\Libs\Controller;

class ContactController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/contact') ;
    }
   
}
