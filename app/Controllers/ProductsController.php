<?php

use App\Libs\Controller;

class ProductsController extends Controller
{
    public function get()
    {

        # code...
        $this->view('frontend/products');
    }
    public function detail($product_id)

    {
        $productDetails =  $this->model('product')->getProductDetails($product_id);
        $productImages =  $this->model('product')->getProductImages($product_id);
        # code...
        $this->view('frontend/product_detail', ['productDetails' => $productDetails, 'productImages' => $productImages]);
    }
}
