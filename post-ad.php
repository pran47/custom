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
					<div class="features_items m-b-50"><!--features_items-->
						<h2 class="title text-center">Post your new AD</h2>
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
                                            <button type="button" id="" name="" class="btn btn-danger pull-right add_btn">Submit</button>
                                        </div>
                        </form>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>