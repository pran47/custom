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
						<h2 class="title text-center">Compose Message</h2>
				        
                        <form role="form">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" class="form-control" id="" name="" placeholder="" value="admin@admin.com" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" id="" name="" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" type="textarea" id="" placeholder="Type your message" maxlength="170" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" id="" name="" class="btn btn-danger pull-right add_btn">Send</button>
                            </div>
                        </form>
                        
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>