<?php
use App\Helpers\Format;

require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>

<!-- Header End -->
<?php foreach ($data['productDetails'] as $productDetail) : ?>
  
    <div class="page-content">

        <div class="d-sm-flex justify-content-between container-fluid py-3">
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php url('') ?>"> Home</a></li>
                    <li class="breadcrumb-item"><?php echo $productDetail['name']; ?></li>
                </ul>
            </nav>
        </div>
        <form action="<?php echo url('cart/add'); ?>" method="post" enctype="multipart/form-data">

            <section class="content-inner py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-md-4">
                            <div class="dz-product-detail sticky-top">
                                <div class="swiper-btn-center-lr">
                                    <div class="swiper product-gallery-swiper2">
                                        <div class="swiper-wrapper" id="lightgallery">
                                            <?php foreach ($data['productImages'] as $productImage) : ?>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage"  id="static-thumbnails">
                                                        <a class="mfp-link lg-item" href="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $productImage['image']; ?>" data-src="images/products/product-detail2/product1.png">
                                                            <i class="feather icon-maximize dz-maximize top-left"></i>
                                                        </a>
                                                        <a href="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $productImage['image']; ?>">
                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $productImage['image']; ?>" alt="image">
                                                        </a>
                                                    </div>
                                                   
                                                    <script>
    lightGallery(document.getElementById('static-thumbnails'), {
    animateThumb: false,
    zoomFromOrigin: false,
    allowMediaOverlap: true,
    toggleThumb: true,
});

</script>
                                                </div>

                                            <?php endforeach; ?>


                                        </div>
                                    </div>
                                    <div class="swiper product-gallery-swiper thumb-swiper-lg">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($data['productImages'] as $productImage) : ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $productImage['image']; ?>" alt="image">
                                                </div>
                                            <?php endforeach; ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="dz-product-detail style-2 p-t20 ps-0">
                                        <div class="dz-content">
                                            <div class="dz-content-footer">
                                                <div class="dz-content-start">
                                                    <span class="badge bg-purple mb-2">SALE <?php
                                                                                            $discountPercentage = ($productDetail['price'] - $productDetail['promotion_price']) / ($productDetail['price']) * 100;
                                                                                            echo number_format($discountPercentage, 0) . '%';
                                                                                            ?> Off</span>
                                                    <h4 class="title mb-1"><a href="<?php url('products/detail/123') ?>"><?php echo $productDetail['name']; ?></a>
                                                    </h4>
                                                    <div class="review-num">
                                                        <ul class="dz-rating me-2">
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
                                                                </svg>

                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                        <span class="text-secondary me-2">4.7 Rating</span>
                                                        <a href="javascript:void(0);">(5 customer reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="para-text">
                                                <?php echo $productDetail['description']; ?>
                                            </p>
                                            <div class="meta-content m-b20 d-flex align-items-end">
                                                <div class="me-3">
                                                    <span class="price-name">Price</span>
                                                    <span class="price-num">
                                                        
                                                    <?php Format::currency( $productDetail['promotion_price'])?>   
                                                        <del> <?php Format::currency( $productDetail['price'])?>   </del></span>
                                                </div>
                                                <div class="btn-quantity quantity-sm light d-xl-none d-blcok d-sm-block">
                                               
                                                    <label class="form-label">Quantity: </label>
                                                    <input type="number" value="1" name="demo_vertical2" max="<?php echo $productDetail['quantity']?>">
                                                </div>
                                            </div>
                                            <input type="text" value="<?php echo $productDetail['id'] ?>" hidden name="product_id">
                                            <input type="number" value="<?php echo $productDetail['quantity']?>" hidden name="max_quantity">

                                            <div class="product-num">
                                                <div class="btn-quantity light d-xl-block d-sm-none d-none">
                                                    <label class="form-label">Quantity: <?php echo $productDetail['quantity']?></label>
                                                    <input type="number" value="1" max="<?php echo $productDetail['quantity']?>" name="demo_vertical2">
                                                </div>


                                            </div>
                                            <div class="dz-info">
                                                <ul>

                                                    <li>
                                                        <strong>Category:</strong>
                                                        <span><?php echo $productDetail['category_name']; ?></span>

                                                    </li>

                                                    <li>
                                                        <strong>Share:</strong>
                                                        <span>
                                                            <a href="javascript:void(0);" target="_blank">
                                                                <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank">
                                                                <i class="fa-brands fa-linkedin-in"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="javascript:void(0);" target="_blank">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="javascript:void(0);" target="_blank">
                                                                <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="banner-social-media">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);">Instagram</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Facebook</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">twitter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="cart-detail">
                                        <a href="javascript:void(0);" class="btn btn-outline-primary w-100 m-b20">Bank Offer
                                            5%
                                            Cashback</a>
                                        <div class="icon-bx-wraper style-4 m-b15">
                                            <div class="icon-bx">
                                                <i class="flaticon flaticon-ship"></i>
                                            </div>
                                            <div class="icon-content">
                                                <span class="text-primary font-14">Easy Returns</span>
                                                <h6 class="dz-title">30 Days</h6>
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
                                                    <td class="price">
                                                    <?php Format::currency( $productDetail['promotion_price'])?>   
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo url('wishlist/add/' . $productDetail['id']); ?>" class="btn btn-white btn-icon m-b20">
                                            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z" fill="black"></path>
                                            </svg>
                                            Add To Wishlist
                                        </a>
                                        <button type="submit" class="btn btn-secondary w-100">ADD TO CART</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

        <section class="content-inner-3 pb-0">
            <div class="container">
                <div class="product-description">
                    <div class="dz-tabs">
                        <ul class="nav nav-tabs center" id="myTab1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Reviews (12)</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="detail-bx text-center">
                                    <h5 class="title"><?php echo $productDetail['small_description']; ?></h5>
                                    <p class="para-text">
                                        <?php echo $productDetail['description']; ?>
                                    </p>
                                    <ul class="feature-detail">
                                        <li>
                                            <i class="icon feather icon-check"></i>
                                            <h5>Biodegradable, renewable bamboo handle</h5>
                                        </li>
                                        <li>
                                            <i class="icon feather icon-check"></i>
                                            <h5>Charcoal infused nylon bristles</h5>
                                        </li>
                                        <li>
                                            <i class="icon feather icon-check"></i>
                                            <h5>Designed to look awesome in your bathroom</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row g-lg-4 g-3">
                                    <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                                        <div class="related-img dz-media">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/feature/product-feature/1.png" alt="/">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-sm-4 col-6">
                                        <div class="related-img dz-media">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/feature/product-feature/2.png" alt="/">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                        <div class="related-img dz-media">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/feature/product-feature/3.png" alt="/">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="clear" id="comment-list">
                                    <div class="post-comments comments-area style-1 clearfix">
                                        <h4 class="comments-title mb-2">Comments (02)</h4>
                                        <p class="dz-title-text">There are many variations of passages of Lorem Ipsum
                                            available.</p>
                                        <div id="comment">
                                            <ol class="comment-list">
                                                <li class="comment even thread-even depth-1 comment" id="comment-2">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/profile4.jpg" alt="/" class="avatar">
                                                            <cite class="fn">Michel Poe</cite>
                                                        </div>
                                                        <div class="comment-content dz-page-text">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's
                                                                standard dummy text ever since the 1500s, when an
                                                                unknown
                                                                printer took a galley of type and scrambled it to make a
                                                                type specimen book.</p>
                                                        </div>
                                                        <div class="reply">
                                                            <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);">Reply</a>
                                                        </div>
                                                    </div>
                                                    <ol class="children">
                                                        <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
                                                            <div class="comment-body" id="div-comment-3">
                                                                <div class="comment-author vcard">
                                                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/profile3.jpg" alt="/" class="avatar">
                                                                    <cite class="fn">Celesto Anderson</cite>
                                                                </div>
                                                                <div class="comment-content dz-page-text">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing
                                                                        and
                                                                        typesetting industry. Lorem Ipsum has been the
                                                                        industry's standard dummy text ever since the
                                                                        1500s,
                                                                        when an unknown printer took a galley of type
                                                                        and
                                                                        scrambled it to make a type specimen book.</p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a class="comment-reply-link" href="javascript:void(0);"> Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
                                                    <div class="comment-body" id="div-comment-4">
                                                        <div class="comment-author vcard">
                                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/profile2.jpg" alt="/" class="avatar">
                                                            <cite class="fn">Monsur Rahman Lito</cite>
                                                        </div>
                                                        <div class="comment-content dz-page-text">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's
                                                                standard dummy text ever since the 1500s, when an
                                                                unknown
                                                                printer took a galley of type and scrambled it to make a
                                                                type specimen book.</p>
                                                        </div>
                                                        <div class="reply">
                                                            <a class="comment-reply-link" href="javascript:void(0);">
                                                                Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="default-form comment-respond style-1" id="respond">
                                            <h4 class="comment-reply-title mb-2" id="reply-title">Good Comments</h4>
                                            <p class="dz-title-text">There are many variations of passages of Lorem
                                                Ipsum
                                                available.</p>
                                            <div class="clearfix">
                                                <form method="post" id="comments_form" class="comment-form" novalidate>
                                                    <p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
                                                    <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
                                                    <p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
                                                    <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                        <button id="submit" type="submit" class="submit btn btn-secondary btnhover3 filled">
                                                            Submit Now
                                                        </button>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-inner-1 overlay-white-middle overflow-hidden">
            <div class="container">
                <div class="section-head style-2">
                    <div class="left-content">
                        <h2 class="title mb-0">Related products</h2>
                    </div>
                    <a href="<?php url('products/detail/123') ?>" class="text-secondary font-14 d-flex align-items-center gap-1">See all products
                        <i class="icon feather icon-chevron-right font-18"></i>
                    </a>
                </div>
                <div class="swiper-btn-center-lr">
                    <div class="swiper swiper-four">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/5.png" alt="image">
                                        <div class="shop-meta">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                <span class="d-md-block d-none">Quick View</span>
                                            </a>
                                            <div class="btn btn-primary meta-icon dz-wishicon">
                                                <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white" />
                                                </svg>
                                                <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <div class="btn btn-primary meta-icon dz-carticon">
                                                <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white" />
                                                    <path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white" />
                                                    <path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                Toothbrushes</a></h5>
                                        <ul class="star-rating">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <h6 class="price">
                                            <del>$45.00</del>
                                            $40.00
                                        </h6>
                                    </div>
                                    <div class="product-tag">
                                        <span class="badge badge-secondary">-31%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/6.png" alt="image">
                                        <div class="shop-meta">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                <span class="d-md-block d-none">Quick View</span>
                                            </a>
                                            <div class="btn btn-primary meta-icon dz-wishicon">
                                                <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white" />
                                                </svg>
                                                <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="btn btn-primary meta-icon dz-carticon">
                                                <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white" />
                                                    <path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white" />
                                                    <path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="<?php url('products/detail/123') ?>">Eco friendly
                                                bags</a>
                                        </h5>
                                        <ul class="star-rating">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <h6 class="price">
                                            <del>$95.00</del>
                                            $35.00
                                        </h6>
                                    </div>
                                    <div class="product-tag">
                                        <span class="badge badge-secondary">-40%</span>
                                        <span class="badge badge-primary">Featured</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/7.png" alt="image">
                                        <div class="shop-meta">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                <span class="d-md-block d-none">Quick View</span>
                                            </a>
                                            <div class="btn btn-primary meta-icon dz-wishicon">
                                                <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white" />
                                                </svg>
                                                <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <div class="btn btn-primary meta-icon dz-carticon">
                                                <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white" />
                                                    <path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white" />
                                                    <path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white" />
                                                    <clipPath id="clip0_502_306">
                                                        <rect width="14" height="14" fill="white" />
                                                    </clipPath>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden Water
                                                Bottles</a></h5>
                                        <ul class="star-rating">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <h6 class="price">
                                            <del>$85.00</del>
                                            $40.00
                                        </h6>
                                    </div>
                                    <div class="product-tag">
                                        <span class="badge badge-secondary">Sale</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/8.png" alt="image">
                                        <div class="shop-meta">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                <span class="d-md-block d-none">Quick View</span>
                                            </a>
                                            <div class="btn btn-primary meta-icon dz-wishicon">
                                                <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white" />
                                                </svg>
                                                <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <div class="btn btn-primary meta-icon dz-carticon">
                                                <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white" />
                                                    <path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white" />
                                                    <path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white" />
                                                    <clipPath id="clip0_502_906">
                                                        <rect width="14" height="14" fill="white" />
                                                    </clipPath>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden Cup</a>
                                        </h5>
                                        <ul class="star-rating">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <h6 class="price">
                                            <del>$25.00</del>
                                            $10.00
                                        </h6>
                                    </div>
                                    <div class="product-tag">
                                        <span class="badge badge-secondary">-25%</span>
                                        <span class="badge badge-primary">Featured</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/8.png" alt="image">
                                        <div class="shop-meta">
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                <span class="d-md-block d-none">Quick View</span>
                                            </a>
                                            <div class="btn btn-primary meta-icon dz-wishicon">
                                                <svg class="dz-heart-fill" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z" fill="white" />
                                                </svg>
                                                <svg class="dz-heart feather feather-heart" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <div class="btn btn-primary meta-icon dz-carticon">
                                                <svg class="dz-cart-check" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg class="dz-cart-out" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z" fill="white" />
                                                    <path d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z" fill="white" />
                                                    <path d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z" fill="white" />
                                                    <clipPath id="clip0_50_3906">
                                                        <rect width="14" height="14" fill="white" />
                                                    </clipPath>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden Cup</a>
                                        </h5>
                                        <ul class="star-rating">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#E4E5E8"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <h6 class="price">
                                            <del>$55.00</del>
                                            $40.00
                                        </h6>
                                    </div>
                                    <div class="product-tag">
                                        <span class="badge badge-secondary">-15%</span>
                                        <span class="badge badge-primary">Featured</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-align">
                        <div class="tranding-button-prev btn-prev">
                            <i class="flaticon flaticon-left-chevron"></i>
                        </div>
                        <div class="tranding-button-next btn-next">
                            <i class="flaticon flaticon-chevron"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                <h5 class="dz-title m-b10">Filter & Discover</h5>
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
                                <h5 class="dz-title m-b10">Add to cart</h5>
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
                                <h5 class="dz-title m-b10">Fast Shipping</h5>
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
                                <h5 class="dz-title m-b10">Enjoy The Product</h5>
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

<?php endforeach; ?>

use App\Helpers\Format;

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

<!-- Quick Modal Start -->
<div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="icon feather icon-x"></i>
            </button>
            <div class="modal-body">
                <div class="row g-xl-4 g-3">
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail mb-0">
                            <div class="swiper-btn-center-lr">
                                <div class="swiper quick-modal-swiper2">
                                    <div class="swiper-wrapper" id="lightgallery2">
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat.png" data-src="images/products/baby-seat.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat.png" alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat2.png" data-src="images/products/baby-seat2.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat2.png" alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat3.png" data-src="images/products/baby-seat3.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat3.png" alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat.png" data-src="images/products/baby-seat.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat1.png" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat2.png" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat3.png" alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat1.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
                            <div class="dz-content">
                                <div class="dz-content-footer">
                                    <div class="dz-content-start">
                                        <span class="badge bg-purple mb-2">SALE 20% Off</span>
                                        <h4 class="title mb-1"><a href="<?php url('products/detail/123') ?>">Baby
                                                Strollers</a></h4>
                                        <div class="review-num">
                                            <ul class="dz-rating me-2">
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
                                                    </svg>

                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                            <span class="text-secondary me-2">4.7 Rating</span>
                                            <a href="javascript:void(0);">(5 customer reviews)</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="para-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has.
                                </p>
                                <div class="meta-content m-b20 d-flex align-items-end">
                                    <div class="me-3">
                                        <span class="form-label">Price</span>
                                        <span class="price-num">$125.75 <del>$132.17</del></span>
                                    </div>
                                    <div class="btn-quantity light me-0">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" value="1" name="quantity">
                                    </div>
                                </div>
                                <div class="btn-group cart-btn">
                                    <a href="" class="btn btn-md btn-secondary text-uppercase">Add
                                        To
                                        Cart</a>
                                    <a href="<?php echo url('wishlist/add/' . $productDetail['id']); ?>" class="btn btn-md btn-light btn-icon">
                                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z" fill="black"></path>
                                        </svg>
                                        Add To Wishlist
                                    </a>
                                </div>
                                <div class="dz-info mb-0">
                                    <ul>
                                        <li>
                                            <strong>SKU:</strong>
                                            <span>PRT584E63A</span>
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            <span>Bottles,</span>
                                            <span>Accessories,</span>
                                            <span>Mats,</span>
                                            <span>Bottles,</span>
                                            <span>Trackers</span>
                                        </li>
                                        <li>
                                            <strong>Tags:</strong>
                                            <span>Trackers,</span>
                                            <span>Bags,</span>
                                            <span>Cup,</span>
                                            <span>Toothbrushes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Modal End -->

</div>

</body>