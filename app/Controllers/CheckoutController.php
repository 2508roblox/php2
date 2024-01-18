<?php

use App\Libs\Controller;

class CheckoutController extends Controller
{

    public function get()
    {   $carts = $this->model('cart')->getAllCarts();
        $_SESSION['carts'] = $carts;
        $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

        $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
        $_SESSION['wishlists'] = $wishlists;
        $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        return $this->view('frontend/checkout',['carts' => $carts]);
    }
}
