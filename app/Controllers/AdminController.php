<?php

use App\Libs\Controller;

class AdminController extends Controller
{

    public function get()
    {

        return $this->view('admin/index');
    }
    public function products()
    {

        # code...
        $this->view('admin/products');
    }
    public function productadd()
    {

        # code...
        $this->view('admin/products-add');
    }
    public function categories()
    {

        # code...
        $this->view('admin/categories');
    }
    public function categoryadd()
    {

        # code...
        $this->view('admin/category-add');
    }
    public function customers()
    {

        # code...
        $this->view('admin/customers');
    }
    public function customerdetails()
    {

        # code...
        $this->view('admin/customer-details');
    }
    public function orders()
    {

        # code...
        $this->view('admin/orders');
    }
    public function ordersdetails()
    {

        # code...
        $this->view('admin/order-details');
    }
    public function coupons()
    {

        # code...
        $this->view('admin/coupons');
    }
    public function couponadd()
    {

        # code...
        $this->view('admin/coupon-add');
    }
}