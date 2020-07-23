

		<div class="container-fluid">
			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Setting</h5>
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


			<div class="row">
									<div class="col-sm-12">
										<div class="panel panel-default card-view">
											<div class="panel-wrapper collapse in">
												<div class="panel-body">
													<div class="form-wrap">
														<form action="#">
															<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i> Socaical Icon</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
								                    <select class="form-control" name="link">
																			<option value="select">Select</option>
									                    <option value="https://www.facebook.com/">facebook</option>
																			<option value="https://web.whatsapp.com/">whatsapp</option>
																			<option value="https://www.instagram.com/">instagram</option>
																			<option value="https://twitter.com/Twitter">twitter</option>
																			<option value="https://www.linkedin.com/">LinkedIn</option>
																			<option value="https://www.youtube.com/">YouTube</option>
																		</select>
								                  </div>

																</div>
																<!--/span-->
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="">Display Icon</label>
																		<button type="button" id='addIcon' class="btn btn-primary" name="button">Add Icon</button>
																		<div id="icon_view"></div>
															   </div>
																</div>
																<div class="col-sm-2">
																	<button type="button" name="add_more" id="add"
																		class="btn btn-success">+</button>
																</div>
																<!--/span-->
															</div>
															<div class="form-group row" id="add_data"></div>
															<!-- Row -->
															<div class="seprator-block"></div>
															<h6 class="txt-dark capitalize-font"> Footer Contact</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
								                      <input name="address" type="text" class="form-control" placeholder="Address">
								                  </div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																			<input name="email" type="text" class="form-control" placeholder="Email Id">
																	</div>
																</div>

																<div class="col-md-4">
																<div class="form-group">
																			<input name="phone" type="text" class="form-control" placeholder="Contact Number">
																	</div>
																</div>

															</div>

															<div class="seprator-block"></div>
															<h6 class="txt-dark capitalize-font">Application Title</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																			<input name="title" type="text" class="form-control" placeholder="Title">
																	</div>
																</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<span id="addfeaturepreview" ></span>
																			<button id="removepreview" type="button" class="btn btn-link hide"  style="color:blue">remove</button>
																			<button id="" type="button" class="addfeatureimage btn btn-link" style="color:blue" name="button">Favicon icon</button>

																   </div>
															 </div>
														 </div>

															<!--/row-->
															<div class="seprator-block"></div>
															<h6 class="txt-dark capitalize-font">Logo</h6>
															<hr class="light-grey-hr"/>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">

																		  <input name="discription" type="text" class="form-control" placeholder="About">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">

																		<span id="addfeaturepreview" ></span>
																		<button id="removepreview" type="button" class="btn btn-link hide"  style="color:blue">remove</button>
																		<button id="" type="button" class="addfeatureimage btn btn-link" style="color:blue" name="button">Logo</button>
																	</div>
																</div>
															</div>


															<div class="form-actions">
																<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
																<button type="button" class="btn btn-warning pull-left">Cancel</button>
																<div class="clearfix"></div>
															</div>
														</form>

												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Row -->

							</div>




	<!-- /Main Content -->
  <script>
    function delete_detail(id) {
      var del = confirm("Do you want to Delete");
      if (del == true) {
        var sureDel = confirm("Are you sure want to delete");
        if (sureDel == true) {
          window.location = "<?php echo base_url()?>admin/setting/deleteslider/" + id;
        }

      }
    }
	// 	$('#sliderForm').on('submit', function(event){
  //   event.preventDefault();
  //   if($('input[name=featureImage]').length){
  //     $(this)[0].submit();
  //   }else{
  //     $('#msg').html('Select Image file After Click Save');
  //   }
  // })

  </script>
	<script type="text/javascript">
			$(document).ready(function(){
				$('#addIcon').on('click', function(){
					$.ajax({
						url:'<?php echo base_url('admin/social/icons') ?>',
						type: 'POST',
						success: function(response){
							$("#icon_view").show().html(response);
						}
					});
				});

				$('#add').on('click', function() {
		      var element = '	<div class="row">'; element += '<br>';
		      element += '</div><div class="col-sm-6">';
					element +=										'<select name="link[]" id="example-input-small" class="form-control">';
					element +=										'<option value="none">Select Link</option>';
					element +=										'<option value="https://www.facebook.com/">facebook</option>';
					element +=		                 '<option value="https://web.whatsapp.com/">whatsapp</option>';
					element +=                      ' <option value="https://www.instagram.com/">instagram</option>';
					element +=	                   '<option value="https://twitter.com/Twitter">twitter</option>';
					element +=                     '<option value="https://www.linkedin.com/">LinkedIn</option>';
					element +=	                    '<option value="https://www.youtube.com/">YouTube</option>';
					element +=                 	'</select>';
					element +=									'</div>';
					element +=									'<div class="col-sm-4">';
					element +=								'	<label for="">Display Icon</label>';
				  element +=	              '<button type="button" id="addIcon" class="btn btn-primary" name="button">Add Icon</button>';
				  element +=	               '<div id="icon_view"></div>';
					element +=									'</div><br><br>';
		      element += '<div class="col-sm-2"> <button type="button" name="remove"  class="btn btn-danger btn-xs remove">-</button></div>';
		      element += '</div>';
		      element += '</div>';

		      $('#add_data').append(element);
		  });
			});
		</script>
