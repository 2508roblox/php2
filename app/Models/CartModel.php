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
    public function deleteCart($cart_id)
    {
        $cart_id = mysqli_real_escape_string($this->link, $cart_id);
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "DELETE FROM cart
                WHERE id = '$cart_id' AND user_id = '$user_id'";
        $result = $this->delete($sql);

        if ($result) {
            return true; // Xóa thành công
        } else {
            return false; // Xóa thất bại
        }
    }
    public function updateCart($cart_id, $cart_quantity)
    {
        $cart_id = mysqli_real_escape_string($this->link, $cart_id);
        $cart_quantity = mysqli_real_escape_string($this->link, $cart_quantity);
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "UPDATE cart
                SET quantity = '$cart_quantity'
                WHERE id = '$cart_id' AND user_id = '$user_id'";
        $result = $this->update($sql);

        if ($result) {
            return true; // Cập nhật thành công
        } else {
            return false; // Cập nhật thất bại
        }
    }
}
