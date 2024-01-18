<?php

use App\Libs\Controller;

class CartController extends Controller
{

    public function get()
    {
        $carts =  $this->model('cart')->getAllCarts();
        return $this->view('frontend/cart', ['carts' => $carts]);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // dd($_POST);
            $this->model('cart')->addCart($_POST);
            redirect('cart');
        } else {

            redirect('');
        }

        // dd($product_id);
        // return $this->view('frontend/wishlist');
    }
}
