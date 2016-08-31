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
						<h2 class="title text-center">Inbox</h2>
				        
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-hovered datatable">
                              <thead>
                              <tr>
                                  <th>No:</th>
                                  <th>From</th>
                                  <th>Subject</th>
                                  <th>Date / Time</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </thead>   
                          <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="message-view.php">Admin</a></td>
                                <td><a href="message-view.php">Take a look at our Wednesday offers</a></td>
                                <td>20 Aug / 9:27 AM</td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="compose-message.php"><span class="glyphicon glyphicon-share"></span> Reply</a>
                                    <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="message-view.php">Admin</a></td>
                                <td><a href="message-view.php">Take a look at our Wednesday offers</a></td>
                                <td>20 Aug / 9:27 AM</td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="compose-message.php"><span class="glyphicon glyphicon-share"></span> Reply</a>
                                    <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="message-view.php">Admin</a></td>
                                <td><a href="message-view.php">Take a look at our Wednesday offers</a></td>
                                <td>20 Aug / 9:27 AM</td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="compose-message.php"><span class="glyphicon glyphicon-share"></span> Reply</a>
                                    <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                        
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>