

		<div class="container-fluid">

			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Data table</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
					<li><a href="<?php echo base_url('admin/Dashboard')?>">Dashboard</a></li>
					<li  class="active"><span><?php echo $page;?></span></li>
					<!-- <li class="active"><span>data-table</span></li> -->
					</ol>

				</div>


				<!-- /Breadcrumb -->
			</div>
      <hr class="light-grey-hr" />
			<!-- /Title -->
			<div id="addnew"	class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
				<div class="modal-dialog" role="document ">
					<div class="modal-content">

									<form action="<?php echo base_url('admin/Category/Add')?>" method="POST">
										<div class="modal-header header-color-modal bg-color-1 ">
										<h4>Add Category </h4>
										<div class="modal-close-area modal-close-df">
											<a class="close" data-dismiss="modal" href="#"><i
													class="fa fa-close"></i></a>
										</div>
									</div>
										<div class="modal-body">
											<div class="widget-content nopadding">
										<div class="form-group row">
												<label class="control-label col-sm-3">Name</label>
												<div class="col-sm-9">
											    <input name="name" type="text" class="form-control" placeholder="Name">
										   </div>
										</div>
										<div class="form-group row">
											<label class="control-label col-sm-3">Parent</label>
											<div class="col-sm-9">
											  <input name="parent" type="text" class="form-control" placeholder="Parent">
										  </div>
									 </div>
										<div class="form-group row">

										</div>
										<div class="modal-footer">
											<input type="hidden"
												name="<?php echo $this->security->get_csrf_token_name();?>"
												value="<?php echo $this->security->get_csrf_hash();?>">
											<input type="submit" value="Submit" class="btn btn-primary">
											<a data-dismiss="modal" class="btn" href="#">Cancel</a>
										</div>
									</div>
								</div>
							</form>
						</div>
				 </div>
			</div>

			<!-- Row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">User List</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
								 <caption>

								 </caption>
								 <tr>
									 <th>S.No</th>
									 <th>Id</th>
									 <th>Name</th>
									 <th>Mobile</th>
									 <th>address</th>
									 <th>Action</th>
								 </tr>
								 <?php $i=1; foreach($aim as $row){?>
								 <tr>
									 <td> <?php echo $i ?></td>
									 <td><?php echo $row['user_id'] ?></td>
									 <td><?php echo $row['customer_name'] ?></td>
									 <td><?php echo $row['phone'] ?></td>
									 <td><?php echo $row['address'] ?></td>
									 <td>

										  		 <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_detail(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o " aria-hidden="true"></i></a>

												 </td>
								 </tr>

								 <div id="<?php echo $row['id'] ; ?>"
									 class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
									 <div class="modal-dialog" role="document ">
										 <div class="modal-content">
											 <form class="form-horizontal" method="post"
												 action="<?php echo base_url('admin/user/Edit/').$row['id'] ?>"
												 name="basic_validate" id="basic_validate" novalidate="novalidate">
												 <div class="modal-header header-color-modal bg-color-1 ">
													 <h4 class="modal-title">Edit user Details</h4>
													 <div class="modal-close-area modal-close-df">
														 <a class="close" data-dismiss="modal" href="#"><i
																 class="fa fa-close"></i></a>
													 </div>
												 </div>
												 <div class="modal-body">
													 <div class="widget-content nopadding">
														 <div class="form-group row">
															 <label class="control-label col-sm-3">Name</label>
															 <div class="col-sm-9">
																 <input type="text" class="form-control" name="name"
																	 value="<?php echo $row['name'] ?>" id="required" readonly>
															 </div>
														 </div>
														 <div class="form-group row">
															 <label class="control-label col-sm-3">Mobile</label>
															 <div class="col-sm-9">
																 <input type="text" class="form-control" name="mobile"
																	 value="<?php echo $row['mobile'] ?>" id="required">
															 </div>
														 </div>
														 <div class="form-group row">
															<label class="control-label col-sm-3">Details</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" name="details"
																	value="<?php echo $row['details'] ?>" id="required">
															</div>
														</div>
													 </div>

												 <div class="modal-footer">
													 <input type="hidden"
														 name="<?php echo $this->security->get_csrf_token_name();?>"
														 value="<?php echo $this->security->get_csrf_hash();?>">
													 <input type="submit" value="Update" class="btn btn-primary">
													 <a data-dismiss="modal" class="btn" href="#">Cancel</a>
												 </div>
												 </div>
											 </form>
										 </div>
									 </div>
								 </div>
								 <?php $i++ ; }?>
							 </table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->


		</div>

<script>
		function delete_detail(id) {
			var del = confirm("Do you want to Delete");
			if (del == true) {
				var sureDel = confirm("Are you sure want to delete");
				if (sureDel == true) {
					window.location = "<?php echo base_url()?>admin/user/Delete/" + id;
				}

			}
		}
	</script>
	<!-- /Main Content -->
