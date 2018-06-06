<?php $this->load->view('template_admin/header'); ?>
<style>
	body{
		background: url('<?php echo base_url('assets/img/laundry.jpg') ?>') no-repeat center center fixed;
		-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow: hidden;
	}
</style>
<div id="main-wrapper">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4" style="right: 250px;">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Register</h4>
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('Login/register') ?>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="re-password" class="form-control" placeholder="re-Password">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30" style="background-color: #86ccca">Sign up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('template_admin/footer') ?>