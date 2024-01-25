<?php

use App\Libs\Session;
use App\Helpers\Format;

require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>


<div class="page-content">
    <!--banner-->
    <div class="dz-bnr-inr" style="background-image:url(<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/background/bg-shape.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Chi tiết đơn hàng </h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php url('') ?>"> Home</a></li>
                        <li class="breadcrumb-item">Chi tiết đơn hàng</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <!-- contact area -->
    <section class="content-inner shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table check-tbl">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th></th>
                                    <th>Giá </th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subtotal  =  0;

                                if (is_array($data['order_items']) || is_object($data['order_items'])) : ?>
                                    <?php foreach ($data['order_items'] as $order_item) : ?>
                                        <?php $subtotal += $order_item['quantity'] * $order_item['price'] ?>
                                        <tr>
                                            <td class="product-item-img"><img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $order_item['product_image']  ?>" alt="/"></td>
                                            <td class="product-item-name"><?php echo $order_item['product_name']; ?>

                                            </td>
                                            <td class="product-item-price">
                                                <?php Format::currency($order_item['promotion_price']) ?>
                                            </td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity style-1 me-3">
                                                    <input type="text" value="<?php echo $order_item['quantity']; ?>" disabled>
                                                </div>
                                            </td>
                                            <td class="product-item-totle">
                                                <?php Format::currency($order_item['promotion_price'] * $order_item['quantity']) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6">No items in the cart.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                    <div class="row shop-form m-t30">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-0">

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="title mb15">Tổng giỏ hàng</h4>
                    <div class="cart-detail">
                        <a href="javascript:void(0);" class="btn btn-outline-primary w-100 m-b20">Bank Offer 5%
                            Cashback</a>
                        <div class="icon-bx-wraper style-4 m-b15">
                            <div class="icon-bx">
                                <i class="flaticon flaticon-ship"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary font-14">FREE</span>
                                <h6 class="dz-title">Enjoy The Product</h6>
                            </div>
                        </div>
                        <div class="icon-bx-wraper style-4 m-b30">
                            <div class="icon-bx">
                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/shop-cart/icon-box/pic2.png" alt="/">
                            </div>
                            <div class="icon-content">
                                <h6 class="dz-title">Enjoy The Product</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                        <div class="save-text">
                            <i class="icon feather icon-check-circle"></i>
                            <span class="m-l10">You will save ₹504 on this order</span>
                        </div>
                        <table>
                            <tbody>
                                <tr class="total">
                                    <td>
                                        <h6 class="mb-0">Total</h6>
                                    </td>
                                    <td class="price text-success">

                                        <?php Format::currency($subtotal) ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </section>
    <!-- contact area End-->

    <!-- Icon Box Start -->
    <section class="content-inner py-0">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 bg-light">
                        <div class="icon-bx">
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/password-check.svg" alt="/">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Filter & Discover</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">01</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx">
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/cart.svg" alt="/">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Add to cart</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">02</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2 bg-light">
                        <div class="icon-bx">
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/discovery.svg" alt="/">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Fast Shipping</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">03</div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="icon-bx-wraper style-2">
                        <div class="icon-bx">
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/box-tick.svg" alt="/">
                        </div>
                        <div class="icon-content">
                            <h5 class="dz-title">Enjoy The Product</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="data-text">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Icon Box End -->

</div>


<!-- Footer -->
<footer class="site-footer style-1">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="widget widget_about me-2">
                        <div class="footer-logo logo-white">
                            <a href="<?php url('') ?>"><img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/logo.svg" alt="/"></a>
                        </div>
                        <ul class="widget-address">
                            <li>
                                <p><span>Address</span> : 451 Wall Street, UK, London</p>
                            </li>
                            <li>
                                <p><span>E-mail</span> : example@info.com</p>
                            </li>
                            <li>
                                <p><span>Phone</span> : (064) 332-1233</p>
                            </li>
                        </ul>
                        <div class="subscribe_widget">
                            <h6 class="title fw-medium text-capitalize">subscribe to our newsletter</h6>
                            <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                    <path d="M4.20972 10.7344H15.8717" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M10.0408 4.90112L15.8718 10.7345L10.0408 16.5678" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="widget widget_post">
                        <h5 class="footer-title">Recent Posts</h5>
                        <ul>
                            <li>
                                <div class="dz-media">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/1.png" alt="/">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/2.png" alt="/">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/3.png" alt="/">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a href="javascript:void(0);">Bamboo toothbrushes</a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Our Stores</h5>
                        <ul>
                            <li><a href="javascript:void(0);">New York</a></li>
                            <li><a href="javascript:void(0);">London SF</a></li>
                            <li><a href="javascript:void(0);">Edinburgh</a></li>
                            <li><a href="javascript:void(0);">Los Angeles</a></li>
                            <li><a href="javascript:void(0);">Chicago</a></li>
                            <li><a href="javascript:void(0);">Las Vegas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4 col-6">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Useful Links</h5>
                        <ul>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Returns</a></li>
                            <li><a href="javascript:void(0);">Terms & Conditions</a></li>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Latest News</a></li>
                            <li><a href="javascript:void(0);">Our Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-4">
                    <div class="widget widget_services">
                        <h5 class="footer-title">Footer Menu</h5>
                        <ul>
                            <li><a href="javascript:void(0);">Instagram profile</a></li>
                            <li><a href="javascript:void(0);">New Collection</a></li>
                            <li><a href="javascript:void(0);">Woman Dress</a></li>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Latest News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row fb-inner">
                <div class="col-lg-6 col-md-12 text-start">
                    <p class="copyright-text">© 2023 <a href="https://hugebinary.com/">HugeBinary</a> Theme. All Rights
                        Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
                        <span class="me-3">We Accept: </span>
                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/footer-img.png" alt="/">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>
<!-- Footer End -->

<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>


</div>


</body>