<?php include('layout/header.php'); ?>

    <div class="wrapper  pa-0">
      <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
          <a href="index.html">
            <img class="brand-img mr-10" src="<?php echo base_url('optimum'); ?>/img/logo.png" alt="brand"/>
            <span class="brand-text">Snoopy</span>
          </a>
        </div>
        <div class="form-group mb-0 pull-right">
          <span class="inline-block pr-10">Already have an account?</span>
          <a class="inline-block btn btn-warning btn-rounded btn-outline" href="<?php echo base_url('auth'); ?>">Sign In</a>
        </div>
        <div class="clearfix"></div>
      </header>

      <!-- Main Content -->
      <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
          <!-- Row -->
          <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
              <div class="auth-form  ml-auto mr-auto no-float">
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                    <div class="mb-30">
                      <h3 class="text-center txt-dark mb-10">Sign up to Snoopy</h3>
                      <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                    </div>
                    <div class="form-wrap">
                      <?php if ($this->session->flashdata()): ?>
												<?php if($this->session->flashdata('status')): ?>
													<div class="alert alert-success alert-mg-b">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<strong>Done!</strong> <?php echo $this->session->flashdata('massege') ?> wait a moment <img src="<?php echo base_url('assets/images/preloder-0.2s-200px.svg') ?>" alt class="header-profile-icon">.
														<?php redirect(base_url(), 'refresh'); ?>
													</div>

												<?php else: ?>
												<div class="alert alert-danger alert-mg-b">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
													<strong>Failed!</strong> <?php echo $this->session->flashdata('massege') ?>.
												</div>
											<?php endif; ?>
											<?php endif; ?>
                      <form action="<?php echo base_url('authentication/Register/Signup')?>" method="post">
                        <div class="form-group">
                          <label class="control-label mb-10" for="exampleInputName_1">Username</label>
                          <input type="text" class="form-control" required="" name="fullname" placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <label class="control-label mb-10" for="exampleInputEmail_2">Email or Phone</label>
                          <input class="uk-input" type="text" id="username" name="username" placeholder= "Email or Mobile">
                        </div>
                        <div class="form-group">
                          <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                          <input type="password" class="form-control" required="" name="password" placeholder="********">
                        </div>
                        <div class="form-group">
                          <label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirm Password</label>
                          <input type="password" class="form-control" required="" name="re-password" placeholder="********">
                        </div>
                        <div class="form-group">
                          <div class="checkbox checkbox-primary pr-10 pull-left">
                            <input id="checkbox_2" required="" type="checkbox">
                            <label for="checkbox_2"> I agree to all <span class="txt-orange">Terms</span></label>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="form-group text-center">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                          <button type="submit" class="btn btn-warning btn-rounded">sign Up</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>

      </div>
      <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<?php include('layout/footer.php'); ?>
