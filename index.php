<?php include("header.php"); ?>
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="img/banner/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner"></div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="img/banner/banner-3.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner"></div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="img/banner/banner-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner"></div>
            </div>
            <div class="carousel-caption d-flex h-100 banner-slider-inner-2">
                <div class="carousel-content container">
                    <div class="text-center">
                        <h3 class="text-uppercase">Find Your Property</h3>
                        <p>
                        </p>
                        <div class="inline-search-area ml-auto mr-auto d-none d-xl-block d-lg-block">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Any Status</option>
                                        <option>For Buy</option>

                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>Ahmedabad</option>
                                        <option>Mumbai</option>
                                        <option>Goa</option>
                                        <option>Surat</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <button class="btn button-theme btn-search btn-block">
                                        <i class="fa fa-search"></i><strong>Find</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
    <div class="container search-options-btn-area">
        <a class="search-options-btn d-lg-none d-xl-none">
            <div class="search-options d-none d-xl-block d-lg-block">Search Options</div>
            <div class="icon"><i class="fa fa-chevron-up"></i></div>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search Section start -->
<div class="search-section search-area pb-hediin-12 bg-grea animated fadeInDown" id="search-style-1">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Any Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>location</option>
                                        <option>United States</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Latest Properties</h1>
            <p>Find your properties in your city</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">for sale</span>
                                </div>
                                <div class="price-box"><span>70 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Patan City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">for buy</span>
                                </div>
                                <div class="price-box"><span>85 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Two storey modern flat</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Mahesh Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured"> For Buy</span>
                                </div>
                                <div class="price-box"><span>90 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> vedant nayi
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="rent.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For rent</span>
                                </div>
                                <div class="price-box"><span>₹ 5000</span> Per month</div>
                                <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="rent.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="rent.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> harshad Patel
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For sale</span>
                                </div>
                                <div class="price-box"><span>60 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-5.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Relaxing Apartment</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Raj vakhariya
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>70 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Real Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> kusant sharma
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
            </div>

          
            
        </div>
    </div>
</div>
<!-- Featured Properties end -->
<!--  <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div> -->
        </div>
    </div>
</div>
<!-- Featured Properties end -->
<!-- Services start -->
<div class="services content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>what You Are looking For?</h1>
            <p>We Provide Faster Service</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-building-o"></i>
                    </div>
                    <h3>Apartment</h3>
                    <p>Apartments have facilities that some comfortable seating in the living room, a dining table in the kitchen</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <h3>Houses</h3>
                    <p>Modern houses in Western cultures will contain  more bedrooms and bathrooms, a kitchen , and a living room.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-shopping-basket"></i>
                    </div>
                    <h3>Commercial</h3>
                    <p>The term commercial in the investment field in business activities that hedged by positions in the futures</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-fort-awesome"></i>
                    </div>
                    <h3>Bunglows</h3>
                    <p>Bungalows are small in terms of square footage, but it is not uncommon to see very large bungalows.</p>
                </div>
            </div>
           
            
           </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- BUY Properties start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Buy properties</h1>
            <p>Find your properties in your city</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>85 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> vedant nayi
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>40 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Two storey modern flat</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Vivak Oberoy
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>90 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>67 Lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> janvi jaywal
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
               
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="buy.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>60 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="buy.php">Real Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="buy.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i>Ayushi shah
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->


<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Rent Properties</h1>
            <p>Find your properties in your city</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="rent.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For rent</span>
                                </div>
                                <div class="price-box"><span>15,000</span> Per month</div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Genral Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="rent.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. mehasana City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon maheshswari
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="rent.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For rent</span>
                                </div>
                                <div class="price-box"><span>30,000</span> Per month</div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="rent.php">Two storey modern flat</a>
                            </h1>

                            <div class="location">
                                <a href="rent.php">
                                    <i class="flaticon-pin"></i>68,kahangar. talod City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Atman shah
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="rent.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For rent</span>
                                </div>
                                <div class="price-box"><span>15,000</span> Per month</div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="rent.php">Old house</a>
                            </h1>

                            <div class="location">
                                <a href="rent.php">
                                    <i class="flaticon-pin"></i>12, vimal savan, delhi City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Sujal Shah
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="rent.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For rent</span>
                                </div>
                                <div class="price-box"><span>30,000</span> Per month</div>
                                <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="rent.php">building</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 vihar kung St. califoniya City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i>Shubham Shah
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
               
               
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- sale Properties start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Sale property</h1>
            <p>Find your properties in your city</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>85 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> vedant nayi
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>40 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Two storey modern flat</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Vivak Oberoy
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>90 lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>67 Lakh</span> </div>
                                <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Modern Family Home</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
               
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="sale.php" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">For buy</span>
                                </div>
                                <div class="price-box"><span>60 lakh</span></div>
                                <img class="d-block w-100" src="img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="sale.php">Real Luxury Villa</a>
                            </h1>

                            <div class="location">
                                <a href="sale.php">
                                    <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Area</span>3600 Sqft
                            </li>
                            <li>
                                <span>Beds</span> 3
                            </li>
                            <li>
                                <span>Baths</span> 2
                            </li>
                            <li>
                                <span>Garage</span> 1
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-people"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- sale Properties end -->
<!-- Services start -->
<div class="services content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Professional Services</h1>
            <p>We Provide Faster Service</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="card service-box">
                        <img class="card-img-top" src="img/service/service-1.jpg" alt="service">
                        <div class="card-body detail">
                            <div class="heading clearfix">
                                <div class="number">
                                    <h5>01</h5>
                                </div>
                                <div class="title">
                                    <h4><a href="#">E-tendering</a></h4>
                                </div>
                            </div>
                            <p> An process wherein the complete tendering process from advertising to submitting tender information are online</p>
                            <a href="empire.php" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="card service-box">
                        <img class="card-img-top" src="img/service/service-2.jpg" alt="service">
                        <div class="card-body detail">
                            <div class="heading clearfix">
                                <div class="number">
                                    <h5>02</h5>
                                </div>
                                <div class="title">
                                    <h4><a href="#">Security</a></h4>
                                </div>
                            </div>
                            <p>As a merchant, you need to ensure that you provide the best payment security and that your customers.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
               
                <div class="slick-slide-item">
                    <div class="card service-box">
                        <img class="card-img-top" src="img/service/service-4.jpg" alt="service">
                        <div class="card-body detail">
                            <div class="heading clearfix">
                                <div class="number">
                                    <h5>03</h5>
                                </div>
                                <div class="title">
                                    <h4><a href="#">Support 24/7</a></h4>
                                </div>
                            </div>
                            <p>Business plans include business hours support for all non-critical issues and 24/7 phone support from real estate.</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>
<!-- Services end -->
<!-- Services start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Working with the Reality</h1>
            <p>Who you work with matters</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h3>Personalized Service</h3>
                    <p>Personalized customer service aspires to be tailored to customer's specific needs, abilities, and expectations.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-apartment-1"></i>
                    </div>
                    <h3>Luxury Real Estate Experts</h3>
                    <p>real estate specialists focus on proper use of a property, whether it's through coordinating maintenance, vetting renters, or ensuring security.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 d-none d-xl-block d-lg-block">
                <div class="service-info">
                    <div class="icon">
                        <i class="flaticon-discount"></i>
                    </div>
                    <h3>Modern Building For Rent $ Sell</h3>
                    <p>Modern house is based on abstraction, which is created by clean lines, basic shapes, and forms.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Categories strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Most Popular Places</h1>
            <p>Find Your Properties In Your City</p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="#">Ahmedabad</a>
                                </h3>
                                <h4 class="category-subtitle">6 Properties</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="properties-list-rightside.html">Vadodara</a>
                                        </h3>
                                        <h4 class="category-subtitle">7 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Surat</a>
                                        </h3>
                                        <h4 class="category-subtitle">9 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Goa</a>
                                        </h3>
                                        <h4 class="category-subtitle">8 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Mumbai</a>
                                        </h3>
                                        <h4 class="category-subtitle">9 Properties</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end -->



<!-- Coming soon start -->

<!-- Coming soon end -->

<!-- 
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div> -->
        </div>
    </div>
</div>
<!-- Our team end -->



<?php include("footer.php"); ?>