<div class="breadcome-area">
			<div class="container-fluid">
				<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex no-block align-items-center">
								<br/>
              <h6 class="page-title"><?php echo isset($page_name) ? $page_name : 'Dashbord';  ?></h6>
								<div class=" text-right">

										<a href="#">Home</a> <span class="bread-slash">/</span><span class="bread-blod active"><?php echo	$page ?></span>

							</div>

						</div>
					</div>
				</div>

</div>
<div>
<div class="container-fluid">
	<hr class="light-grey-hr" />

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
									<label class="control-label col-sm-3">Category</label>
									<div class="col-sm-9">
										<select name="icon" id="icon" class="form-control">
										<option value="">Select icon</option>
										<option value="book">Book</option>
										<option value="assignment">assignment</option>
										<option value="computer">Computer</option>
										<option value="school">School</option>
										<option value="alarm">Alarm</option>
										<option value="bookmarks">Bookmarks</option>
										<option value="settings">Settings</option>
										</select>
								 </div>
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

		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
								<div class="card-body">
							  	<div class="widget-box">
								    <table class="table table-striped table-bordered">
									<caption>
										<h4> Category List</h4>
									</caption>
									<tr>
										<th>S.No</th>
										<th>Id</th>
										<th>Name</th>
										<th>Parent</th>
										<th>Setting</th>
									</tr>
									<?php $i=1; foreach($aim as $row){?>
									<tr>
										<td> <?php echo $i ?></td>
										<td><?php echo $row['id'] ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['parent'] ?></td>
										<td> <a data-target="<?php echo '#'.$row['id']; ?>" class="text-center tip"
												data-toggle="modal" data-original-title="Edit"><i
													class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<a title="Trash" class="pd-setting-ed"
												onclick="delete_detail(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o"
													aria-hidden="true"></i></a></td>
									</tr>

									<div id="<?php echo $row['id'] ; ?>"
										class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
										<div class="modal-dialog" role="document ">
											<div class="modal-content">
												<form class="form-horizontal" method="post"
													action="<?php echo base_url('admin/Category/Edit/').$row['id'] ?>"
													name="basic_validate" id="basic_validate" novalidate="novalidate">
													<div class="modal-header header-color-modal bg-color-1 ">
														<h4 class="modal-title">Edit Aim</h4>
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
																		value="<?php echo $row['title'] ?>" id="required">
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
</div>
</div>
		<script>
			function delete_detail(id) {
				var del = confirm("Do you want to Delete");
				if (del == true) {
					var sureDel = confirm("Are you sure want to delete");
					if (sureDel == true) {
						window.location = "<?php echo base_url()?>admin/Category/Delete/" + id;
					}

				}
			}
		</script>
</div>
