<!-- product tab content start -->


            <?php foreach($product_by_category as $value):?>
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



<!-- product tab content end -->
