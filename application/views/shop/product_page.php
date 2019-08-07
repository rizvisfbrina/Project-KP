		<!-- Page Content -->
		<div class="container">

			<?= $this->session->flashdata('msg');?>
			
			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						<div class="col-lg-4 ">
							<div class="card-img-top img-fluid my-5">
								<img class="img-responsive" src="<?= base_url($product->image_link); ?>" alt="" >
							</div>
						</div>
						<!-- /.col-lg-3 -->

						<div class="col-lg-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Service</span>
								<h2 class="colorlib-heading"><?= $product->product_name; ?></h2>
								<div class="colorlib-text"><p align="justify"><?= $product->description;?> </p></div>
							</div>	
							<!-- <div class="card mt-4"> -->
								<!-- <div class="card-body">			 -->


<!-- 
										<div class="col-sm-4">
											<input type="text" name="inputPrice" class="form-control" placeholder="Masukkan Harga" id="iPrice" />
											<input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/>
										<br>
											<button class="pull-right btn btn-block btn-primary" type="button" onclick=""><span class="fa fa-paper-plane pull-left"></span>
											Checkout</button>
											<br>
											<button class="btn btn-primary waves-effect" type="button" onclick=""><span class="fa fa-paper-plane pull-right"></span>
													Checkout</button>
										</div>
										<div class="col-sm-4">
											<form>
												<h5 class="card-title">Rentang</h5>
													<select name="price">
														<option value="satu">ini namanya rentang harga</option>
														<option value="dua">Dua</option>
														<option value="tiga">Tiga</option>
														<option value="empat">Empat</option>
														<option value="lima">Lima</option>
													</select>
													<br>
											</form>
										</div> -->
									
									<!-- <br><br> -->
			
								<!-- </div> -->
							<!-- </div> -->
						

						</div>

						
					<!-- /.col-lg-9 -->
					</div>
					<div class="card-body">
						<h2 class="colorlib-heading">Rincian Harga</h2>
						<img class="img-responsive" src="<?= base_url($product->image_detail); ?>" alt="" width="900" height="900">
					</div>
					<br><br>

					<div class="row">
						<div class="col-sm-2 col-md-offset-3" align="center">
							<input type="number" name="quantity" class="form-control" placeholder="Jumlah" id="quantity_<?= $product->product_id; ?>" />
							<input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/>
							<br>
							<button class="pull-right btn btn-primary waves-effect btn-md" type="button" onclick="addToCart(<?= $product->product_id; ?>)">
								<div class="colorlib-icon">
									<i class="icon-shopping-cart"></i>
								</div>
							</button>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container -->
<div id="get-in-touch" class="colorlib-bg-color">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
				<h2>Ingin bernegosiasi?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<p class="colorlib-lead">Apabila ingin negosiasi silahkan hubungi kami</p>
				<p><a href="<?= site_url('chat'); ?>" class="btn btn-primary btn-learn">Chat</a></p>
			</div>
		</div>
	</div>
</div>