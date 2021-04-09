<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<h1>Leisure Time</h1>
				<img src="Skin/img/img-01.png" alt="IMG">
			</div>
			<form id="loginForm" class="login100-form validate-form" method="post" enctype="multipart/form-data" action="<?php echo $this->getUrl()->getUrl('validate','login'); ?>">
				<span class="login100-form-title">
					Member Login
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="user[email]" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="user[password]" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="button" name="submit" onclick="leisure.setForm('loginForm').load()">
						Login
					</button>
				</div>

				<div class="text-center p-t-12">
					<a class="txt2" href="#">
						Forgot Password?
					</a>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('registerForm'); ?>').load();">
						Create your Account
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
