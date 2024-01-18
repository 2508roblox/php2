<?php

use App\Libs\Database;

class OrderdetailModel extends Database
{

    public function create_order_detail($carts, $orderId)
    {
        $userId = $_SESSION['user']['id'];

        // Check if the $carts array is not empty
        if (empty($carts)) {
            return false;
        }

        // Prepare the SQL query to insert order items
        $query = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ";

        $values = array();
        foreach ($carts as $cart) {
            $productId = $cart['product_id'];
            $quantity = $cart['quantity'];
            $price = $cart['promotion_price'];

            // Add the values to the list
            $values[] = "($orderId, $productId, $quantity, $price)";
        }

        // Join the values with commas
        $valuesString = implode(", ", $values);

        // Append the values string to the query
        $query .= $valuesString;

        // Execute the query
        $result = $this->insert($query);

        // Check if the insertion was successful
        if ($result) {
            return $this->getLastInsertedID();
        } else {
            return false;
        }
    }
 
}