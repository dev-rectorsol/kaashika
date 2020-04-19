

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

<hr class="light-grey-hr" />


       <div class="col-sm-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Add Attribute</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="form-wrap">
									<form action="<?php echo base_url('admin/Product/Add_attribute')?>" method="POST">
										<div class="form-group row">
											<label class="col-sm-2 control-label " for="example-input-small">Select product</label>
											<div class="col-sm-9">
												<select name="product" id="icon" class="form-control">
													<option value="none">Select product</option>
													<?php foreach($product_data as $row){ ?>
													<option value="<?php echo $row['id'] ?>"> <?php echo $row['product'] ?> </option>
													<?php } ?>
			                  </select>
											</div>

										</div>
											<div class="form-group row">
												<label class="col-sm-2 control-label " for="example-input-small">name</label>
												<div class="col-sm-4">
													<input type="text" id="example-input-small" name="attribute[]" class="form-control input-sm" placeholder="attribute">
												</div>
												<div class="col-sm-4">
													<input type="text" id="example-input-small" name="value[]" class="form-control input-sm" placeholder="value">
												</div>
												<div class="col-sm-2">
												  <button type="button" name="add_more" id="add" class="btn btn-success">+</button>
												</div>
											</div>
											<div class="form-group row" id="add_data">

											</div>
											<br><br><br><br>
										<div class="form-group row">
											<div class="col-sm-12 text-center">
												 <input type="hidden"
													name="<?php echo $this->security->get_csrf_token_name();?>"
													value="<?php echo $this->security->get_csrf_hash();?>">
												<input type="submit" value="Submit" class="btn btn-primary">
												<a data-dismiss="modal" class="btn" href="#">Cancel</a>
										</div>
									</div>
							  </form>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>



	<!-- /Main Content -->
	<script>
		function delete_detail(id) {
			var del = confirm("Do you want to Delete");
			if (del == true) {
				var sureDel = confirm("Are you sure want to delete");
				if (sureDel == true) {
					window.location = "<?php echo base_url()?>admin/Product/Delete/" + id;
				}

			}
		}
	</script>
	<?php include('product_js.php');?>
