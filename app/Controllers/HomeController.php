<?php

use App\Libs\Controller;

class HomeController extends Controller
{

    public function get()
    {

        $slides =  $this->model('product')->getProductsBySlide();
        $latestProducts =  $this->model('product')->getLatestProducts();
        $carts = $this->model('cart')->getAllCarts();
        $_SESSION['carts'] = $carts;
        $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

        $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
        $_SESSION['wishlists'] = $wishlists;
        $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        $this->view('frontend/index', ['slides' => $slides, 'latestProducts' => $latestProducts]);
    }
    public function getProducts()
    {
    }
}
