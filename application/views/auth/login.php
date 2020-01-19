<?php $this->load->view('admin/header');
$attributes = array('class' => 'form-control', 'id' => '');
?>
<style type="text/css">
.container.col-sm-6 {
    padding: 30px;
    margin-top: 90px;
    border-radius: 15px;
	background-color: #999;
}
</style>
  <div class="row">
    <div class="col-sm-3" style="background-color:lavender;"></div>
    <div class="container col-sm-6"">
<!--ionauth-->	
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>
  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
<!--DISABLE
  ?php echo lang('login_remember_label', 'remember');?>
  ?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>
-->	

  <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-primary btn-block btn-signin"');?></p>

<?php echo form_close();?>

<!--DISABLE <p><a href="forgot_password">?php echo lang('login_forgot_password');?></a></p>-->	
<!-- ionauth end-->	
	</div>
    <div class="col-sm-3" style="background-color:lavender;"></div>
  </div>
  