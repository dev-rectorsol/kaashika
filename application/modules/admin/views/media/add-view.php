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
<!-- Multi Upload Start-->
<div class="multi-uploaded-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 ol-md-6 col-xs-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">File Upload (max file size)</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">

									<div class="panel-body">
                      <form action="<?php echo base_url('file_upload') ?>" class="dropzone dropzone-custom needsclick" id="demo-upload" enctype="multipart/form-data">
										<p class="text-muted">You can add a max file size by <code>data-max-file-size</code>.</p>
										<div class="mt-40">
											<input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
										</div>
                  </form>
									</div>
								</div>
							</div>
						</div>
        </div>
        <!-- <div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">With remove link</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="">
											<form action="#" class="dropzone" id="my-awesome-dropzone">
												<div class="fallback">
													<input name="file" type="file" multiple />
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
    </div>
</div>
<!-- Multi Upload End-->
</div>
<?php include('media_js.php')?>
