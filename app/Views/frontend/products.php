<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/products.css">
</head>
<body>
<?php
 
 include_once __DIR__ . '/./inc/header.php';
 $p_data  = isset($data['products']) ? $data['products'] : null;
 ?>
 <div class="product-container">
 
 <?php
 
 if (isset($p_data)) {
     $count = 0;
     while ($p_assoc = $p_data->fetch_assoc()) {
 ?>
 <div class="product">
     <img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['image'] ?>" alt="Product 1">
     <h2>Product <?php echo $p_assoc['id']  ?></h2>
     <p>Price: $<?php echo $p_assoc['price']  ?></p>
     <p>Status: <?php echo $p_assoc['new'] == '1' ? 'New' : 'Normal'  ?></p>
     <p>Views: <?php echo $p_assoc['view']  ?></p>
     <p>Hot: No</p>
 </div>
 <?php
     }
 }
 
 ?>
 </div>
 
 
 <?php
 include_once __DIR__ . '/./inc/footer.php';
 ?>
</body>
</html>