<div class="tab-pane fade show active">
    <div class="product-carousel-4 slick-row-10 slick-arrow-style">
        <!-- product item start -->
        <?php foreach($product_by_category as $value):?>
        <div class="product-item">
            <figure class="product-thumb">
                <a href="<?php echo base_url('web/shop/product_details/').$value['id']?>">
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
                    <a  href="<?php echo base_url('web/Collection/wishlist/').$value['id']?>"  class="wishlist" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like wish"></i></a>

                    <a id="<?php echo $value['id']?>" class="wishlist"><i class="pe-7s-search"></i></a>
                </div>
                <div class="cart-hover">
                    <a  href="<?php echo base_url('web/Collection/addtocard/').$value['id']?>"  class="btn btn-cart" data-toggle="tooltip" data-placement="left"> Add To Cart</a>
                </div>
            </figure>
            <div class="product-caption text-center">
                <div class="product-identity">

                </div>

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
                    <span class="price-regular">₹<?php echo $regular?></span>
                    <span class="price-old"><del>₹<?php echo $value['price']?></del></span>
                </div>
            </div>
        </div>
        <!-- product item end -->
         <?php endforeach;?>
    </div>
</div>
