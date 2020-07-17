

		<div class="container-fluid">

			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Dashboard</h5>
				</div>
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
					<li><a href="<?php echo base_url('admin/Dashboard')?>">Dashboard</a></li>
					<li  class="active"><span><?php echo $page?></span></li>
					<!-- <li class="active"><span>data-table</span></li> -->
					</ol>

				</div>


				<!-- /Breadcrumb -->
			</div>
			<div class="span4 text-right">
				 <a href="#addnew" class="btn btn-primary addNewbtn" data-toggle="modal">Add New</a>
		 </div><br>
<hr class="light-grey-hr" />
			<!-- /Title -->
			 <div id="addnew"	class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
				<div class="modal-dialog" role="document ">
					<div class="modal-content">

									<form action="<?php echo base_url('admin/Gst/Add')?>" method="POST">
										<div class="modal-header header-color-modal bg-color-1 ">
										<h4>Add GST </h4>
										<div class="modal-close-area modal-close-df">
											<a class="close" data-dismiss="modal" href="#"><i
													class="fa fa-close"></i></a>
										</div>
									</div>
										<div class="modal-body">
											<div class="widget-content nopadding">
										<div class="form-group row">
												<label class="control-label col-sm-3">GST Name</label>
												<div class="col-sm-9">
											    <input name="key" type="text" class="form-control" placeholder="GST Name">
										   </div>
										</div>
										<div class="form-group row">
												<label class="control-label col-sm-3">Value</label>
												<div class="col-sm-9">
											    <input name="value" type="text" class="form-control" placeholder="GST Value">
										   </div>
										</div>

										<div class="modal-footer">
											<input type="hidden"	value="<?php echo $this->security->get_csrf_hash();?>">
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
								<h6 class="panel-title txt-dark">Tag List</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
								 <caption>
									 <!-- <h4> User  List</h4> -->
								 </caption>
								 <tr>
									 <th>S.No</th>
									 <th>Title</th>
									 <!-- <th>Source</th>
									 <th>Price</th>
									 <th>Descount</th> -->

									 <th>Action</th>
								 </tr>
								 <?php $i=1; foreach($tag_data as $row){?>
								 <tr>
									 <td> <?php echo $i ?></td>
									 <td><?php echo $row['title'] ?></td>

									 <td>
										 <a data-target="<?php echo '#'.$row['id']; ?>" class="pd-setting-ed btn btn-primary text-center tip"
											 data-toggle="modal" data-original-title="Edit"><i
												 class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

										 <a title="Trash" class="pd-setting-ed btn btn-danger"
											 onclick="delete_detail(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o"
												 aria-hidden="true"></i></a></td>
								 </tr>

								 <div id="<?php echo $row['id'] ; ?>"
									 class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
									 <div class="modal-dialog" role="document ">
										 <div class="modal-content">
											 <form class="form-horizontal" method="post"
												 action="<?php echo base_url('admin/Tags/Edit/').$row['id'] ?>"
												 name="basic_validate" id="basic_validate" novalidate="novalidate">
												 <div class="modal-header header-color-modal bg-color-1 ">
													 <h4 class="modal-title">Edit Tags</h4>
													 <div class="modal-close-area modal-close-df">
														 <a class="close" data-dismiss="modal" href="#"><i
																 class="fa fa-close"></i></a>
													 </div>
												 </div>
												 <div class="modal-body">
													 <div class="widget-content nopadding">
														 <div class="form-group row">
															 <label class="control-label col-sm-3">Title</label>
																 <div class="col-sm-9">
																	 <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>" id="required">
																 </div>
														 </div>
														</div>
												 </div>

												 <div class="modal-footer">
													 <input type="hidden"  value="<?php echo $this->security->get_csrf_hash();?>">
													 <input type="submit" value="Update" class="btn btn-primary">
													 <a data-dismiss="modal" class="btn" href="#">Cancel</a>
												 </div>
												 </div>
											 </form>
										 </div>
									 </div>
								 </div>
								 <?php
																																	 $i++ ;
																																	 }?>
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
			window.location = "<?php echo base_url()?>admin/tags/Delete/" + id;
		}

	}
}
</script>

	<!-- /Main Content -->