<body style="min-height: 350px; background:linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(<?= base_url('style/assets/images/headline/bg-22.jpg')?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
	<div class="container">
		<?php echo $this->session->flashdata("fail"); ?>
		<h1  class="text-center mt-5" style="color:white">Sign In</h1>
		<div class="card card-login mx-auto mt-2">
			<div class="card-body">
				<?php echo form_open('account/loggingIn'); ?>
					<div class="form-group">
						<input class="form-control" id="username" name="username" type="text" placeholder="Username" required>
					</div>
					<div class="form-group">
						<input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox">Ingat saya</label>
						</div>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Masuk</button>
				</form>
				<div class="text-center">
					<a class="d-block small mt-3" href="<?php echo base_url('index.php/account/register');?>">Belum punya akun? Buat Akun disini</a>
					<a class="d-block small mt-3" href="<?php echo base_url('index.php/shop/index');?>">Kembali ke Home</a>
					<!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
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
</body>
