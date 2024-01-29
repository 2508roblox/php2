<?php

use App\Libs\Controller;

class ShopController extends Controller
{

    public function get()
    {
        $products =  $this->model('product')->getAllProducts();
        $cattegories =  $this->model('category')->getAll();

        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }
        
        return $this->view('frontend/shop', ['products' => $products, 'cattegories' => $cattegories]);
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // dd($_POST['search']);
            $search = $_POST['search'];
            // dd($search);
            $products =  $this->model('product')->getSearchProducts($_POST['search']);

            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
            return $this->view('frontend/shop', ['products' => $products, 'search' => $search]);
        } else {
            $products =  $this->model('product')->getAllProducts();

            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
            return $this->view('frontend/shop', ['products' => $products]);
        }
    }
}
