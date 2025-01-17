<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eccommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/vendor.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="search-popup">
        <div class="search-popup-container">

            <form role="search" method="get" class="search-form" action="">
                <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value=""
                    name="s" />
                <button type="submit" class="search-submit"><svg class="search">
                        <use xlink:href="#search"></use>
                    </svg></button>
            </form>

            <h5 class="cat-list-title">Browse Categories</h5>

            <ul class="cat-list">
                <li class="cat-list-item">
                    <a href="#" title="Romance">Romance</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Thriller">Thriller</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Sci-fi">Sci-fi</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Cooking">Cooking</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Health">Health</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Lifestyle">Lifestyle</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Fiction">Fiction</a>
                </li>
            </ul>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-xxl-12 bg-body-tertiary">
                <header id="header" class="site-header">

                    <div class="top-info border-bottom d-none d-md-block ">
                        <div class="container-fluid">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <p class="fs-6 my-2 text-center">Need any help? Call us <a href="#">112233344455</a></p>
                                </div>
                                <div class="col-md-4 border-start border-end">
                                    <p class="fs-6 my-2 text-center">Summer sale discount off 60% off! <a class="text-decoration-underline"
                                            href="index.html">Shop Now</a></p>
                                </div>
                                <div class="col-md-4">
                                    <p class="fs-6 my-2 text-center">2-3 business days delivery & free returns</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav id="header-nav" class="navbar navbar-expand-lg py-3">
                        <div class="container">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/main-logo.png" class="logo">
                            </a>
                            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <svg class="navbar-icon">
                                    <use xlink:href="#navbar-icon"></use>
                                </svg>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
                                <div class="offcanvas-header px-4 pb-0">
                                    <a class="navbar-brand" href="index.html">
                                        <img src="images/main-logo.png" class="logo">
                                    </a>
                                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"
                                        data-bs-target="#bdNavbar"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul id="navbar"
                                        class="navbar-nav text-uppercase justify-content-start justify-content-lg-center align-items-start align-items-lg-center flex-grow-1">
                                        <li class="nav-item">
                                            <a class="nav-link me-4 active" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link me-4" href="index.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link me-4" href="index.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link me-4" href="index.html">Blogs</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu animate slide border">
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">About</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Shop</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Single Product</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Single Post</a>
                                                </li>
                                                <li>
                                                    <a href="index.html" class="dropdown-item fw-light">Contact</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link me-4" href="index.html">Contact</a>
                                        </li>
                                    </ul>
                                    <div class="user-items d-flex">
                                        <ul class="d-flex justify-content-end list-unstyled mb-0">
                                            <li class="search-item pe-3">
                                                <a href="#" class="search-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="pe-3">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                                                    </svg>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header border-bottom-0">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="tabs-listing">
                                                                    <nav>
                                                                        <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                                                                            <button class="nav-link text-capitalize active" id="nav-sign-in-tab" data-bs-toggle="tab"
                                                                                data-bs-target="#nav-sign-in" type="button" role="tab" aria-controls="nav-sign-in"
                                                                                aria-selected="true">Sign In</button>
                                                                            <button class="nav-link text-capitalize" id="nav-register-tab" data-bs-toggle="tab"
                                                                                data-bs-target="#nav-register" type="button" role="tab" aria-controls="nav-register"
                                                                                aria-selected="false">Register</button>
                                                                        </div>
                                                                    </nav>
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                                                                            aria-labelledby="nav-sign-in-tab">
                                                                            <div class="form-group py-3">
                                                                                <label class="mb-2" for="sign-in">Username or email address *</label>
                                                                                <input type="text" minlength="2" name="username" placeholder="Your Username"
                                                                                    class="form-control w-100 rounded-3 p-3" required>
                                                                            </div>
                                                                            <div class="form-group pb-3">
                                                                                <label class="mb-2" for="sign-in">Password *</label>
                                                                                <input type="password" minlength="2" name="password" placeholder="Your Password"
                                                                                    class="form-control w-100 rounded-3 p-3" required>
                                                                            </div>
                                                                            <label class="py-3">
                                                                                <input type="checkbox" required="" class="d-inline">
                                                                                <span class="label-body">Remember me</span>
                                                                                <span class="label-body"><a href="#" class="fw-bold">Forgot Password</a></span>
                                                                            </label>
                                                                            <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Login</button>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="nav-register" role="tabpanel"
                                                                            aria-labelledby="nav-register-tab">
                                                                            <div class="form-group py-3">
                                                                                <label class="mb-2" for="register">Your email address *</label>
                                                                                <input type="text" minlength="2" name="username" placeholder="Your Email Address"
                                                                                    class="form-control w-100 rounded-3 p-3" required>
                                                                            </div>
                                                                            <div class="form-group pb-3">
                                                                                <label class="mb-2" for="sign-in">Password *</label>
                                                                                <input type="password" minlength="2" name="password" placeholder="Your Password"
                                                                                    class="form-control w-100 rounded-3 p-3" required>
                                                                            </div>
                                                                            <label class="py-3">
                                                                                <input type="checkbox" required="" class="d-inline">
                                                                                <span class="label-body">I agree to the <a href="#" class="fw-bold">Privacy
                                                                                        Policy</a></span>
                                                                            </label>
                                                                            <button type="submit" name="submit" class="btn btn-dark w-100 my-3">Register</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wishlist-dropdown dropdown pe-3">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                        <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                                                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                        <span class="text-primary">Your wishlist</span>
                                                        <span class="badge bg-primary rounded-pill">2</span>
                                                    </h4>
                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                            <div>
                                                                <h5>
                                                                    <a href="index.html">The Emerald Crown</a>
                                                                </h5>
                                                                <small>Special discounted price.</small>
                                                                <a href="#" class="d-block fw-medium text-capitalize mt-2">Add to cart</a>
                                                            </div>
                                                            <span class="text-primary">$2000</span>
                                                        </li>
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                            <div>
                                                                <h5>
                                                                    <a href="index.html">The Last Enchantment</a>
                                                                </h5>
                                                                <small>Perfect for enlightened people.</small>
                                                                <a href="#" class="d-block fw-medium text-capitalize mt-2">Add to cart</a>
                                                            </div>
                                                            <span class="text-primary">$400</span>
                                                        </li>
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between">
                                                            <span class="text-capitalize"><b>Total (USD)</b></span>
                                                            <strong>$1470</strong>
                                                        </li>
                                                    </ul>
                                                    <div class="d-flex flex-wrap justify-content-center">
                                                        <a href="#" class="w-100 btn btn-dark mb-1" type="submit">Add all to cart</a>
                                                        <a href="index.html" class="w-100 btn btn-primary" type="submit">View cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-dropdown dropdown">
                                                <a href="index.html" class="dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                        <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3">
                                                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                        <span class="text-primary">Your cart</span>
                                                        <span class="badge bg-primary rounded-pill">2</span>
                                                    </h4>
                                                    <ul class="list-group mb-3">
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                            <div>
                                                                <h5>
                                                                    <a href="index.html">Secrets of the Alchemist</a>
                                                                </h5>
                                                                <small>High quality in good price.</small>
                                                            </div>
                                                            <span class="text-primary">$870</span>
                                                        </li>
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between lh-sm">
                                                            <div>
                                                                <h5>
                                                                    <a href="index.html">Quest for the Lost City</a>
                                                                </h5>
                                                                <small>Professional Quest for the Lost City.</small>
                                                            </div>
                                                            <span class="text-primary">$600</span>
                                                        </li>
                                                        <li class="list-group-item bg-transparent d-flex justify-content-between">
                                                            <span class="text-capitalize"><b>Total (USD)</b></span>
                                                            <strong>$1470</strong>
                                                        </li>
                                                    </ul>
                                                    <div class="d-flex flex-wrap justify-content-center">
                                                        <a href="index.html" class="w-100 btn btn-dark mb-1" type="submit">View Cart</a>
                                                        <a href="index.html" class="w-100 btn btn-primary" type="submit">Go to checkout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                </header>
            </div>
        </div>
    </div>

    <!-- slider -->
    <section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
      style="background-image: url(images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
      <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>The Fine Print Book Collection</h2>
                    <p>Best Offer Save 30%. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Collection</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image2.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>How Innovation works</h2>
                    <p>Discount available. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Product</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image1.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>Your Heart is the Sea</h2>
                    <p>Limited stocks available. Grab it now!</p>
                    <a href="index.html" class="btn mt-3">Shop Collection</a>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="images/banner-image.png" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- deliver -->
    <section id="company-services" class="padding-large pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="cart-outline">
                  <use xlink:href="#cart-outline" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Free delivery</h4>
                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="quality">
                  <use xlink:href="#quality" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Quality guarantee</h4>
                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="price-tag">
                  <use xlink:href="#price-tag" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">Daily offers</h4>
                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
            <div class="icon-box d-flex">
              <div class="icon-box-icon pe-3 pb-3">
                <svg class="shield-plus">
                  <use xlink:href="#shield-plus" />
                </svg>
              </div>
              <div class="icon-box-content">
                <h4 class="card-title mb-1 text-capitalize text-dark">100% secure payment</h4>
                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- item -->
    <section id="best-selling-items" class="position-relative padding-large ">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">Best selling items</h3>
          <a href="index.html" class="btn">View All</a>
        </div>
        <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
          <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
            <use xlink:href="#alt-arrow-right-outline"></use>
          </svg>
        </div>
        <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
          <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
            <use xlink:href="#alt-arrow-left-outline"></use>
          </svg>
        </div>
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <div class="position-absolute">
                  <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                </div>
                <img src="images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">House of Sky Breath</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>
                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <img src="images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heartland Stars</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>

                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <img src="images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heavenly Bodies</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>

                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <div class="position-absolute">
                  <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
                </div>
                <img src="images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">His Saving Grace</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>

                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <img src="images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">My Dearest Darkest</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>

                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card position-relative p-4 border rounded-3">
                <img src="images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
                <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">The Story of Success</a></h6>
                <div class="review-content d-flex">
                  <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                  <div class="rating text-warning d-flex align-items-center">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                  </div>
                </div>

                <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                  <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="Tooltip on top">
                    <svg class="cart">
                      <use xlink:href="#cart"></use>
                    </svg>
                  </button>
                  <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- limit -->
    <section id="limited-offer" class="padding-large"
      style="background-image: url(images/banner-image-bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 text-center">
            <div class="image-holder">
              <img src="images/banner-image3.png" class="img-fluid" alt="banner">
            </div>
          </div>
          <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
            <h2>30% Discount on all items. Hurry Up !!!</h2>
            <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
              <div class="time d-grid pe-3">
                <span class="days fs-1 fw-normal"></span>
                <small>Days</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="hours fs-1 fw-normal"></span>
                <small>Hrs</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid pe-3 ps-3">
                <span class="minutes fs-1 fw-normal"></span>
                <small>Min</small>
              </div>
              <span class="fs-1 text-primary">:</span>
              <div class="time d-grid ps-3">
                <span class="seconds fs-1 fw-normal"></span>
                <small>Sec</small>
              </div>
            </div>
            <a href="index.html" class="btn mt-3">Shop Collection</a>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- feature -->
    <section id="categories" class="padding-large pt-0">
      <div class="container">
        <div class="section-title overflow-hidden mb-4">
          <h3 class="d-flex align-items-center">Categories</h3>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 border-0 rounded-3 position-relative">
              <a href="index.html">
                <img src="images/category1.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Romance</a></h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="index.html">
                <img src="images/category2.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Lifestyle</a></h6>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center mb-4 border-0 rounded-3">
              <a href="index.html">
                <img src="images/category3.jpg" class="img-fluid rounded-3" alt="cart item">
                <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                    class="text-white">Recipe</a></h6>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="./js/jquery-1.11.0.min.js"></script>
<script src="./js/script.js"></script>


</html>