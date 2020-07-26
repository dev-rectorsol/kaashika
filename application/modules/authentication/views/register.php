<?php include('layout/header.php'); ?>
<style>
.main_box{
  box-shadow: 5px 5px 10px #888888;
  border-radius: 5px;
}
</style>
    <div class="wrapper  pa-0">
      <header class="sp-header">
        <div class="sp-logo-wrap pull-left">

        </div>

        <div class="clearfix"></div>
      </header>

      <!-- Main Content -->
      <div class="page-wrapper pa-0 ma-0 auth-page" style="background:#edeff0">
        <div class="container-fluid">
          <!-- Row -->
          <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
              <div class="auth-form  ml-auto mr-auto no-float">
                <div class="row main_box" style="background:#fff;padding:25px;">
                  <div class="col-sm-12 col-xs-12">
                    <div class="mb-30 text-center">
                      <a href="">
                        <img class="brand-img mr-10" src="<?php echo base_url('optimum'); ?>/img/logo.png" alt="brand"/>
                      </a>
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
                          <label class="control-label mb-10" for="exampleInputName_1" style="color:#772644;font-weight:bold;">Username</label>
                          <input type="text" class="form-control" required="" name="fullname" placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <label class="control-label mb-10" for="exampleInputEmail_2" style="color:#772644;font-weight:bold;">Email / Phone</label>
                          <input type="text" class="form-control" required="" name="username" id="username" placeholder="email or phone">

                        </div>
                        <div class="form-group">
                          <label class="pull-left control-label mb-10" for="exampleInputpwd_2" style="color:#772644;font-weight:bold;">Password</label>
                          <input type="password" class="form-control" required="" name="password" placeholder="********">
                        </div>
                        <div class="form-group">
                          <label class="pull-left control-label mb-10" for="exampleInputpwd_3" style="color:#772644;font-weight:bold;">Confirm Password</label>
                          <input type="password" class="form-control" required="" name="re-password" placeholder="********">
                        </div>
                        <div class="form-group">
                          <div class="checkbox checkbox-primary pr-10 pull-left">
                            <input id="checkbox_2" required="" type="checkbox">
                            <label for="checkbox_2"> I agree to all <span style="color:#772644;font-weight:bold;">Terms</span></label>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="form-group">

                            <span class="inline-block pr-10">Already have an account?</span>
                            <a class="" href="<?php echo base_url('auth'); ?> " style="color:#772644;font-weight:bold;">Sign In</a>

                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                          <button type="submit" class="btn btn-rounded pull-right" style="background:#772644;">sign Up</button>
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
