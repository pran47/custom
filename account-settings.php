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
						<h2 class="title text-center">Account settings</h2>
						<form role="form">
                                        <div class="form-group">
                                            <label>Change Phone Number</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="Enter new phone numner" value="+91 1234567890" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Change Email ID</label>
                                            <input type="email" class="form-control" id="" name="" placeholder="Enter new email ID" value="marcos@gmail.com" required>
                                        </div>
                                        <div class="form-group">
                                            <label>New Password *</label>
                                            <input type="password" class="form-control" id="" name="" placeholder="Enter new password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm password *</label>
                                            <input type="password" class="form-control" id="" name="" placeholder="" required>
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