<?php

use App\Libs\Controller;

class HomeController extends Controller
{

    public function get()
    {

        $slides =  $this->model('product')->getProductsBySlide();
        $latestProducts =  $this->model('product')->getLatestProducts();
        $this->view('frontend/index', ['slides' => $slides, 'latestProducts' => $latestProducts]);
    }
    public function getProducts()
    {
    }
}
