<?php

use App\Libs\Controller;

class BlogController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/blog') ;
    }
    public function detail($blog_id)
    {
        
return $this->view('frontend/blog_detail') ;
    }
   
}
