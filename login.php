<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
	<body>		
		<div class="container">
			<div class="col-4 offset-4">
					<?php echo form_open(base_url().'login/check_login'); ?>
						<h2 class="text-center">Login</h2>       
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required" name="username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required" name="password">
							</div>
							<div class="form-group">
							<?php echo $error; ?>
							</div>
							
							<div class="form-group">
								<input type="captcha" class="form-control" placeholder="Captcha" required="required" name="captcha">
							</div>
							<div class="form-group">
								<?php echo $captcha ;?>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Log in</button>
							</div>
							<div class="clearfix">
								<label class="float-left form-check-label"><input type="checkbox" name="remember"> Remember me</label>
								<a href="<?php echo base_url();?>login/find_password" class="float-right">Forgot Password?</a>
								<br>
								<a href="<?php echo base_url();?>login/without" class="float-right">Without Signin</a>
							</div>   
					<?php echo form_close(); ?>
			</div>
		</div>
	</body>
</html>

