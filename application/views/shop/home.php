
<!-- Page Content -->
<!-- <div class="container"> -->
	<?php echo $this->session->flashdata("success"); ?>
	<div id="alert_message"></div>
	<!-- <div class="row"> -->
		<div class="col-lg-3">
			<!-- <h3 class="my-4">Kategori</h3> -->
			<!-- <br> -->
			<ul class="list-group">
				<?php foreach( $categoryData as $category ): ?>
					<li class="list-group-item">
						<a data-toggle="collapse" href="#<?= $category->category_id; ?>SubListGroup">
							<div>
								<?= $category->category_name; ?>
								<?php if(count($category->subCategory) != 0): ?>
									<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
								<?php endif; ?>
							</div>
						</a>
						<div id="<?= $category->category_id; ?>SubListGroup" class="panel-collapse collapse">
							<ul class="list-unstyled">
								<?php 
									foreach( $category->subCategory as $subCat ): 
								?>
									<li class="list-group-item" style="border: none;">
										<div>
											<a href="#<?= $subCat->category_id; ?>" onclick="selectCategory(<?= $subCat->category_id; ?>, '<?= $subCat->category_name; ?>')">
												<?= $subCat->category_name; ?>
											</a>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</li>

				<?php endforeach; ?>
			</ul>
		
			<!-- <div class="col-lg-12"> -->
				<div id="search-bar" class=" mt-4 mb-2">
					<div class="input-group">
						<input type="text" name="search" id="search" class="form-control" placeholder="Pencarian..."/>
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
								<i class="icon-search3"></i>
							</button>
						</span>
					</div>
				</div>
			<!-- </div> -->
			
		</div>
		<!-- /.col-lg-3 -->

		<div class="col-lg-9">
			<div  id="content">
				<!-- <?= form_open(); ?> -->
				<!-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block img-fluid" src="<?= base_url('style/assets/images/headline/bg-11.jpg')?>" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="<?= base_url('style/assets/images/headline/bg-44.jpg')?>" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="<?= base_url('style/assets/images/headline/bg-55.jpg')?>"alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div> -->
				<!-- <?= form_close(); ?> -->
				

					<div class="row" id="content">
						<!-- <div class="colorlib-work"> -->
							<div class="colorlib-narrow-content">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
										<span class="heading-meta">Services</span>
										<h2 class="colorlib-heading animate-box">Service and Solution</h2>
									</div>
								</div>
								<div class="row">
								<?php $counter = 0;?>
								<?php foreach($sixProducts as $product): ?>
									<?php $counter = $counter + 1;?>
									<div <?php 
											if($counter%3 == 0){ 
												echo 'class="col-md-6 animate-box" data-animate-effect="fadeInLeft"';
											}
											else{
												echo 'class="col-md-5 animate-box" data-animate-effect="fadeInLeft"';
											}?>>
										<div class="project" style="background-image: url(<?= base_url($product->image_link)?>);">
											<div class="desc">
												<div class="con">
													<h3>
														<a href="<?= base_url(); ?>index.php/Shop/product/<?= $product->product_id; ?>"><?= $product->product_name; ?></a>
													</h3>
													<span><?= $product->short_desc?></span>
													<!-- <p class="icon">
														<span><a href="<?= base_url(); ?>index.php/Shop/product/<?= $product->product_id; ?>"><i class="icon-eye"></i>Detail</a></span>
														<span><a href="#"><i class="icon-heart"></i> 49</a></span>
													</p> -->
													<br>
													<div>
														<input placeholder="Jumlah" type="number" name="quantity" class="form-control"  id="quantity_<?= $product->product_id; ?>" />
														<input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/>
													</div>
													<br>
													<button class="pull-right btn btn-primary waves-effect" type="button" onclick="addToCart(<?= $product->product_id; ?>)">Tambahkan</button>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
								</div>
							</div>
						<!-- </div> -->
					</div>
				<!-- /.row -->
			<!-- <?= $link; ?> -->
			</div>
		</div>
		<!-- /.col-lg-9 /#content -->

	<!-- </div> -->
	<!-- /.row -->
	<?= $link; ?>

<!-- </div> -->
<!-- /.container -->

<div id="get-in-touch" class="colorlib-bg-color">
	<div class="colorlib-narrow-content">
		<div class="row">
			<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
				<h2>Get in Touch!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
				<p class="colorlib-lead">Kami ingin mendengar pendapat Anda.</p>
				<p><a href="<?= site_url('shop/contact'); ?>" class="btn btn-primary btn-learn">Hubungi Kami!</a></p>
			</div>
		</div>
	</div>
</div>