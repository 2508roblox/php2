<?php
include_once __DIR__ . '/./inc/header.php';
$p_detail = isset($data['p_detail']) ? $data['p_detail'] : null;
 
$fm = new Format();
?>
 <div class="product">
     <img height="400px" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $data['p_detail']['image'] ?>" alt="Product 1">
     <h2>Product <?php echo $data['p_detail']['id']  ?></h2>
     <p>Price: $<?php echo $data['p_detail']['price']  ?></p>
     <p>Status: <?php echo $data['p_detail']['new'] == '1' ? 'New' : 'Normal'  ?></p>
     <p>Views: <?php echo $data['p_detail']['view']  ?></p>
     <p>Hot: No</p>
 </div>
<br>


<?php
include_once __DIR__ . '/./inc/footer.php';
?>
<style>
    .product {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-bottom: 20px;
}

.product img {
  width: 300px;
  height: auto;
  margin-bottom: 10px;
}

.product h2 {
  font-size: 24px;
  margin-bottom: 5px;
}

.product p {
  font-size: 16px;
  margin-bottom: 5px;
}
</style>