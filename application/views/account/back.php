<?php echo $this->session->flashdata("fail"); ?>
	
		
<div class="colorlib-about">
	<div class="colorlib-narrow-content">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
							<img src="<?= base_url('style/assets/images/img-01.png'); ?>" alt="IMG">
						</div>

								<form class="login100-form validate-form">
								<?php echo form_open('account/loggingIn'); ?>
									<span class="login100-form-title">
						Member Login
					</span>
									<div class="wrap-input100 validate-input">
										<!-- <div class="form-row md-form"> -->
										 <!-- <i class="fa fa-user"></i>
										 <label for="username" class="active">  Username</label> -->
										<input class="input100" id="username" name="username" type="text" placeholder="Username" required><span class="focus-input100"></span>
										<span class="symbol-input100">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										</span>
										<!-- </div> -->
									</div>
									<div class="form-group">
										<!-- <div class="form-row md-form">
										<i class="fa fa-lock"></i>
										<label for="password" class="active">  Nama Depan</label> -->
										<input class="input100" id="password" name="password" type="password" placeholder="Password" required><span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-lock" aria-hidden="true"></i>
										</span>
										<!-- </div> -->
									</div>
									<div class="container-login100-form-btn">
										<button class="login100-form-btn" type="submit">Masuk</button>
									</div>
								</form>
								<br><br>
								<div class="text-center p-t-136">
									<!-- <h4 style="color:white;">Belum punya akun?<a class="d-block mt-3" href="<?php echo base_url('index.php/account/register');?>"><br>Silakan Registrasi</a> </h4> -->
									<a class="txt2" href="#">
										Create your Account
										<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
									</a>
								</div>
							<!-- </div> -->
							</div>
						
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
		<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url();?>style/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>style/vendor/popper/popper.min.js"></script>
	<script src="<?php echo base_url();?>style/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url();?>style/vendor/js/jquery.easing.min.js"></script>
<!-- </body> -->

<!--===============================================================================================-->	
	<script src="<?php echo base_url();?>style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>style/vendor/bootstrap/js/popper.js"></script>
	<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>style/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>style/js/main.js"></script>
