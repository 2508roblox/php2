<?php

use App\Libs\Controller;

class ProductsController extends Controller
{
    public function get()
    {

        # code...
        $this->view('frontend/products');
    }
}