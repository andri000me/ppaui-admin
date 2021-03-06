<!DOCTYPE html>
<html>
  <head>
    <title>DATABASE PELATIHAN PPA FEB UI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
     <style>
		.btn-file {
		    position: relative;
		    overflow: hidden;
		}
		.btn-file input[type=file] {
		    position: absolute;
		    top: 0;
		    right: 0;
		    min-width: 100%;
		    min-height: 100%;
		    font-size: 999px;
		    text-align: right;
		    filter: alpha(opacity=0);
		    opacity: 0;
		    background: red;
		    cursor: inherit;
		    display: block;
		}
		input[readonly] {
			background-color: white; !important;
			cursor: text !important;
		}
	body {
		background-size: 100%;
		background-image: url(<?php echo base_url()?>assets/images/background.jpg);
	}
</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
  <body>
      <div class="container">
          <div class="col-md-3"></div>
          <div class="col-md-5">
              <?php
              echo form_open('auth/login');
              ?>
			<br><br><br><br><br>	  
              <table class="table">
              <tr>
                <td width="160" rowspan="6" align="center"><img src="<?php echo base_url()?>assets/images/PPALOGO.png" width="100" height="160"></td>
                <td width="61">Email</td><td width="252"> <div class="input-group">
					<?php echo form_input($identity);?>
                  <span class="input-group-addon"><i class="fa fa-user"></i></span></div></td></tr>
              
			  <tr>
                <td>Password</td><td> <div class="input-group">
                    <?php echo form_input($password);?>
					<span class="input-group-addon"><i class="fa fa-keyboard-o"></i></span>
				</div></td></tr>
				
              <!-- <td colspan="2"><?php #echo lang('login_remember_label', 'remember');?>
					<?php #echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> </td>-->
	
			  <tr></tr>
              <tr>
                <td colspan="2"><div align="center">
                  <input type="submit" name="submit" value="Login" class="btn btn-danger">
                </div></td></tr>
				
				<?php echo form_close();?>

			<td colspan="2"><div align="center"><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | 
			<a href="forgot_password"><?php echo lang('login_forgot_password');?></a></div></td>
			
          </table>   
          </div>               
      </div>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/1.8.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/icons.jpg">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/themes/base/jquery.ui.all.css">
	<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.datepicker.js"></script>
	
        	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true,
				yearRange : '-50:+15'
                });

                $( "#datepicker1" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true,
				yearRange : '-50:+15'
                });

                $( "#datepicker2" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true,
				yearRange : '-50:+15'
                });
	});
	</script>
  </body>
</html>