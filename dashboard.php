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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Overview</h2>
						
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed datatable">
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Items</th>
                                  <th>Posted date</th>
                                  <th>Views</th>
                                  <th>Status</th>       
                                  <th class="text-center">Action</th>
                              </tr>
                          </thead>   
                          <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="back_view.php">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><a href="#"><span class="label label-success">Active</span></a></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="post-ad.php"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="back_view.php">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><a href="#"><span class="label label-danger">Inactive</span></a></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="post-ad.php"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs btn_delete"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="back_view.php">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><a href="#"><span class="label label-success">Active</span></a></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="post-ad.php"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
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