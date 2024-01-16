<?php

use App\Libs\Database;
use App\Helpers\Format as Format;

class CouponModel extends Database
{
    public function _create($data)
    {
       // Validate the required fields
       if (empty($data['code']) || empty($data['discount']) || empty($data['usage_limit']) ) {
        return false;
    }

    // Extract the data fields
    $code = $data['code'];
    $discount = $data['discount'];
    $usageLimit = $data['usage_limit'];
    $isActive = $data['is_active'];
    $expiresAt = Format::formatDate($data['expires_at']); ;
    
    // Prepare the SQL query
    $query = "INSERT INTO coupons (code, discount, usage_limit, is_active, expires_at ) 
              VALUES ('$code', $discount, $usageLimit, $isActive, '$expiresAt' )";

    // Execute the query
    $result = $this->insert($query);

    // Check if the insertion was successful
    if ($result) {
        return true;
    } else {
        return false;
    }
    }
 
    public function getAll()
    {
       
    $query = "SELECT * FROM coupons";

    // Execute the query
    $result = $this->select($query);

    // Check if the insertion was successful
    if ($result) {
        $coupons = [];
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $coupons[] = $row;
            }
        }
        return $coupons;
    } else {
        return false;
    }
    }
 
}
