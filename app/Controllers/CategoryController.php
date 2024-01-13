<?php

use App\Libs\Controller;

class CategoryController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/category') ;
    }
   
}
