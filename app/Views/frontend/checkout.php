<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="HugeBinary">
	<meta name="robots" content="">
	<meta name="description" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:title" content="MoonCart Shop & eCommerce HTML Template">
	<meta property="og:description" content="MoonCart Shop & eCommerce HTML Template">
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png">
	
	<!-- PAGE TITLE HERE -->
	<title>MoonCart Shop & eCommerce HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="icons/flaticon/flaticon_mooncart.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lightgallery.css" >
    <link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-thumbnail.css">
    <link rel="stylesheet" type="text/css" href="vendor/lightgallery/dist/css/lg-zoom.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div>
			<span class="loader-2"></span>
			<img src="images/logo.png" alt="/">
			<span class="loader"></span>
		</div>
	</div>
	
	<!-- Header -->
	<header class="site-header mo-left header header-transparent">			
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container-fluid clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark me-md-5">
						<a href="index.html"><img src="images/logo.svg" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">						
							<ul class="header-right">
								<li class="nav-item login-link">
									<a class="nav-link" href="shop-my-account.html">
										LOGIN / REGISTER
									</a>
								</li>
								<li class="nav-item search-link">
									<a class="nav-link"  href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="10.0535" cy="10.55" r="7.49047" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.2632 16.1487L18.1999 19.0778" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</li>
								<li class="nav-item wishlist-link">
									<a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2.64119 10.4097C1.74702 7.61808 2.79202 4.42724 5.72285 3.48308C7.26452 2.98558 8.96619 3.27891 10.2479 4.24308C11.4604 3.30558 13.2245 2.98891 14.7645 3.48308C17.6954 4.42724 18.747 7.61808 17.8537 10.4097C16.462 14.8347 10.2479 18.2431 10.2479 18.2431C10.2479 18.2431 4.07952 14.8864 2.64119 10.4097Z" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M13.5813 6.32781C14.473 6.61614 15.103 7.41197 15.1788 8.34614" stroke="var(--white)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</li>
								<li class="nav-item cart-link">
									<a href="javascript:void(0);" class="nav-link cart-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M1.08374 2.61947C1.08374 2.27429 1.36356 1.99447 1.70874 1.99447H3.29314C3.91727 1.99447 4.4722 2.39163 4.67352 2.98239L5.06379 4.1276H15.4584C17.6446 4.1276 19.4168 5.89981 19.4168 8.08593V11.5379C19.4168 13.7241 17.6446 15.4963 15.4584 15.4963H9.22182C7.30561 15.4963 5.66457 14.1237 5.32583 12.2377L4.00967 4.90953L3.49034 3.3856C3.46158 3.30121 3.3823 3.24447 3.29314 3.24447H1.70874C1.36356 3.24447 1.08374 2.96465 1.08374 2.61947ZM5.36374 5.3776L6.55614 12.0167C6.78791 13.3072 7.91073 14.2463 9.22182 14.2463H15.4584C16.9542 14.2463 18.1668 13.0337 18.1668 11.5379V8.08593C18.1668 6.59016 16.9542 5.3776 15.4584 5.3776H5.36374Z" fill="var(--white)"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M8.16479 17.8278C8.16479 17.1374 8.72444 16.5778 9.4148 16.5778H9.42313C10.1135 16.5778 10.6731 17.1374 10.6731 17.8278C10.6731 18.5182 10.1135 19.0778 9.42313 19.0778H9.4148C8.72444 19.0778 8.16479 18.5182 8.16479 17.8278Z" fill="var(--white)"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M14.8315 17.8278C14.8315 17.1374 15.3912 16.5778 16.0815 16.5778H16.0899C16.7802 16.5778 17.3399 17.1374 17.3399 17.8278C17.3399 18.5182 16.7802 19.0778 16.0899 19.0778H16.0815C15.3912 19.0778 14.8315 18.5182 14.8315 17.8278Z" fill="var(--white)"/>
										</svg>
										<span class="badge badge-circle">5</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.html"><img src="images/logo.svg" alt="/"></a>
						</div>
						<ul class="nav navbar-nav dark-nav">
							<li class="has-mega-menu sub-menu-down">
								<a href="javascript:void(0);"><span>Home</span></a>
								<div class="mega-menu demo-menu">
									<div class="row"> 
										<div class="col-md-3 col-6"><a href="index.html"  ><img src="images/demo/demo-1.png" alt="/"> <span class="menu-title">01 Home Page</span></a></div>
										<div class="col-md-3 col-6"><a href="index-2.html"><img src="images/demo/demo-2.png" alt="/"> <span class="menu-title">02 Home Page</span></a></div>
										<div class="col-md-3 col-6"><a href="index-3.html"><img src="images/demo/demo-3.png" alt="/"> <span class="menu-title">03 Home Page</span></a></div>
										<div class="col-md-3 col-6"><a href="index-4.html"><img src="images/demo/demo-4.png" alt="/"> <span class="menu-title">04 Home Page</span></a></div>
									</div>
								</div>
							</li>
							<li class="has-mega-menu sub-menu-down">
								<a href="javascript:void(0);"><span>Shop</span></a>
								<div class="mega-menu shop-menu">
									<div class="row"> 
										<div class="col-lg-12 col-md-12 col-sm-12"> 
											<div class="row"> 
												<div class="col-md-4 col-sm-6 col-6"> 
													<a href="javascript:;" class="menu-title">Shop Structure</a>
													<ul>
														<li><a href="shop-standard.html">Shop Standard</a></li>
														<li><a href="shop-list.html">Shop List</a></li>
														<li><a href="shop-with-category.html">Shop With Category</a></li>
														<li><a href="shop-filters-top-bar.html">Shop Filters Top Bar</a></li>
														<li><a href="shop-sidebar.html">Shop Sidebar</a></li>
														<li><a href="shop-style-1.html">Shop Style 1</a></li>
													</ul>
													<a href="javascript:;" class="menu-title">Product Structure</a>
													<ul>
														<li><a href="product-default.html">Default</a></li>
														<li><a href="product-thumbnail.html">Thumbnail</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-6 col-12"> 
													<a href="javascript:;" class="menu-title">Shop Pages</a>
													<ul>						
														<li><a href="shop-wishlist.html">Wishlist</a></li>
														<li><a href="shop-cart.html">Cart</a></li>
														<li><a href="shop-checkout.html">Checkout</a></li>
														<li><a href="shop-order-tracking.html">Order Tracking</a></li>
														<li><a href="shop-my-account.html">My Account</a></li>
														<li><a href="shop-registration.html">Registration</a></li>
													</ul>
												</div>
												<div class="col-md-5 col-sm-4 col-6 d-none d-md-block"> 
													<div class="adv-media"><img src="images/adv-1.png" alt="/"></div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="month-deal">
														<div>
															<h3>Deal of the month</h3>
															<p class="mb-0">Yes! Send me exclusive offers, personalised, and unique gift ideas, tips for shopping on MoonCart <a href="shop-standard.html" class="dz-link-2">View All Products</a></p>
														</div>
														<div class="sale-countdown">
															<div class="countdown text-center">
																<div class="date"><span class="time days text-primary"></span>
																	<span class="work-time">Days</span>
																</div>
																<div class="date"><span class="time hours text-primary"></span>
																	<span class="work-time">Hours</span>
																</div>
																<div class="date"><span class="time mins text-primary"></span>
																	<span class="work-time">Minutess</span>
																</div>
																<div class="date"><span class="time secs text-primary"></span>
																	<span class="work-time">Second</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Blog</span></a>
								<div class="mega-menu blog-menu">
									<div class="row"> 
										<div class="col-md-6 col-sm-6 col-6"> 
											<a href="javascript:;" class="menu-title">Blog Dark Style</a>
											<ul>
												<li><a href="blog-dark-2-column.html">Blog 2 Column</a></li>
												<li><a href="blog-dark-2-column-sidebar.html">Blog 2 Column Sidebar</a></li>
												<li><a href="blog-dark-3-column.html">Blog 3 Column</a></li>
												<li><a href="blog-dark-half-image.html">Blog Half Image</a></li>
											</ul>
											<a href="javascript:;" class="menu-title">Blog Light Style</a>
											<ul>
												<li><a href="blog-light-2-column.html">Blog 2 Column</a></li>
												<li><a href="blog-light-2-column-sidebar.html">Blog 2 Column Sidebar</a></li>
												<li><a href="blog-light-3-column.html">Blog 3 Column</a></li>
												<li><a href="blog-light-half-image.html">Blog Half Image</a></li>
											</ul>
											<a href="javascript:;" class="menu-title">Blog Details</a>
											<ul>	
												<li><a href="post-standard.html">Post Standard</a></li>
												<li><a href="post-header-image.html">Post Header Image</a></li>
											</ul>
										</div>
										<div class="col-md-6 col-sm-6 col-12">
											<a href="javascript:;" class="menu-title">Recent Posts</a>
											<div class="widget widget_post pt-2">
												<ul>
													<li>
														<div class="dz-media">
															<img src="images/shop/product/small/1.png" alt="">
														</div>
														<div class="dz-content">
															<h6 class="name"><a href="post-standard.html">Wooden Water Bottles</a></h6>
															<span class="time">July 23, 2023</span>
														</div>
													</li>
													<li>
														<div class="dz-media">
															<img src="images/shop/product/small/2.png" alt="">
														</div>
														<div class="dz-content">
															<h6 class="name"><a href="post-standard.html">Eco friendly bags</a></h6>
															<span class="time">July 23, 2023</span>
														</div>
													</li>
													<li>
														<div class="dz-media">
															<img src="images/shop/product/small/3.png" alt="">
														</div>
														<div class="dz-content">
															<h6 class="name"><a href="post-standard.html">Bamboo toothbrushes</a></h6>
															<span class="time">July 23, 2023</span>
														</div>
													</li>
													<li>
														<div class="dz-media">
															<img src="images/shop/product/small/2.png" alt="">
														</div>
														<div class="dz-content">
															<h6 class="name"><a href="post-standard.html">Eco friendly bags</a></h6>
															<span class="time">July 23, 2023</span>
														</div>
													</li>
													<li>
														<div class="dz-media">
															<img src="images/shop/product/small/1.png" alt="">
														</div>
														<div class="dz-content">
															<h6 class="name"><a href="post-standard.html">Wooden Water Bottles</a></h6>
															<span class="time">July 23, 2023</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="sub-menu sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>
								<ul class="sub-menu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="about-me.html">About Me</a></li>
									<li><a href="pricing-table.html">Pricing Table</a></li>
									<li><a href="our-gift-vouchers.html">Our Gift Vouchers</a></li>
									<li><a href="what-we-do.html">What We Do</a></li>
									<li><a href="faqs-1.html">Faqs</a></li>
									<li><a href="our-team.html">Our Team</a></li>
									<li><a href="contact-us-1.html">Contact Us</a></li>
									<li><a href="error-1.html">Error 404</a></li>
									<li><a href="under-construction.html">Under Construction</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li><a href="contact-us-1.html">Contact Us</a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="javascript:void(0);"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="javascript:void(0);"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="javascript:void(0);"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		
		<!-- SearchBar -->
		<div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				&times;
			</button>
			<div class="container">
				<form class="header-item-search">
					<div class="input-group search-input">
						<select class="default-select">
							<option>All Categories</option>
							<option>Wooden Bottles </option>
							<option>Wooden Furniture</option>
							<option>Metal Utensils</option>
							<option>Wooden Utensils</option>
							<option>Baby Products</option>
							<option>Yoga Mats</option>
							<option>Eco-Friendly</option>
							<option>Childern's Strollers</option>
							<option>Bamboo products</option>
							<option>Healthy Products</option>
							<option>Luxury Couch</option>
							<option>Video Instructors</option>
						</select>
						<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Product">
						<button class="btn" type="button">
							<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
					<ul class="recent-tag">
						<li class="pe-0"><span>Quick Search :</span></li>
						<li><a href="shop-list.html">Wooden Products</a></li>
						<li><a href="shop-list.html">Metal Products</a></li>
						<li><a href="shop-list.html">Baby Products</a></li>
						<li><a href="shop-list.html">Yoga Mats</a></li>
					</ul>
				</form>
				<div class="row">
					<div class="col-xl-12">
						<h5 class="mb-3">You May Also Like</h5>
						<div class="swiper category-swiper2">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/1.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Water Bottles</a></h6>
											<h6 class="price">$40.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/3.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Bamboo toothbrushes</a></h6>
											<h6 class="price">$30.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/4.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Eco friendly bags</a></h6>
											<h6 class="price">$35.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/2.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Cup</a></h6>
											<h6 class="price">$20.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/5.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Bamboo toothbrushes</a></h6>
											<h6 class="price">$70.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/6.png" alt="image">
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Eco friendly bags</a></h6>
											<h6 class="price">$45.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/7.png" alt="image">	
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Wooden Bottles</a></h6>
											<h6 class="price">$40.00</h6>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media">
											<img src="images/shop/product/4.png" alt="image">	
										</div>
										<div class="dz-content">
											<h6 class="title"><a href="shop-list.html">Paper Bags</a></h6>
											<h6 class="price">$60.00</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SearchBar -->
		
		<!-- Sidebar cart -->
		<div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				&times;
			</button>
			<div class="offcanvas-body">
				<div class="product-description">
					<div class="dz-tabs">
						<ul class="nav nav-tabs center" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="shopping-cart" data-bs-toggle="tab" data-bs-target="#shopping-cart-pane" type="button" role="tab" aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
									<span class="badge badge-light">5</span>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane" type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false">Wishlist
									<span class="badge badge-light">2</span>
								</button>
							</li>
						</ul>
						<div class="tab-content pt-4" id="dz-shopcart-sidebar">
							<div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel" aria-labelledby="shopping-cart" tabindex="0">
								<div class="shop-sidebar-cart">
									<ul class="sidebar-cart-list">
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic1.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Water Bottles</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$50.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic2.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Bamboo Cups</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$40.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i> 
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic3.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Toothbrushes</a></h6>
													<div class="d-flex align-items-center">
														<div class="btn-quantity light quantity-sm me-3">
															<input type="text" value="1" name="demo_vertical2">
														</div>
														<h6 class="dz-price text-primary mb-0">$65.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>	
									</ul>
									<div class="cart-total">
										<h5 class="mb-0">Subtotal:</h5>
										<h5 class="mb-0">300.00$</h5>
									</div>
									<div class="mt-auto">
										<div class="shipping-time">													
											<div class="dz-icon">
												<i class="flaticon flaticon-ship"></i>
											</div>
											<div class="shipping-content">
												<h6 class="title pe-4">Congratulations , you've got free shipping!</h6>
												<div class="progress">
													<div class="progress-bar progress-animated border-0" style="width: 75%;" role="progressbar">
														<span class="sr-only">75% Complete</span>
													</div>
												</div>
											</div>
										</div>
										<a href="shop-checkout.html" class="btn btn-light btn-block m-b20">Checkout</a>	
										<a href="shop-cart.html" class="btn btn-secondary btn-block">View Cart</a>	
									</div>	
								</div>	
							</div>
							<div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist" tabindex="0">
								<div class="shop-sidebar-cart">
									<ul class="sidebar-cart-list">
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic1.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Water Bottles</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$50.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic2.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Wooden Cup</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$40.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i> 
												</a>
											</div>
										</li>
										<li>
											<div class="cart-widget">
												<div class="dz-media me-3">
													<img src="images/shop/shop-cart/pic3.jpg" alt="">
												</div>
												<div class="cart-content">
													<h6 class="title"><a href="product-thumbnail.html">Bamboo toothbrushes</a></h6>
													<div class="d-flex align-items-center">
														<h6 class="dz-price text-primary mb-0">$65.00</h6>
													</div>
												</div>
												<a href="javascript:void(0);" class="dz-close">
													<i class="ti-close"></i>
												</a>
											</div>
										</li>	
									</ul>
									<div class="mt-auto">
										<a href="shop-wishlist.html" class="btn btn-secondary btn-block">Check Your Favourite</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Sidebar cart -->
	</header>
	<!-- Header End -->
	
	<div class="page-content">
		<!--banner-->
		<div class="dz-bnr-inr" style="background-image:url(images/background/bg-shape.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Checkout</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"> Home</a></li>
							<li class="breadcrumb-item">Checkout</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- inner page banner End-->
		<div class="content-inner-1">
			<div class="container">
				<div class="row shop-checkout">
					<div class="col-xl-8">
						<h4 class="title m-b15">Billing details</h4>
						<div class="accordion dz-accordion accordion-sm" id="accordionFaq">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Returning customer? &nbsp; <span class="text-primary">Click here to login</span>
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
										Have a coupon? &nbsp; <span class="text-primary">Click here to enter your code</span>
										<span class="toggle-close"></span>
									</a>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>
						</div>
						<form class="row">
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">First Name</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Last Name</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Company name (optional)</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">Country / Region *</label>
									<div class="form-select">
										<select class="default-select w-100">
											<option selected>India</option>
											<option value="1">Another option</option>
											<option value="2">UK</option>
											<option value="3">Iraq</option>
										</select>	
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Street address *</label>
									<input name="dzName" required="" class="form-control m-b15" placeholder="House number and street name">
									<input name="dzName" required="" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
								</div>
							</div>
							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">Town / City *</label>
									<div class="form-select">
										<select class="default-select w-100">
											<option selected>Kota</option>
											<option value="1">Another option</option>
											<option value="2">Jaipur</option>
											<option value="3">Udaipur</option>
										</select>	
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="m-b25">
									<label class="label-title">State *</label>
									<div class="form-select">
										<select class="default-select w-100">
											  <option selected>Rajasthan</option>
											  <option value="1">Another option</option>
											  <option value="2">Rajasthan</option>
											  <option value="3">Rajasthan</option>
										</select>	
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">ZIP Code *</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Phone *</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group m-b25">
									<label class="label-title">Email address *</label>
									<input name="dzName" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-12 m-b25">
								<div class="form-group m-b5">
								   <div class="custom-control custom-checkbox">
										<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
										<label class="form-check-label" for="basic_checkbox_1">Create an account? </label>
									</div>
								</div>
								<div class="form-group">
								   <div class="custom-control custom-checkbox">
										<input type="checkbox" class="form-check-input" id="basic_checkbox_2">
										<label class="form-check-label" for="basic_checkbox_2">Ship to a different address?</label>
									</div>
								</div>
							</div>
							<div class="col-md-12 m-b25">
								<div class="form-group">
									<label class="label-title">Order notes (optional)</label>
									<textarea id="comments" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control" name="comment" cols="90" rows="5" required="required"></textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="col-xl-4 side-bar">
						<h4 class="title m-b15">Your Order</h4>
						<div class="order-detail sticky-top">
							<div class="cart-item style-1">
								<div class="dz-media">
									<img src="images/shop/shop-cart/pic1.jpg" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="title mb-0">Wooden Water<br> Bottles</h6>
									<span class="price">$40.00</span>
								</div>
							</div>
							<div class="cart-item style-1 mb-0">
								<div class="dz-media">
									<img src="images/shop/shop-cart/pic2.jpg" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="title mb-0">Wooden Cup</h6>
									<span class="price">$36.00</span>
								</div>
							</div>
							<table>
								<tbody>
									<tr class="subtotal">
										<td>Subtotal</td>
										<td class="price">$100</td>
									</tr>
									<tr class="title">
										<td><h6 class="title font-weight-500">Shipping</h6></td>
										<td></td>
									</tr>
									<tr class="shipping">
										<td>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											  <label class="form-check-label" for="flexRadioDefault1">
												Free shipping
											  </label>
											</div>
											<div class="custom-control custom-checkbox">
											  <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
											  <label class="form-check-label" for="flexRadioDefault2">
												Flat Rate:
											  </label>
											</div>
										</td>
										<td class="price">25.75</td>
									</tr>
									<tr class="total">
										<td>Total</td>
										<td class="price">$125.75</td>
										
									</tr>
								</tbody>
							</table>
							
							<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
								<div class="accordion-item">
									<div class="accordion-header" id="heading1">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation"  aria-expanded="true" aria-controls="collapse1">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Direct bank transfer
											</label>
										</div>
									</div>
									<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading2">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
											<label class="form-check-label" for="flexRadioDefault5">
												Cash on delivery
											</label>
										</div>
									</div>
									<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading3">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
											<input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												Paypal
											</label>
											<img src="images/shop/payment.jpg" alt="/">
											<a href="javascript:void(0);">What is PayPal?</a>
										</div>
									</div>
									<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
							</div>
							<p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
							<div class="form-group">
								<div class="custom-control custom-checkbox d-flex m-b15">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_3">
									<label class="form-check-label" for="basic_checkbox_3">I have read and agree to the website terms and conditions </label>
								</div>
							</div>
							<a href="shop-checkout.html" class="btn btn-secondary w-100">PLACE ORDER</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Icon Box Start -->
			<section class="content-inner py-0">
				<div class="container-fluid px-0">
					<div class="row gx-0">
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light">
								<div class="icon-bx">
									<img src="images/svg/icon-bx/password-check.svg" alt="/">
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
									<img src="images/svg/icon-bx/cart.svg" alt="/">
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
									<img src="images/svg/icon-bx/discovery.svg" alt="/">
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
									<img src="images/svg/icon-bx/box-tick.svg" alt="/">
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
								<a href="index.html"><img src="images/logo.svg" alt="/"></a> 
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
										<img src="images/shop/product/small/1.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="images/shop/product/small/2.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="images/shop/product/small/3.png" alt="/">
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
						<p class="copyright-text">© 2023 <a href="https://hugebinary.com/">HugeBinary</a> Theme. All Rights Reserved.</p>
					</div>
					<div class="col-lg-6 col-md-12 text-end"> 
						<div class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
							<span class="me-3">We Accept: </span>
							<img src="images/footer-img.png" alt="/">
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

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->

<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED-->
<script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="vendor/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->

</body>
</html>