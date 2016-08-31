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
						<h2>Profile</h2>
						<div class="profile">
                                <div class="">
                                    <div class="profile-sidebar">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="images/shop/product12.jpg" class="img-responsive" alt="">
                                        </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name">
                                                Marcus Doe
                                            </div>
                                            <div class="profile-usertitle-job">
                                                Developer
                                            </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        <div class="profile-userbuttons">
                                            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</button>
                                            <!--<button type="button" class="btn btn-danger btn-sm">Message</button>-->
                                        </div>
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-home"></i> Overview </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-user"></i> Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <i class="glyphicon glyphicon-ok"></i> Tasks </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-flag"></i> Help </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END MENU -->
                                    </div>
                                </div>
                        </div>
                        <!--/.profile-->
					
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items m-b-50"><!--features_items-->
						<h2 class="title text-center">Add New</h2>
						<form role="form">
                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Product name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Location" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Price" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Brand" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Model" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Year" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fuel</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Fuel" required>
                                        </div>
                                        <div class="form-group">
                                            <label>KM Driven</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="KM Driven" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" type="textarea" id="" placeholder="Description" maxlength="170" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" id="" name="" class="btn btn-danger pull-right add_btn">Add</button>
                                        </div>
                        </form>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>