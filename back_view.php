<?php include('includes/header.php');?>


    <section>
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <?php include('includes/profile_sidebar.php');?>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items m-b-50">
                        <!--features_items-->
                        <h2 class="title text-center">View</h2>
                        
                        <div class="product-details back_view"><!--product-details-->
						  <div class="col-sm-5">
							<div class="view-product">
								<img src="images/category.jpg" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						  <div class="col-sm-7">
                            <a class="btn btn-warning btn_edit" href="post-ad.php"><i class="glyphicon glyphicon-edit"></i> Edit this AD</a>
							<div class="product-information"><!--/product-information-->
								<h2>Toyota corolla petrol H5</h2>
                                <p><i class="fa fa-map-marker"></i> Yamuna Phase III &nbsp;<i class="fa fa-calendar"></i> 20 Aug, Ad ID: 1021026489</p>
								<span>
									<span><i class="fa fa-inr"></i> 600000</span>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-mobile-phone"></i>
										+91 1234567890
									</button>
								</span>
								<p><b>Brand:</b> Toyota</p>
								<p><b>Model:</b> Corolla</p>
								<p><b>Year:</b> 2008</p>
                                <p><b>Fuel:</b> Petrol</p>
                                <p><b>KM's driven:</b> 61,000 km</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
				  	    </div><!--/product-details-->    
                        
                        <div class="product_desc">
                        Toyota Corolla Petrol H5 Km61000 Colour Golden Full Options Inbuilt Music Player Climate Control A / C Power Steering Power Window Alloy Wheels Center Lock Company Maintenance All Papers Current.
                        </div>
                        
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>



    <?php include('includes/footer.php');?>