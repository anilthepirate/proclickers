<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- Hero Area Start -->
<div id="hero-area">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xs-12 text-center">
        <div class="contents">
          <h1 class="head-title">Welcome to <span class="year">Pro-Clickers</span></h1>
          <p>Find the best professional photographers around you.<br> Just select your city , the occasion and search!</p>

          <!-- search form -->
          <form method="post" action="main/search" class="needs-validation" novalidate>
            <div class="form-row" style="margin-top: 40px; ">
              <div class="col-md-4 col-sm-6">
                <input type="text" style="font-size: 17px; height:50px;" required id="provider-json-city" name="city" style="line-height:inherit;" class="form-control" placeholder="Start typing your city name">
                <div class="invalid-feedback">
                  Please select a City!
                </div>
                <input type="hidden" id="id-value" name="get_value">
              </div>
              <div class="col-md-4 col-sm-6">
                <input type="text" style="font-size: 17px; height:50px;" id="provider-json-skill" name="skill" style="line-height:inherit;" class="form-control" placeholder="What's the occasion?">

              </div>
              <div class="col-md-4 col-sm-6">
                <button type="submit" style=" font-size:large;font-weight:lighter; line-height:inherit;width:inherit;height: 50px;" class="btn btn-common log-btn"><i class="lni-search"></i> SEARCH</button>
              </div>
            </div>
          </form>
          <!-- end of search form -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->

<!-- Trending Categories Section Start -->
<section class="categories-icon section-padding bg-drack">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-car"></i>
            </div>
            <h4>Vehicle</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-display"></i>
            </div>
            <h4>Electronics</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-mobile"></i>
            </div>
            <h4>Mobiles</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-leaf"></i>
            </div>
            <h4>Furnitures</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-tshirt"></i>
            </div>
            <h4>Fashion</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-briefcase"></i>
            </div>
            <h4>Jobs</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-home"></i>
            </div>
            <h4>Real Estate</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-hand"></i>
            </div>
            <h4>Animals</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-graduation"></i>
            </div>
            <h4>Education</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-laptop"></i>
            </div>
            <h4>Laptops & PCs</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-paint-roller"></i>
            </div>
            <h4>Services</h4>
          </div>
        </a>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <a href="category.html">
          <div class="icon-box">
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <h4>Matrimony</h4>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Trending Categories Section End -->

<!-- Featured Section Start -->
<section class="featured section-padding">
  <div class="container">
    <h1 class="section-title">Latest Products</h1>
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img1.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Mobile Phones</a>
            </div>
            <h4><a href="ads-details.html">Apple iPhone X</a></h4>
            <span>Last Updated: 1 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> New York, US</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> Feb 18, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Maria Barlow</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Used</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$200.00</h3>
              <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img2.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Real Estate</a>
            </div>
            <h4><a href="ads-details.html">Amazing Room for Rent</a></h4>
            <span>Last Updated: 2 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Dallas, Washington</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> Jan 7, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> John Smith</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> N/A</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$450.00</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img3.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Electronics</a>
            </div>
            <h4><a href="ads-details.html">Canon SX Powershot D-SLR</a></h4>
            <span>Last Updated: 4 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Dallas, Washington</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> Mar 18, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> David Givens</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Used</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$700.00</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img4.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Vehicles</a>
            </div>
            <h4><a href="ads-details.html">BMW 5 Series GT Car</a></h4>
            <span>Last Updated: 5 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Dallas, Washington</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> Dec 18, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Elon Musk</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> N/A</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$300.00</h3>
              <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img5.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Apple</a>
            </div>
            <h4><a href="ads-details.html">Apple Macbook Pro 13 Inch</a></h4>
            <span>Last Updated: 4 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i>Louis, Missouri, US</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> May 18, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Will Ernest</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Brand New</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$450.00</h3>
              <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
        <div class="featured-box">
          <figure>
            <div class="icon">
              <i class="lni-heart"></i>
            </div>
            <a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/featured/img6.jpg" alt=""></a>
          </figure>
          <div class="feature-content">
            <div class="product">
              <a href="#"><i class="lni-folder"></i> Restaurant</a>
            </div>
            <h4><a href="ads-details.html">Cream Restaurant</a></h4>
            <span>Last Updated: 4 hours ago</span>
            <ul class="address">
              <li>
                <a href="#"><i class="lni-map-marker"></i> Dallas, Washington</a>
              </li>
              <li>
                <a href="#"><i class="lni-alarm-clock"></i> Feb 18, 2018</a>
              </li>
              <li>
                <a href="#"><i class="lni-user"></i> Samuel Palmer</a>
              </li>
              <li>
                <a href="#"><i class="lni-package"></i> Brand New</a>
              </li>
            </ul>
            <div class="listing-bottom">
              <h3 class="price float-left">$250.00</h3>
              <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Featured Section End -->

<!-- Featured Listings Start -->
<section class="featured-lis section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
        <h3 class="section-title">Featured Products</h3>
        <div id="new-products" class="owl-carousel">
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img1.jpg" alt="">
                <div class="overlay">
                </div>
                <div class="btn-product bg-yellow">
                  <a href="#">New</a>
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">Apple Macbook Pro</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 89.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> East 7th stree 98</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img2.jpg" alt="">
                <div class="overlay">
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">Nikon D70 Camerar</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 79.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> Drive Street, US</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img3.jpg" alt="">
                <div class="overlay">
                </div>
                <div class="btn-product bg-red">
                  <a href="#">Discount 50%</a>
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">Iphone X</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 30.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> Louis, Missouri, US</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img4.jpg" alt="">
                <div class="overlay">
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">Brown Leather Bag</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 59.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> Avenue C, New York, US</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img5.jpg" alt="">
                <div class="overlay">
                </div>
                <div class="btn-product bg-yellow">
                  <a href="#">New</a>
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">iMac Pro</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 12.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> Chicago, US</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img6.jpg" alt="">
                <div class="overlay">
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">6 Bed Room For Rent</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 79.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> 53 W 88th St, US</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img7.jpg" alt="">
                <div class="overlay">
                </div>
                <div class="btn-product bg-red">
                  <a href="#">Discount 30%</a>
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">New Basket Ball</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 39.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> 365 Street, Washington</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="product-item">
              <div class="carousel-thumb">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/img8.jpg" alt="">
                <div class="overlay">
                </div>
              </div>
              <div class="product-content">
                <h3 class="product-title"><a href="ads-details.html">Dinning Table</a></h3>
                <p>Lorem ipsum dolor sit</p>
                <span class="price">$ 69.00</span>
                <div class="meta">
                  <span class="icon-wrap">
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star-filled"></i>
                    <i class="lni-star"></i>
                    <i class="lni-star"></i>
                  </span>
                  <span class="count-review">
                    <span>1</span> Reviews
                  </span>
                </div>
                <div class="card-text">
                  <div class="float-left">
                    <a href="#"><i class="lni-map-marker"></i> East 7th stree 98</a>
                  </div>
                  <div class="float-right">
                    <div class="icon">
                      <i class="lni-heart"></i>
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
</section>
<!-- Featured Listings End -->

<!-- Services Section Start -->
<section class="services section-padding">
  <div class="container">
    <div class="row">
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon">
            <i class="lni-book"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Fully Documented</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
          <div class="icon">
            <i class="lni-leaf"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Clean & Modern Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
          <div class="icon">
            <i class="lni-map"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Great Features</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.8s">
          <div class="icon">
            <i class="lni-cog"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Completely Customizable</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="1s">
          <div class="icon">
            <i class="lni-pointer-up"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">User Friendly</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
      <!-- Services item -->
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
          <div class="icon">
            <i class="lni-layout"></i>
          </div>
          <div class="services-content">
            <h3><a href="#">Awesome Layout</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Counter Area Start-->
<section class="counter-section section-padding">
  <div class="container">
    <div class="row">
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="lni-layers"></i></div>
          <h2 class="counterUp">12090</h2>
          <p>Regular Ads</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="lni-map"></i></div>
          <h2 class="counterUp">350</h2>
          <p>Locations</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="lni-user"></i></div>
          <h2 class="counterUp">23453</h2>
          <p>Reguler Members</p>
        </div>
      </div>
      <!-- Counter Item -->
      <div class="col-md-3 col-sm-6 work-counter-widget text-center">
        <div class="counter">
          <div class="icon"><i class="lni-briefcase"></i></div>
          <h2 class="counterUp">250</h2>
          <p>Premium Ads</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Counter Area End-->

<!-- Pricing section Start -->
<section id="pricing-table" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mainHeading">
          <h2 class="section-title">Select A Package</h2>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table">
          <div class="icon">
            <i class="lni-gift"></i>
          </div>
          <div class="title">
            <h3>SILVER</h3>
          </div>
          <div class="pricing-header">
            <p class="price-value"><sup>$</sup>29<span>/ Mo</span></p>
          </div>
          <ul class="description">
            <li><strong>Free</strong> ad posting</li>
            <li><strong>No</strong> Featured ads availability</li>
            <li><strong>For 30</strong> days</li>
            <li><strong>100%</strong> Secure!</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table" id="active-tb">
          <div class="icon">
            <i class="lni-leaf"></i>
          </div>
          <div class="title">
            <h3>STANDARD</h3>
          </div>
          <div class="pricing-header">
            <p class="price-value"><sup>$</sup>89<span>/ Mo</span></p>
          </div>
          <ul class="description">
            <li><strong>Free</strong> ad posting</li>
            <li><strong>6</strong> Featured ads availability</li>
            <li><strong>For 30</strong> days</li>
            <li><strong>100%</strong> Secure!</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="table">
          <div class="icon">
            <i class="lni-layers"></i>
          </div>
          <div class="title">
            <h3>PLANINIUM</h3>
          </div>
          <div class="pricing-header">
            <p class="price-value"><sup>$</sup>99<span>/ Mo</span></p>
          </div>
          <ul class="description">
            <li><strong>Free</strong> ad posting</li>
            <li><strong>20</strong> Featured ads availability</li>
            <li><strong>For 25</strong> days</li>
            <li><strong>100%</strong> Secure!</li>
          </ul>
          <button class="btn btn-common">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Table Section End -->

<!-- Testimonial Section Start -->
<section class="testimonial section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="testimonials" class="owl-carousel">
          <div class="item">
            <div class="testimonial-item">
              <div class="img-thumb">
                <img src="<?php echo base_url(); ?>assets/img/testimonial/img1.png" alt="">
              </div>
              <div class="content">
                <h2><a href="#">John Doe</a></h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                <h3>Developer at of <a href="#">xyz company</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item">
              <div class="img-thumb">
                <img src="<?php echo base_url(); ?>assets/img/testimonial/img2.png" alt="">
              </div>
              <div class="content">
                <h2><a href="#">Jessica</a></h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                <h3>Developer at of <a href="#">xyz company</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item">
              <div class="img-thumb">
                <img src="<?php echo base_url(); ?>assets/img/testimonial/img3.png" alt="">
              </div>
              <div class="content">
                <h2><a href="#">Johnny Zeigler</a></h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                <h3>Developer at of <a href="#">xyz company</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item">
              <div class="img-thumb">
                <img src="<?php echo base_url(); ?>assets/img/testimonial/img1.png" alt="">
              </div>
              <div class="content">
                <h2><a href="#">John Doe</a></h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                <h3>Developer at of <a href="#">xyz company</a></h3>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item">
              <div class="img-thumb">
                <img src="<?php echo base_url(); ?>assets/img/testimonial/img2.png" alt="">
              </div>
              <div class="content">
                <h2><a href="#">Jessica</a></h2>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                <h3>Developer at of <a href="#">xyz company</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!-- Subscribe Section Start -->
<section class="subscribes section-padding">
  <div class="container">
    <div class="row wrapper-sub">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <form>
          <div class="subscribe">
            <input class="form-control" name="EMAIL" placeholder="Your email here" required="" type="email">
            <button class="btn btn-common" type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Subscribe Section End -->

<!-- Cta Section Start -->
<section class="cta section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="single-cta">
          <div class="cta-icon">
            <i class="lni-grid"></i>
          </div>
          <h4>Refreshing Design</h4>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="single-cta">
          <div class="cta-icon">
            <i class="lni-brush"></i>
          </div>
          <h4>Easy to Customize</h4>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="single-cta">
          <div class="cta-icon">
            <i class="lni-headphone-alt"></i>
          </div>
          <h4>24/7 Support</h4>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Cta Section End -->