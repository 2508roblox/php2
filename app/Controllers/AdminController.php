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

      $category =  $this->model('category')->getAll();
        $this->view('admin/categories', ['categories' =>$category ]);
    }
    public function categoryadd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process the form data
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'upload/';
                $fileName = uniqid() . '_' . $_FILES['image']['name'];
                $destination = $uploadDir . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $_POST['image'] = $destination;
            }
            $result =  $this->model('category')->create($_POST);
            if ($result) {
                // Log the result
                // Example:
            $message = 'Category created successfully';

                // Redirect back
                // Example:
                $this->view('admin/category-add', ['message' => $message]);
                exit;
              
            } else {
                // Log the result
                // Example:
        $message = 'Failed to create category';
        $this->view('admin/category-add', ['message' => $message]);
            }
        } else {
            $this->view('admin/category-add');
        }
        # code...
    }
    public function categoryedit($id)
    {
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form data has been submitted, process it
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'upload/';
                $fileName = uniqid() . '_' . $_FILES['image']['name'];
                $destination = $uploadDir . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $_POST['image'] = $destination;
            }
            // Process and save the form data as needed
            $result =  $this->model('category')->edit($_POST, $id);
            if ($result) {
             
                $message = 'Category created successfully';

                
            redirect('admin/categories');
                exit;
            } else {
            
                $message = 'Failed to create category';
                $this->view('admin/category-edit', ['message' => $message]);
            }
            // Redirect or display a success message
            // Example: redirect to a success page
        } else {
            // Retrieve the category data for editing
            $category = $this->model('category')->getCategoryById($id);
            $this->view('admin/category-edit', ['category' => $category]);
        }
       
    }
    public function categorydelete($id)
    {
         $this->model('category')->delete_cate($id);
     
        redirect('admin/categories');
        

        
        # code...
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
