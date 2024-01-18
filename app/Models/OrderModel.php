<?php

use App\Libs\Database;

class OrderModel extends Database
{

    public function create_order($data)
    {
        // Validate the required fields
        if (empty($data['firstname']) || empty($data['lastname']) || empty($data['address']) || empty($data['city']) || empty($data['phone'])   || empty($data['payment_method']) || empty($data['total_amount']) ) {
            return false;
        }

        // Extract the data fields
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $address = $data['address'];
        $city = $data['city'];
        $phone = $data['phone'];
        $payment_method = $data['payment_method'];
        $total_amount = $data['total_amount'];
        $shipping_price = $data['shipping_price'];
        $discount = $data['discount'] ?? '0';
        // Prepare the SQL query
        $query = "INSERT INTO orders (firstname, lastname, address, city, phone, payment_mode, total_amount, discount, shipping_price) 
                  VALUES ('$firstname', '$lastname', '$address', '$city', '$phone',   '$payment_method', '$total_amount', '$discount', '$shipping_price')";

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