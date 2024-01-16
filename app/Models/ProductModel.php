<?php

use App\Libs\Database;

class ProductModel extends Database
{

    public function addProduct($data,  $listFile)
    {
        $date = date("Y-m-d h:i:sa");
        $name = $data['name'];
        $slug = $data['slug'];
        $small_description = $data['small_description'];
        $description = $data['description'];
        $price = $data['price'];
        $promotion_price = $data['promotion_price'];
        $quantity = $data['quantity'];
        $feature = $data['feature'] ? true : false;
        $status = $data['status'];
        $publish_date = $data['publish_date'];
        $meta_keyword = $data['meta_keyword'];
        $meta_description = $data['meta_description'];
        $category_id = $data['category_id'];
        $slide = $data['slide'] ? 1 : 0;;



        $name = mysqli_escape_string($this->link, $name);
        $slug = mysqli_escape_string($this->link, $slug);
        $small_description = mysqli_escape_string($this->link, $small_description);
        $description = mysqli_escape_string($this->link, $description);
        $price = mysqli_escape_string($this->link, $price);
        $promotion_price = mysqli_escape_string($this->link, $promotion_price);
        $quantity = mysqli_escape_string($this->link, $quantity);
        $feature = mysqli_escape_string($this->link, $feature);
        $status = mysqli_escape_string($this->link, $status);
        $publish_date = mysqli_escape_string($this->link, $publish_date);
        $meta_keyword = mysqli_escape_string($this->link, $meta_keyword);
        $meta_description = mysqli_escape_string($this->link, $meta_description);
        $category_id = mysqli_escape_string($this->link, $category_id);



        $sql = "INSERT INTO products 
        (name, slug, small_description, description, price, promotion_price, quantity,
         feature, status, publish_date, meta_keyword, meta_description, category_id,slide)
        VALUES 
        ('$name', '$slug', '$small_description', '$description', '$price',
         '$promotion_price', '$quantity', '$feature', '$status', '$publish_date',
         '$meta_keyword', '$meta_description', '$category_id', '$slide')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            $productId = mysqli_insert_id($this->link);
            return $productId;
        } else {
            return false;
        }
    }
    public function getAllProducts()
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
                FROM products as p
                JOIN categories  as c ON p.category_id = c.id
                LEFT JOIN product_img as pi ON p.id = pi.product_id
                GROUP BY p.id
                ";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductsBySlide()
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
            FROM products as p
            JOIN categories  as c ON p.category_id = c.id
            LEFT JOIN product_img as pi ON p.id = pi.product_id
            WHERE p.slide = 1
            GROUP BY p.id";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getLatestProducts()
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
            LEFT JOIN (
                SELECT product_id, MIN(id) AS min_image_id, image
                FROM product_img
                GROUP BY product_id
            ) AS pi ON p.id = pi.product_id
            ORDER BY p.publish_date DESC
            LIMIT 8";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductDetails($id)
    {
        $sql = "SELECT p.*, c.name AS category_name 
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
        
            WHERE p.id = $id
            ORDER BY p.publish_date DESC";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductImages($id)
    {
        $sql = "SELECT  * 
            FROM product_img
            
            WHERE product_img.product_id = $id
            ORDER BY id DESC";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
}
