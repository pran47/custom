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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
                        <table class="table table-striped table-condensed">
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
                                <td><a href="#">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><span class="label label-success">Active</span></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><span class="label label-danger">Inactive</span></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="#">Honda City 2016</a></td>
                                <td>30-08-2016</td>
                                <td>145</td>
                                <td><span class="label label-success">Active</span></td>                                       
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                                </td>
                            </tr>
                          </tbody>
                        </table>

						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>                       

	

<?php include('includes/footer.php');?>