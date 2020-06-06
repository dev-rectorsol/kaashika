
<!-- breadcrumb area start -->
       <div class="breadcrumb-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="breadcrumb-wrap">
                           <nav aria-label="breadcrumb">
                               <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="<?php echo base_url('web/home')?>"><i class="fa fa-home"></i></a></li>
                                  <!-- <li class="breadcrumb-item"><a href="<?php echo base_url('web/shop')?>">shop</a></li>  -->
                                   <li class="breadcrumb-item active" aria-current="page">checkout</li>
                               </ul>
                           </nav>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- breadcrumb area end -->

       <!-- checkout main wrapper start -->
       <div class="checkout-page-wrapper section-padding">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <!-- Checkout Login Coupon Accordion Start -->
                       <div class="checkoutaccordion" id="checkOutAccordion">
                           <div class="card">
                               <h6>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click
                                           Here To Login</span></h6>
                               <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">
                                   <div class="card-body">
                                       <p>If you have shopped with us before, please enter your details in the boxes
                                           below. If you are a new customer, please proceed to the Billing &amp;
                                           Shipping section.</p>
                                       <div class="login-reg-form-wrap mt-20">
                                           <div class="row">
                                               <div class="col-lg-7 m-auto">
                                                   <form action="#" method="post">
                                                       <div class="row">
                                                           <div class="col-md-12">
                                                               <div class="single-input-item">
                                                                   <input type="email" placeholder="Enter your Email" required />
                                                               </div>
                                                           </div>

                                                           <div class="col-md-12">
                                                               <div class="single-input-item">
                                                                   <input type="password" placeholder="Enter your Password" required />
                                                               </div>
                                                           </div>
                                                       </div>

                                                       <div class="single-input-item">
                                                           <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                               <div class="remember-meta">
                                                                   <div class="custom-control custom-checkbox">
                                                                       <input type="checkbox" class="custom-control-input" id="rememberMe" required />
                                                                       <label class="custom-control-label" for="rememberMe">Remember
                                                                           Me</label>
                                                                   </div>
                                                               </div>

                                                               <a href="#" class="forget-pwd">Forget Password?</a>
                                                           </div>
                                                       </div>

                                                       <div class="single-input-item">
                                                           <button class="btn btn-sqr">Login</button>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- <div class="card">
                               <h6>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click
                                           Here To Enter Your Code</span></h6>
                               <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                   <div class="card-body">
                                       <div class="cart-update-option">
                                           <div class="apply-coupon-wrapper">
                                               <form action="#" method="post" class=" d-block d-md-flex">
                                                   <input type="text" placeholder="Enter Your Coupon Code" required />
                                                   <button class="btn btn-sqr">Apply Coupon</button>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div> -->
                       </div>
                       <!-- Checkout Login Coupon Accordion End -->
                   </div>
               </div>
               <div class="row">
                   <!-- Checkout Billing Details -->
                   <div class="col-lg-6">
                       <div class="checkout-billing-details-wrap">
                           <h5 class="checkout-title">Billing Details</h5>
                           <div class="billing-form-wrap">
                               <form action="<?php echo base_url('web/checkout/'); ?>" Method="post">

                                   <div class="single-input-item">
                                       <label for="f_name" class="required">First Name</label>
                                       <input type="text" id="name" readonly value="<?php echo $username;?>" name="name" placeholder=" Name" required />
                                  </div>

                                   <div class="single-input-item">
                                       <label for="email" class="required">Email Address</label>
                                       <input type="email" id="email" readonly value="<?php echo $email;?>" name="email" placeholder="Email Address" required />
                                   </div>
                                   <div class="single-input-item">
                                       <label for="email" class="required">Mobile</label>
                                       <input type="text" id="phone" value="<?php echo $phone;?>" name="phone" placeholder="Email Address" required />
                                   </div>

                                   <div class="single-input-item">
                                       <label for="street-address" class="required mt-20">Street address</label>
                                       <input type="text" id="address" name="address" placeholder="Street address Line 1" required />
                                   </div>

                                   <div class="single-input-item">
                                       <label for="postcode" class="required">Postcode / ZIP</label>
                                       <input type="text" id="postcode"  name="postcode" placeholder="Postcode / ZIP" required />
                                   </div>

                                   <br><br>
                                    <button type="submit" name="placeOrder" class="btn btn-sqr">Place Order</button>

                               </form>
                           </div>
                       </div>
                   </div>

                   <!-- Order Summary Details -->
                   <div class="col-lg-6">
                       <div class="order-summary-details">
                           <h5 class="checkout-title">Your Order Summary</h5>
                           <div class="order-summary-content">
                               <!-- Order Summary Table -->
                               <div class="order-summary-table table-responsive text-center">
                                   <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>Products</th>
                                               <th>Total</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         <?php if($this->cart->total_items() > 0){ foreach($cartIvalue as $item){ ?>
                                           <tr>
                                               <td><a href="<?php echo base_url('')?>"><?php echo $item["name"]; ?> X <strong> <?php echo $item["qty"]; ?></strong></a>
                                               </td>
                                               <td><?php echo '₹'.$item["subtotal"]; ?></td>
                                           </tr>
                                         <?php } } ?>

                                       </tbody>
                                       <tfoot>
                                         <?php if($this->cart->total_items() > 0){
                		                        $sub_total=0;
                													  foreach($cartIvalue as $item){

                                             $data['cartIvalue']=$item;
                														 $sub_total=($sub_total+$item['subtotal']);
                                          }   ?>
                                           <tr>
                                               <td>Sub Total</td>
                                               <td><strong><?php echo '₹'.$sub_total;?></strong></td>
                                           </tr>
                                           <tr>
                                               <td>Shipping</td>
                                               <td class="d-flex justify-content-center">
                                                   <ul class="shipping-type">
                                                       <li>
                                                           <div class="custom-control custom-radio">
                                                               <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                               <label class="custom-control-label" for="flatrate">
                                                                   Rate: ₹70.00</label>
                                                           </div>
                                                       </li>
                                                       <li>

                                                       </li>
                                                   </ul>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>Total Amount</td>
                                               <?php $total=0; $total=$sub_total+70?>
                                               <td><strong><?php echo '₹'.$total;?></strong></td>
                                           </tr>
                                         <?php }else{?>
                                           <tr>
                                               <td>Sub Total</td>
                                               <td><strong>0</strong></td>
                                           </tr>
                                           <tr>
                                               <td>Shipping</td>
                                               <td class="d-flex justify-content-center">
                                                   <ul class="shipping-type">
                                                       <li>
                                                           <div class="custom-control custom-radio">
                                                               <input type="radio" id="flatrate" name="shipping" class="custom-control-input" checked />
                                                               <label class="custom-control-label" for="flatrate">Flat
                                                                   Rate: ₹70.00</label>
                                                           </div>
                                                       </li>
                                                       <li>

                                                       </li>
                                                   </ul>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>Total Amount</td>

                                               <td><strong>0</strong></td>
                                           </tr>
                                           <?php
                                         }
                   															 ?>

                                       </tfoot>
                                   </table>
                               </div>
                               <!-- Order Payment Method -->
                               <!-- <div class="order-payment-method">
                                   <div class="single-payment-method show">
                                       <div class="payment-method-name">
                                           <div class="custom-control custom-radio">
                                               <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked />
                                               <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                           </div>
                                       </div>
                                       <div class="payment-method-details" data-method="cash">
                                           <p>Pay with cash upon delivery.</p>
                                       </div>
                                   </div>
                               </div> -->
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- checkout main wrapper end -->
