<!-- hero slider area start -->
<section class="slider-area">
    <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
        <!-- single slider item start -->
    <?php if (is_array($slider)): ?>
      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true; autoplay-interval: 3000; pause-on-hover: true; animation: push">

        <ul class="uk-slideshow-items" style="minHeight: 360px;">
          <?php foreach ($slider as $value):?>
          <li>
             <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item bg-img" data-bg="<?php echo base_url($value['source']); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <h2 class="slide-title"><?php echo $value['heading']; ?></h2>
                                    <h4 class="slide-desc"><?php echo $value['details']; ?></h4>
                                    <a href="<?php echo $value['buttonUrl'];  ?>" class="btn btn-hero">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </li>
              <?php endforeach; ?>
        </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

          </div>
      <?php else: ?>
        <!-- <div class="hero-single-slide hero-overlay">
           <div class="hero-slider-item bg-img" data-bg="<?php echo base_url() ?>/assets/img/slider/home1-slide2.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="hero-slider-content slide-1">
                               <h2 class="slide-title">Our favourite <span>Collection</span></h2>
                               <h4 class="slide-desc">Georgettes for Spring</h4>
                               <a href="shop.html" class="btn btn-hero">Read More</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div> -->
        <?php endif; ?>
    </div>
</section>
<!-- hero slider area end -->

<!-- banner statistics area start -->
<div class="banner-statistics-area">
    <div class="container">
        <div class="row row-20 mtn-20">
          <?php foreach($product_data as $value):?>
            <div class="col-sm-6">
                <figure class="banner-statistics mt-20" >
                    <a href="#">
                        <img src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>"  style="height:450px;" alt="product banner">
                    </a>
                    <div class="banner-content text-right">
                        <h5 class="banner-text1"><?php echo $value['name']?></h5>
                        <h2 class="banner-text2"><?php echo $value['description']?></h2>
                        <a href="<?php echo base_url('web/home/shop') ?>" class="btn btn-text">Shop Now</a>
                    </div>
                </figure>
            </div>
          <?php endforeach;?>
        </div>
    </div>
</div>
<!-- banner statistics area end -->

<!-- product area start -->
<section class="product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">New Arrivals</h2>
                    <p class="sub-title">Add our products to weekly lineup</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-container">
                    <!-- product tab menu start -->

                    <div class="product-tab-menu">
                        <ul class="nav justify-content-center">
                          <?php $id=1; foreach($category as $value):?>
                            <li><a href="<?php echo '#tab'.$id ?>" class="active" data-toggle="tab"><?php echo $value['name']?></a></li>

                          <?php $id++; endforeach;?>
                        </ul>
                    </div>
                    <!-- product tab menu end -->

                    <!-- product tab content start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                <!-- product item start -->
                                <?php foreach($product as $value):?>
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="pri-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                             <img class="sec-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                        </a>
                                        <div class="product-badge">
                                            <div class="product-label new">
                                                <span>new</span>
                                            </div>
                                            <div class="product-label discount">
                                                <span><?php echo $value['discount']?>%</span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                        </div>
                                        <div class="cart-hover">
                                            <button class="btn btn-cart">add to cart</button>
                                        </div>
                                    </figure>
                                    <div class="product-caption text-center">
                                        <div class="product-identity">
                                            <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                        </div>
                                        <ul class="color-categories">
                                            <li>
                                                <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                            </li>
                                            <li>
                                                <a class="c-darktan" href="#" title="Darktan"></a>
                                            </li>
                                            <li>
                                                <a class="c-grey" href="#" title="Grey"></a>
                                            </li>
                                            <li>
                                                <a class="c-brown" href="#" title="Brown"></a>
                                            </li>
                                        </ul>
                                        <h6 class="product-name">
                                            <a href="product-details.html"><?php echo $value['description']?></a>
                                        </h6>
                                        <div class="price-box">
                                          <?php
                                          $total=$value['price'];
                                          $dis=$value['discount'];
                                        $dis_pri=  $value['price']*($value['discount']/100);
                                        $regular=$total-$dis_pri;
                                          ?>
                                            <span class="price-regular">$<?php echo $regular?></span>
                                            <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product item end -->
                                 <?php endforeach;?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                          <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                              <!-- product item start -->
                              <?php foreach($product_data as $value):?>
                              <div class="product-item">
                                  <figure class="product-thumb">
                                      <a href="product-details.html">
                                          <img class="pri-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                           <img class="sec-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                      </a>
                                      <div class="product-badge">
                                          <div class="product-label new">
                                              <span>new</span>
                                          </div>
                                          <div class="product-label discount">
                                              <span><?php echo $value['discount']?>%</span>
                                          </div>
                                      </div>
                                      <div class="button-group">
                                          <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                          <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                          <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                      </div>
                                      <div class="cart-hover">
                                          <button class="btn btn-cart">add to cart</button>
                                      </div>
                                  </figure>
                                  <div class="product-caption text-center">
                                      <div class="product-identity">
                                          <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                      </div>
                                      <ul class="color-categories">
                                          <li>
                                              <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                          </li>
                                          <li>
                                              <a class="c-darktan" href="#" title="Darktan"></a>
                                          </li>
                                          <li>
                                              <a class="c-grey" href="#" title="Grey"></a>
                                          </li>
                                          <li>
                                              <a class="c-brown" href="#" title="Brown"></a>
                                          </li>
                                      </ul>
                                      <h6 class="product-name">
                                          <a href="product-details.html"><?php echo $value['description']?></a>
                                      </h6>
                                      <div class="price-box">
                                        <?php
                                        $total=$value['price'];
                                        $dis=$value['discount'];
                                      $dis_pri=  $value['price']*($value['discount']/100);
                                      $regular=$total-$dis_pri;
                                        ?>
                                          <span class="price-regular">$<?php echo $regular?></span>
                                          <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                      </div>
                                  </div>
                              </div>
                               <?php endforeach;?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3">
                          <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                              <!-- product item start -->
                              <?php foreach($product_data as $value):?>
                              <div class="product-item">
                                  <figure class="product-thumb">
                                      <a href="product-details.html">
                                          <img class="pri-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                           <img class="sec-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                      </a>
                                      <div class="product-badge">
                                          <div class="product-label new">
                                              <span>new</span>
                                          </div>
                                          <div class="product-label discount">
                                              <span><?php echo $value['discount']?>%</span>
                                          </div>
                                      </div>
                                      <div class="button-group">
                                          <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                          <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                          <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                      </div>
                                      <div class="cart-hover">
                                          <button class="btn btn-cart">add to cart</button>
                                      </div>
                                  </figure>
                                  <div class="product-caption text-center">
                                      <div class="product-identity">
                                          <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                      </div>
                                      <ul class="color-categories">
                                          <li>
                                              <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                          </li>
                                          <li>
                                              <a class="c-darktan" href="#" title="Darktan"></a>
                                          </li>
                                          <li>
                                              <a class="c-grey" href="#" title="Grey"></a>
                                          </li>
                                          <li>
                                              <a class="c-brown" href="#" title="Brown"></a>
                                          </li>
                                      </ul>
                                      <h6 class="product-name">
                                          <a href="product-details.html"><?php echo $value['description']?></a>
                                      </h6>
                                      <div class="price-box">
                                        <?php
                                        $total=$value['price'];
                                        $dis=$value['discount'];
                                      $dis_pri=  $value['price']*($value['discount']/100);
                                      $regular=$total-$dis_pri;
                                        ?>
                                          <span class="price-regular">$<?php echo $regular?></span>
                                          <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                      </div>
                                  </div>
                              </div>
                               <?php endforeach;?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4">
                          <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                              <!-- product item start -->
                              <?php foreach($product_data as $value):?>
                              <div class="product-item">
                                  <figure class="product-thumb">
                                      <a href="product-details.html">
                                          <img class="pri-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                           <img class="sec-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                                      </a>
                                      <div class="product-badge">
                                          <div class="product-label new">
                                              <span>new</span>
                                          </div>
                                          <div class="product-label discount">
                                              <span><?php echo $value['discount']?>%</span>
                                          </div>
                                      </div>
                                      <div class="button-group">
                                          <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                                          <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                          <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                      </div>
                                      <div class="cart-hover">
                                          <button class="btn btn-cart">add to cart</button>
                                      </div>
                                  </figure>
                                  <div class="product-caption text-center">
                                      <div class="product-identity">
                                          <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                                      </div>
                                      <ul class="color-categories">
                                          <li>
                                              <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                          </li>
                                          <li>
                                              <a class="c-darktan" href="#" title="Darktan"></a>
                                          </li>
                                          <li>
                                              <a class="c-grey" href="#" title="Grey"></a>
                                          </li>
                                          <li>
                                              <a class="c-brown" href="#" title="Brown"></a>
                                          </li>
                                      </ul>
                                      <h6 class="product-name">
                                          <a href="product-details.html"><?php echo $value['description']?></a>
                                      </h6>
                                      <div class="price-box">
                                        <?php
                                        $total=$value['price'];
                                        $dis=$value['discount'];
                                      $dis_pri=  $value['price']*($value['discount']/100);
                                      $regular=$total-$dis_pri;
                                        ?>
                                          <span class="price-regular">$<?php echo $regular?></span>
                                          <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                      </div>
                                  </div>
                              </div>
                               <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!-- product tab content end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product area end -->

<!-- featured product area start -->
<section class="feature-product section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">Our products</h2>
                    <p class="sub-title">Add featured products to weekly lineup</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-carousel-4_2 slick-row-10 slick-arrow-style">
                    <!-- product item start -->
                <?php foreach($product as $value):?>
                  <div class="product-item">
                      <figure class="product-thumb">
                          <a href="product-details.html">
                              <img class="pri-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                               <img class="sec-img" src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="product">
                          </a>
                          <div class="product-badge">
                              <div class="product-label new">
                                  <span>new</span>
                              </div>
                              <div class="product-label discount">
                                  <span><?php echo $value['discount']?>%</span>
                              </div>
                          </div>
                          <div class="button-group">
                              <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>
                              <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                              <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                          </div>
                          <div class="cart-hover">
                              <button class="btn btn-cart">add to cart</button>
                          </div>
                      </figure>
                      <div class="product-caption text-center">
                          <div class="product-identity">
                              <p class="manufacturer-name"><a href="product-details.html">Gold</a></p>
                          </div>
                          <ul class="color-categories">
                              <li>
                                  <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                              </li>
                              <li>
                                  <a class="c-darktan" href="#" title="Darktan"></a>
                              </li>
                              <li>
                                  <a class="c-grey" href="#" title="Grey"></a>
                              </li>
                              <li>
                                  <a class="c-brown" href="#" title="Brown"></a>
                              </li>
                          </ul>
                          <h6 class="product-name">
                              <a href="product-details.html"><?php echo $value['description']?></a>
                          </h6>
                          <div class="price-box">
                            <?php
                            $total=$value['price'];
                            $dis=$value['discount'];
                          $dis_pri=  $value['price']*($value['discount']/100);
                          $regular=$total-$dis_pri;
                            ?>
                              <span class="price-regular">$<?php echo $regular?></span>
                              <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                          </div>
                      </div>
                  </div>
                    <!-- product item end -->
                <?php endforeach;?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured product area end -->

<!-- testimonial area start -->
<section class="testimonial-area section-padding bg-img" data-bg="<?php echo base_url() ?>/assets/img/testimonial/testimonials-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">testimonials</h2>
                    <p class="sub-title">What they say</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-thumb-wrapper">
                    <div class="testimonial-thumb-carousel">
                      <?php foreach($testimonial as $value):?>
                        <div class="testimonial-thumb">
                            <img src="<?php echo base_url('uploads/testimonial/').$value['image'] ?>" alt="testimonial-thumb">
                        </div>
                      <?php endforeach;?>
                    </div>
                </div>
                <div class="testimonial-content-wrapper">
                    <div class="testimonial-content-carousel">
                      <?php foreach($testimonial as $value):?>
                        <div class="testimonial-content">
                            <p><?php echo $value['discription']?></p>
                            <div class="ratings">

                                <?php for($i=1;$i<=$value['ratting'];$i++){?>
                                <span><i class="fa fa-star checked"></i></span>
                            <?php }
                             if($value['ratting']<5)
                             {
                             $rat=5-$value['ratting'];
                             for($i=1;$i<=$rat;$i++)
                             { ?>
                                  <span><i class="fa fa-star-o"></i></span>
                                 <?php
                             }
                           }
                            ?>



                            </div>
                            <h5 class="testimonial-author"><?php echo $value['name']?></h5>
                        </div>
                      <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- group product start -->
<section class="group-product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="group-product-banner">
                    <figure class="banner-statistics">
                        <a href="#">
                            <img src="<?php echo base_url() ?>/uploads/product/download_(1).jpg" alt="product banner">
                        </a>
                        <div class="banner-content banner-content_style3 text-center">
                            <h6 class="banner-text1">BEAUTIFUL</h6>
                            <h2 class="banner-text2">LEHENGA WE LOVE</h2>
                            <a href="<?php echo base_url('web/home/shop')?>" class="btn btn-text">Shop Now</a>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories-group-wrapper">
                    <!-- section title start -->
                    <div class="section-title-append">
                        <h4>best seller product</h4>
                        <div class="slick-append"></div>
                    </div>
                    <!-- section title start -->

                    <!-- group list carousel start -->
                    <div class="group-list-item-wrapper">
                        <div class="group-list-carousel">
                            <!-- group list item start -->
                              <?php foreach($product as $value):?>
                            <div class="group-slide-item">
                                <div class="group-item">
                                    <div class="group-item-thumb">
                                        <a href="product-details.html">
                                            <img src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="group-item-desc">
                                        <h5 class="group-product-name"><a href="product-details.html"><?php echo $value['name']?></a></h5>
                                        <div class="price-box">
                                          <?php
                                          $total=$value['price'];
                                          $dis=$value['discount'];
                                          $dis_pri=  $value['price']*($value['discount']/100);
                                          $regular=$total-$dis_pri;
                                          ?>
                                            <span class="price-regular">$<?php echo $regular?></span>
                                            <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach;?>
                            <!-- group list item end -->


                        </div>
                    </div>
                    <!-- group list carousel start -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="categories-group-wrapper">
                    <!-- section title start -->
                    <div class="section-title-append">
                        <h4>on-sale product</h4>
                        <div class="slick-append"></div>
                    </div>
                    <!-- section title start -->

                    <!-- group list carousel start -->
                    <div class="group-list-item-wrapper">
                        <div class="group-list-carousel">
                            <!-- group list item start -->
                            <?php foreach($product as $value):?>
                          <div class="group-slide-item">
                              <div class="group-item">
                                  <div class="group-item-thumb">
                                      <a href="product-details.html">
                                          <img src="<?php echo base_url('/uploads/product/').$value['profile_pic'] ?>" alt="">
                                      </a>
                                  </div>
                                  <div class="group-item-desc">
                                      <h5 class="group-product-name"><a href="product-details.html"><?php echo $value['name']?></a></h5>
                                      <div class="price-box">
                                        <?php
                                        $total=$value['price'];
                                        $dis=$value['discount'];
                                      $dis_pri=  $value['price']*($value['discount']/100);
                                      $regular=$total-$dis_pri;
                                        ?>
                                          <span class="price-regular">$<?php echo $regular?></span>
                                          <span class="price-old"><del>$<?php echo $value['price']?></del></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <?php endforeach;?>
                            <!-- group list item end -->

                        </div>
                    </div>
                    <!-- group list carousel start -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- group product end -->

<!-- latest blog area start -->
<section class="latest-blog-area section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section title start -->
                <div class="section-title text-center">
                    <h2 class="title">latest blogs</h2>
                    <p class="sub-title">There are latest blog posts</p>
                </div>
                <!-- section title start -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel-active slick-row-10 slick-arrow-style">
                    <!-- blog post item start -->
                    <?php foreach($article_data as $value):?>
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="<?php echo base_url().$value['image']?>" alt="blog image" class="img-circle" style="width:250px;height:250px;">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p><?php echo my_date_show($value['created_at'])?> | <a href="#">Corano</a></p>
                            </div>
                            <h5 class="blog-title">
                                <a href="blog-details.html"><?php echo $value['content']?></a>
                            </h5>
                        </div>
                    </div>
                  <?php endforeach;?>
                    <!-- blog post item end -->
                </div>
            </div>
        </div>
    </div>
</section>
