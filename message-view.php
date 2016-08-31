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
						<h2 class="title text-center">Message</h2>
				        
                        <div class="message_view">
                            <p class="text-muted"><i class="fa fa-user"></i> From : Admin</p>
                            <h3>Take a look at our Wednesday offers</h3>
                            <hr>
                            <div class="message_content">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <!--/.message_content-->
                            <hr>
                            <a class='btn btn-success btn-xs' href="inbox.php"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                            <a class='btn btn-info btn-xs' href="compose-message.php"><span class="glyphicon glyphicon-share"></span> Reply</a>
                            <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </div>
                        <!--/.message_view-->
                        
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>