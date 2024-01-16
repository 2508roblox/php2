<?php

use App\Libs\Database;

class ProductimagesModel extends Database
{

    public function addImage($path, $productid)
    {
        $date = date("Y-m-d h:i:sa");
        $path = $path;
        $productid = $productid;

        $path = mysqli_escape_string($this->link, $path);
        $productid = mysqli_escape_string($this->link, $productid);

        $sql = "INSERT INTO product_img 
        (image , product_id)
        VALUES 
        ('$path', '$productid')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            return $result;
        } else {
            return false;
        }
    }
}