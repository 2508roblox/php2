<?php

use App\Libs\Database;

class CartModel extends Database
{

    public function addCart($data)
    {

        $product_id = mysqli_escape_string($this->link, $data['product_id']);
        $quantity = mysqli_escape_string($this->link, $data['demo_vertical2']);
        $user_id = mysqli_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "INSERT INTO cart 
        (product_id,
quantity,
user_id)
        VALUES 
        ('$product_id',
'$quantity',
'$user_id')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            return $result;
        } else {
            return false;
        }
    }
    public function getAllCarts()
    {
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);
        $sql = "SELECT c.*, p.promotion_price , p.name AS product_name, pi.image AS product_image
        FROM cart AS c
        JOIN products AS p ON c.product_id = p.id
        LEFT JOIN (
            SELECT product_id, MIN(id) AS min_image_id, image
            FROM product_img
            GROUP BY product_id
        ) AS pi ON p.id = pi.product_id
        WHERE c.user_id = '$user_id'";
        $result = $this->select($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
