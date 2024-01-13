<?php

use App\Libs\Controller;

class WishlistContrller extends Controller
{

    public function get()
    {
        
return $this->view('frontend/wishlist') ;
    }
   
}
