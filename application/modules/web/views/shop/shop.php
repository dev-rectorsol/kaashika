<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div class="shop-main-wrapper section-padding">
    <div class="container">
        <div class="row">
            <!-- sidebar area start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">Collection</h5>
                        <div class="sidebar-body">
                            <ul class="shop-categories">
                                <?php foreach ($category as $value) : ?>
                                    <li><a href="<?php echo base_url('web/shop/shop_by_category/') . $value['id'] ?>"><?php echo $value['name'] ?> </a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">price</h5>
                        <div class="sidebar-body">
                            <div class="price-range-wrap" id="rang">
                                <div class="price-range" data-min="100" data-max="5000"></div>
                                <div class="range-slider">
                                    <form action="#">
                                        <div class="price-input">
                                            <label for="amount">Price: </label>
                                            <input type="text" id="amount">
                                            <input type="hidden" value="<?php echo $id; ?>" id="color_id">
                                            <input type="hidden" value="price" id="price">

                                            <input type="hidden" value="search" class="search">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single sidebar end -->



                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">color filter</h5>
                        <div class="sidebar-body">
                            <select name="color" class="color">
                                <option value="red">select color</option>
                                <option value="red">Red </option>
                                <option value="green">green</option>
                                <option value="blue">blue</option>
                                <option value="yellow">yellow</option>
                                <option value="orange">orange</option>
                                <option value="purple">purple</option>
                                <option value="maroon">maroon</option>
                                <option value="pink">Pink</option>
                            </select>
                            <input type="hidden" value="<?php echo $id; ?>" id="c_id">
                            <input type="hidden" value="Color" id="clr">
                            <input type="hidden" value="search" class="search">
                        </div>
                    </div><br><br>
                    <!-- single sidebar end -->
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">Fabric Filter</h5>
                        <div class="sidebar-body">
                            <select name="fabric" id="fabric">
                                <option>--select fabric--</option>
                                <?php foreach ($fabric as $value) : ?>
                                    <option value="<?php echo $value['fab_name']; ?>" style="text-transform:capitalize;"><?php echo $value['fab_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" value="<?php echo $id; ?>" id="f_id">
                            <input type="hidden" value="Fabric" id="fab">
                            <input type="hidden" value="search" class="search">
                        </div>
                    </div><br><br>
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">Pattern Filter</h5>
                        <div class="sidebar-body">
                            <select name="patern" id="patern">
                                <option>--select patern--</option>
                                <?php foreach ($pattern as $value) : ?>
                                    <option value="<?php echo $value['fab_name']; ?>" style="text-transform:capitalize;"><?php echo $value['fab_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" value="<?php echo $id; ?>" id="p_id">
                            <input type="hidden" value="Pattern" id="par">
                            <input type="hidden" value="search" class="search">
                        </div>
                    </div><br><br>
                    <div class="sidebar-single">
                        <h5 class="sidebar-title">Weaving Filter</h5>
                        <div class="sidebar-body">
                            <select name="weaving" id="weaving">
                                <option>--select weaving--</option>
                                <?php foreach ($weaving as $value) : ?>
                                    <option value="<?php echo $value['fab_name']; ?>" style="text-transform:capitalize;"><?php echo $value['fab_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" value="<?php echo $id; ?>" id="w_id">
                            <input type="hidden" value="Weaving" id="weav">
                            <input type="hidden" value="search" class="search">
                        </div>
                    </div>


                    <!-- single sidebar start -->
                    <div class="sidebar-banner">
                        <div class="img-container">
                            <a href="#">
                                <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </aside>
            </div>
            <!-- sidebar area end -->

            <!-- shop main wrapper start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <?php echo $result_count ?>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby" id='sort'>

                                            <option value="New">What's New</option>
                                            <option value="Popularity">Popularity</option>
                                            <option value="Discount">Discount</option>
                                            <option value="Price_Asc">Price (Low &gt; High)</option>
                                            <option value="Price_Desc">Price (High &gt; Low)</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <?php echo $content ?>

                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <?php echo $links ?>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
</div>

<!-- page main wrapper end -->
<?php include('shop_js.php'); ?>
=======
                           <!-- single sidebar end -->



                           <!-- single sidebar start -->
                           <div class="sidebar-single">
                               <h5 class="sidebar-title">color filter</h5>
                               <div class="sidebar-body">
                                  <select name="color" class="color">
                                  <option value="red">select color</option>
                                  <option value="red">Red </option>
                                  <option value="green">green</option>
                                  <option value="blue">blue</option>
                                  <option value="yellow">yellow</option>
                                  <option value="orange">orange</option>
                                  <option value="purple">purple</option>
                                  <option value="maroon">maroon</option>
                                  <option value="pink">Pink</option>
                                  </select>
                                <input type="hidden" value="<?php echo $id;?>" id="c_id">
                                <input type="hidden" value="Color" id="clr">
                                <input type="hidden" value="search" class="search">
                               </div>
                           </div><br><br>
                           <!-- single sidebar end -->
                           <div class="sidebar-single">
                                <h5 class="sidebar-title">Fabric Filter</h5>
                                <div class="sidebar-body">
                                 <select name="fabric" id="fabric">
                                   <option>--select fabric--</option>
                                   <?php foreach($fabric as $value):?>
                                  <option value="<?php echo $value['fab_name'];?>" style = "text-transform:capitalize;"><?php echo $value['fab_name'];?></option>
                                <?php endforeach;?>
                                 </select>
                                 <input type="hidden" value="<?php echo $id;?>" id="f_id">
                                  <input type="hidden" value="Fabric" id="fab">
                                  <input type="hidden" value="search" class="search">
                                </div>
                            </div><br><br>
                            <div class="sidebar-single">
                                 <h5 class="sidebar-title">Pattern Filter</h5>
                                 <div class="sidebar-body">
                                  <select name="patern" id="patern">
                                    <option>--select patern--</option>
                                    <?php foreach($pattern as $value):?>
                                   <option value="<?php echo $value['fab_name'];?>" style = "text-transform:capitalize;"><?php echo $value['fab_name'];?></option>
                                 <?php endforeach;?>
                                  </select>
                                  <input type="hidden" value="<?php echo $id;?>" id="p_id">
                                  <input type="hidden" value="Pattern" id="par">
                                  <input type="hidden" value="search" class="search">
                                 </div>
                             </div><br><br>
                             <div class="sidebar-single">
                                  <h5 class="sidebar-title">Weaving Filter</h5>
                                  <div class="sidebar-body">
                                   <select name="weaving" id="weaving">
                                     <option>--select weaving--</option>
                                     <?php foreach($weaving as $value):?>
                                    <option value="<?php echo $value['fab_name'];?>" style = "text-transform:capitalize;"><?php echo $value['fab_name'];?></option>
                                  <?php endforeach;?>
                                   </select>
                                   <input type="hidden" value="<?php echo $id;?>" id="w_id">
                                   <input type="hidden" value="Weaving" id="weav">
                                   <input type="hidden" value="search" class="search">
                                  </div>
                              </div>


                           <!-- single sidebar start -->
                           <div class="sidebar-banner">
                               <div class="img-container">
                                   <a href="#">
                                       <img src="assets/img/banner/sidebar-banner.jpg" alt="">
                                   </a>
                               </div>
                           </div>
                           <!-- single sidebar end -->
                       </aside>
                   </div>
                   <!-- sidebar area end -->

                   <!-- shop main wrapper start -->
                   <div class="col-lg-9 order-1 order-lg-2">
                       <div class="shop-product-wrapper">
                           <!-- shop product top wrap start -->
                           <div class="shop-top-bar">
                               <div class="row align-items-center">
                                   <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                       <div class="top-bar-left">
                                           <div class="product-view-mode">
                                               <a class="active" href="#" data-target="grid-view" data-toggle="tooltip" title="Grid View"><i class="fa fa-th"></i></a>
                                               <a href="#" data-target="list-view" data-toggle="tooltip" title="List View"><i class="fa fa-list"></i></a>
                                           </div>
                                           <div class="product-amount">
                                               <p>Showing 1–16 of 21 results</p>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                       <div class="top-bar-right">
                                           <div class="product-short">
                                               <p>Sort By : </p>
                                               <select class="nice-select" name="sortby">


                                                   <option value="rating">Price (Low &gt; High)</option>


                                               </select>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- shop product top wrap start -->

                           <!-- product item list wrapper start -->
                           <div class="shop-product-wrap grid-view row mbn-30" id="details">

                               <!-- product single item start -->
                               <?php foreach($product_by_category as $value):?>
                               <div class="col-md-4 col-sm-6">
                                   <!-- product grid start -->
                                   <div class="product-item">
                                       <figure class="product-thumb">
                                           <a href="<?php echo base_url('web/shop/product_details/').$value['id'] ?>">
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
                                             <a href="<?php echo base_url('web/Collection/wishlist/').$value['id']?>"  class="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like wish"></i></a>
                                             <!-- <a href="<?php echo base_url('web/Collection/compare')?>" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a> -->
                                             <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                           </div>
                                           <div class="cart-hover">
                                             <a  href="<?php echo base_url('web/Collection/addtocard/').$value['id']?>"  class="btn btn-cart" data-toggle="tooltip" data-placement="left" >Add To Cart</a>

                                           </div>
                                       </figure>
                                       <div class="product-caption text-center">

                                           <h6 class="product-name">
                                               <a href="<?php echo base_url('web/shop/product_details/').$value['id'] ?>"><?php echo $value['name']?></a>
                                           </h6>
                                           <div class="price-box">
                                             <?php
                                             $total=$value['price'];
                                             $dis=$value['discount'];
                                             $dis_pri=  $value['price']*($value['discount']/100);
                                             $regular=$total-$dis_pri;
                                             ?>
                                               <span class="price-regular">₹ <?php echo $regular?></span>
                                               <span class="price-old"><del>₹<?php echo $value['price']?></del></span>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- product grid end -->

                                   <!-- product list item end -->
                                   <div class="product-list-item">
                                       <figure class="product-thumb">
                                         <a href="<?php echo base_url('web/shop/product_details/').$value['id'] ?>">
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
                                            <a href="<?php echo base_url('web/Collection/wishlist/').$value['id']?>"  class="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like wish"></i></a>

                                             <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>
                                           </div>
                                           <div class="cart-hover">
                                                 <a  href="<?php echo base_url('web/Collection/addtocard/').$value['id']?>"  class="btn btn-cart" data-toggle="tooltip" data-placement="left" >Add To Cart</a>
                                           </div>
                                       </figure>
                                       <div class="product-content-list">
                                           <div class="manufacturer-name">
                                               <a href="product-details.html">kashika</a>
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

                                           <h5 class="product-name"><a href="<?php echo base_url('web/shop/product_details/').$value['id'] ?>"><?php echo $value['name'] ?></a></h5>
                                           <div class="price-box">
                                             <?php
                                                 $total=$value['price'];
                                                 $dis=$value['discount'];
                                                 $dis_pri=  $value['price']*($value['discount']/100);
                                                 $regular=$total-$dis_pri;
                                             ?>
                                               <span class="price-regular">₹<?php echo $regular?></span>
                                               <span class="price-old"><del>₹<?php echo $value['price']?></del></span>
                                           </div>
                                           <p><a href="<?php echo base_url('web/shop/product_details/').$value['id'] ?>"><?php echo $value['description']?></a></p>
                                       </div>

                                   </div>
                                   <!-- product list item end -->
                               </div>
                               <?php endforeach;?>
                               <!-- product single item start -->

                           </div>
                           <!-- product item list wrapper end -->

                           <!-- start pagination area -->
                           <div class="paginatoin-area text-center">
                               <ul class="pagination-box">
                                   <li><a class="previous" href="#"><i class="pe-7s-angle-left"></i></a></li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a class="next" href="#"><i class="pe-7s-angle-right"></i></a></li>
                               </ul>
                           </div>
                           <!-- end pagination area -->
                       </div>
                   </div>
                   <!-- shop main wrapper end -->
               </div>
           </div>
       </div>

       <!-- page main wrapper end -->
       <?php include('shop_js.php');?>
>>>>>>> a43d7ce1d37f104f8c7f67c95ea3f9860b9295cd
