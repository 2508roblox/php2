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
        $products =  $this->model('product')->getAllProducts();

        # code...
        $this->view('admin/products', ['products' => $products]);
    }
    public function productadd()
    {
        $category =  $this->model('category')->getAll();
        # code...
        $this->view('admin/products-add', ['categories' => $category]);
    }
    public function store_add_product()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $images = $_FILES['images'];
            $result =  $this->model('product')->addProduct($_POST, $images);

            if ($result) {
                foreach ($images['name'] as $key => $name) {
                    $tmp_name = $images['tmp_name'][$key];
                    $error = $images['error'][$key];

                    if ($error === UPLOAD_ERR_OK) {
                        $uploadDir = 'upload/';
                        $fileName = uniqid() . '_' . $name;
                        $destination = $uploadDir . $fileName;

                        if (move_uploaded_file($tmp_name, $destination)) {
                            // File moved successfully, update the file path in the database
                            $resultss = $this->model('productimages')->addImage($fileName, $result);
                        } else {
                            // Failed to move the file, handle the error
                            echo "Error moving file: " . $name . "<br>";
                            echo "<br>";
                        }
                    }
                }
                $message = 'Product created successfully';

                $this->view('admin/products', ['message' => $message]);
                exit;
            } else {
                // Log the result
                // Example:
                $message = 'Failed to create category';
                $this->view('admin/category-add', ['message' => $message]);
            }

            $this->view('admin/products-add');
        }

        # code...
        $this->view('admin/products-add');
    }
    public function categories()
    {

        $category =  $this->model('category')->getAll();
        $this->view('admin/categories', ['categories' => $category]);
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

       $customers = $this->model('user')->getCustomers();
        $this->view('admin/customers', ['customers' => $customers]);
    }
    public function update_to_admin()
    {
        $id = $_POST['user_id'];
       $result =  $this->model('user')->update_role($id);
     
        redirect('admin/customers');
    }
    public function delete_customer($id)
    {
        echo $id;
       $result =  $this->model('user')->delete_user($id);
        
        redirect('admin/customers');
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
