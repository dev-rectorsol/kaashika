

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
			<!-- /Title -->


			<!-- Row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Contact List</h6>
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
									 <th>Name</th>

									 <th>Phone</th>
									 <th>Email</th>
                   <th>Subject</th>
									 <th>Message</th>
									 <th>Action</th>
								 </tr>
								 <?php $i=1; foreach($contact_data as $row){?>
								 <tr>
									 <td> <?php echo $i ?></td>
									 <td><?php echo $row['name'] ?></td>
									 <td><?php echo $row['phone'] ?></td>
									 <td><?php echo $row['email'] ?></td>
									 <td><?php echo $row['subject'] ?></td>
									 <td><?php echo $row['message'] ?></td>
									 <td>
									<a title="Trash" class="pd-setting-ed" onclick="delete_detail(<?php echo $row['id'] ;?>)">
										<i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
								 </tr>


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



	<!-- /Main Content -->
	<script>
		function delete_detail(id) {
			var del = confirm("Do you want to Delete");
			if (del == true) {
				var sureDel = confirm("Are you sure want to delete");
				if (sureDel == true) {
					window.location = "<?php echo base_url()?>admin/Contact/Delete/" + id;
				}

			}
		}
	</script>
