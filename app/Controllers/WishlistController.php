<?php

use App\Libs\Controller;

class WishlistController extends Controller
{

    public function get()
    {

        return $this->view('frontend/wishlist');
    }
    public function add($product_id)
    {
        // dd($product_id);
        $this->model('wishlist')->addWishlist($product_id);
        redirect('wishlist');
        // return $this->view('frontend/wishlist');
    }
}
