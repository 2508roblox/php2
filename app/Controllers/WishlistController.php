<?php

use App\Libs\Controller;

class WishlistController extends Controller
{

    public function get()
    {
        
return $this->view('frontend/wishlist') ;
    }
   
}
