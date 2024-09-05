 <div class="sidebar close">
        <div class="logo-details">
            
            <a href="<?php echo base_url() ?>partner-dashboard" class="link_name"><i><img class="img-fluid" src="<?php echo seller_assets_url() ?>img/ax-xpress.png" width="38"/></i>
            <span class="logo_name"><img class="img-fluid" src="<?php echo seller_assets_url() ?>img/text-img.png" width="130"/></span></a>
        </div>
        <ul class="nav-links">
           
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-map-pin'></i>
                        <span class="link_name">Find Products</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Find Products</a></li>
                    <li><a href="<?php echo base_url() ?>partner-dashboard"><i class="bx bx-cart">Products</i></a></li>
                    <li><a href="#">Winning Product</a></li>
                   
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-box'></i>
                        <span class="link_name">Product Masters</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Product Masters</a></li>
                    <li><a href="<?php echo base_url() ?>partner-import-list"><i  class="bx bx-add-to-queue">&nbsp;Import List</i></a></li>
                    <li><a href="#">Product Stock</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Order Masters</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Order Masters</a></li>
                    <li><a href="#"><i class="bx bx-basketOrder">Order List</i></a></li>
                    <li><a href="#">Order Details</a></li>
                     <li><a href="#"><i class=" bx bx-receipt">Tax Invoice</i></a></li>
                </ul>
            </li>
            <hr class="mt-2">
            
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-plane'></i>
                        <span class="link_name" data-bs-toggle="modal" data-bs-target="#exampleModal1">Plans</span>
                    </a>
                    <i class='bx bxs-chevron-plans arrow'></i>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Plans</a></li>
                   
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-plus'></i>
                    <span class="link_name">Import Product</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo base_url() ?>partner-import-list" >Import Product</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-store'></i>
                    <span class="link_name" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Your Store</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Your Store</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo base_url() ?>partner-setting">Setting</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                 <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>

    
<!-- Modal Creation -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connect Your Shop Push to the Product</h5>
        <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6><a href="#">Add Shop By One Click</a></h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a nunc at tortor iaculis luctus at in mauris. Nunc lorem justo, hendrerit eu aliquam sed, porttitor ut diam.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Part Subcription -->
 <div class="modal  fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Connect Your Shop Push to the Product</h6>
        <button type="button" class="btn-close border-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   <div class="modal-body">
 <div class="tabs mt-4">

  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">
  <input type="radio" id="tab4" name="tab-control">
  <div class="text-center">
    <label for="tab1" role="button" class="text-center border rounded p-2"><span>Monthly</span></label>
    <label for="tab2" role="button" class="text-center border rounded p-2"><span>Yearly</span></label>
  </div>
  <div class="content">
    <section>
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h4>Select Your For Monthly Plan!</h4>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="title">
                <h5>Starter</h5>
                <p>Start a trial</p>
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$0</h4>
              </div>
              <div class="description">
                <h6> What You Get</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>0% transaction fee</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>7 million+ Product Catalog</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>25 Unique Products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Multiple Stores</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>24/7 Chat & Email Support</p>
              </div>
             
              <div class="button"><a class="btn btn-success btn-2" href="#">Get Started</a></div>
            </div>
          </div>
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Side Shape-->
              <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
              <div class="title"><span>Most Popular</span>
               <h5>Pro</h5>
                 <p>14-day a trial</p>
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$9.99</h4>
              </div>
              <div class="description">
                <h6>Everything in Starter, plus:</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>250 unique products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>25 premium products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Winning Products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Chat with suppliers</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Branded invoicing</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Vip Chat & Email support</p>
              </div>
              <div class="button"><a class="btn btn-warning" href="#">Get Started</a></div>
            </div>
          </div>
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="title">
                <h5>Enterprise</h5>
                <p>14-day a trial</p>
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$49.99</h4>
              </div>
              <div class="description">
                <h6>Everything in Pro, plus:</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>10,000 unique products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>10,000 premium products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Ebay dropshipping</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Amazon dropshipping</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Unlimited Orders</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Vip Chat & Email support</p>
              </div>
              <div class="button"><a class="btn btn-info" href="#">Get Started</a></div>
            </div>
          </div>
        </div>

    </div>
    </section>
    <section>
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              
              <h4>Select Your Yearly Plan!</h4>
             
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="title">
                <h5>Pro</h5>
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$9.15</h4>
              </div>
              <div class="description">
                <h6> What You Get</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>0% transaction fee</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>7 million+ Product Catalog</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>25 Unique Products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Multiple Stores</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>24/7 Chat & Email Support</p>
              </div>
             
              <div class="button"><a class="btn btn-success btn-2" href="#">Get Started</a></div>
            </div>
          </div>
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Side Shape-->
              <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
              <div class="title"><span>Most Popular</span>
               <h5>Enterprise</h5>
                 
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$9.99</h4>
              </div>
              <div class="description">
                <h6>Everything in Starter, plus:</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>250 unique products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>25 premium products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Winning Products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Chat with suppliers</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Branded invoicing</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Vip Chat & Email support</p>
              </div>
              <div class="button"><a class="btn btn-warning" href="#">Get Started</a></div>
            </div>
          </div>
          <!-- Single Price Plan Area-->
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div class="title">
                <h5>Unicorn</h5>
                
                <div class="line"></div>
              </div>
              <div class="price">
                <h4>$49.99</h4>
              </div>
              <div class="description">
                <h6>Everything in Pro, plus:</h6>
                <p><i class="fa fa-check" aria-hidden="true"></i>10,000 unique products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>10,000 premium products</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Ebay dropshipping</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Amazon dropshipping</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Unlimited Orders</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>Vip Chat & Email support</p>
              </div>
              <div class="button"><a class="btn btn-info" href="#">Get Started</a></div>
            </div>
          </div>
        </div>

    </div>
    </section>
    
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <!-- End Subcription -->
<!--End Modal -->




<!-- End Modal Creation -->

   
   