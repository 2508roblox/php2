<?php

use App\Libs\Controller;

class OrderController extends Controller
{

    public function get()
    {
        $carts = $this->model('cart')->getAllCarts();
        $_SESSION['carts'] = $carts;
        $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

        $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
        $orders =  $this->model('order')->getOrderByUser();
        $_SESSION['wishlists'] = $wishlists;
        $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;

        return $this->view('frontend/order', ['wishlists' => $wishlists, 'orders' => $orders]);
    }
    public function orderdetail($id)

    {
        $carts = $this->model('cart')->getAllCarts();
        $_SESSION['carts'] = $carts;
        $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

        $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
        $orders =  $this->model('orderdetail')->get_order_items_by_order_id($id);

        $_SESSION['wishlists'] = $wishlists;
        $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;

        return $this->view('frontend/orderdetail', ['wishlists' => $wishlists, 'order_items' => $orders]);
    }
    public function add($product_id)
    {
        // dd($product_id);
        $this->model('wishlist')->addWishlist($product_id);
        redirect('wishlist');
        // return $this->view('frontend/wishlist');
    }
    public function delete($id)
    {
        // dd($id);
        $this->model('wishlist')->deleteWishlist($id);
        redirect('wishlist');
        // return $this->view('frontend/wishlist');
    }
}
