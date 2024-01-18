<?php

use App\Libs\Database;

class WishlistModel extends Database
{

    public function addWishlist($productid)
    {

        $product_id = mysqli_escape_string($this->link, $productid);
        $user_id = mysqli_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "INSERT INTO wishlists 
        (product_id , user_id)
        VALUES 
        ('$product_id', '$user_id')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            return $result;
        } else {
            return false;
        }
    }
}
