		<!-- Page Content -->
		<div class="container">

			<?= $this->session->flashdata('msg');?>
			<div class="row">
				<div class="col-lg-4">
					<img class="card-img-top img-fluid my-5" src="<?= base_url($product->image_link); ?>" alt="" >
				</div>
				<!-- /.col-lg-3 -->

				<div class="col-lg-8">
					<div class="card mt-4">
						<div class="card-body">
							<h5 class="card-title"><strong><?= $product->product_name; ?></strong></h5>
							<p class="card-text"><?= $product->description;?></p>
							<!-- <h4>Rp <?= $product->price?></h4> -->
							<!-- <strong>Deskripsi</strong> -->
							<!-- <p class="card-text"><?= $product->short_desc?></p> -->
							<!-- <input type="number" name="quantity" class="form-control" placeholder="Jumlah" id="quantity_<?= $product->product_id; ?>" />
							<input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/>
							<br>
							<button class="pull-right btn btn-block btn-primary" type="button" onclick="addToCart(<?= $product->product_id; ?>)">
								<span class="fa fa-shopping-cart pull-left"></span>
								Tambah ke keranjang 		
							</button> -->
							<!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
							4.0 stars -->
						</div>
					</div>
					<div class="card mt-4">
						<div class="card-body">
							<div class="card-title"><h4>blablabla</h4></div>
							<!-- <p class="card-text"><?= $product->description;?></p> -->
							<!-- <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
							4.0 stars -->
							<div class="row">
								<div class="col-sm-4">
									<input type="number" name="quantity" class="form-control" placeholder="Jumlah" id="quantity_<?= $product->product_id; ?>" />
									<input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/>
									<br>
									<button class="pull-right btn btn-block btn-primary" type="button" onclick="addToCart(<?= $product->product_id; ?>)"><span class="fa fa-shopping-cart pull-left"></span>
										Tambahkan</button>
								</div>
								<div class="col-sm-4">
									<input type="text" name="inputPrice" class="form-control" placeholder="Masukkan Harga" id="iPrice" />
									<!-- <input type="hidden" name="product_id" class="form-control" value="<?= $product->product_id; ?>"/> -->
								<!-- <br> -->
									<!-- <button class="pull-right btn btn-block btn-primary" type="button" onclick=""><span class="fa fa-paper-plane pull-left"></span>
									Checkout</button> --><br>
								</div>
								<div class="col-sm-4">
									<form>
										<!-- <h5 class="card-title">Rentang</h5> -->
											<select name="price">
												<option value="satu">ini namanya rentang harga</option>
												<option value="dua">Dua</option>
												<option value="tiga">Tiga</option>
												<option value="empat">Empat</option>
												<option value="lima">Lima</option>
											</select>
											<br>
											<!-- <button class="btn btn-primary">Submit</button> -->
											<!-- <button class="pull-right btn btn-block btn-primary" type="button" onclick="addToCart(<?= $product->product_id; ?>)"><span class="fa fa-shopping-cart pull-left"></span>Tambah ke keranjang</button> -->
									</form>
								</div>
							</div>
							<br><br>
							<button class="pull-right btn btn-block btn-primary" type="button" onclick=""><span class="fa fa-paper-plane pull-right"></span>
									Checkout</button>
						</div>
					</div>

				

				</div>
				<!-- /.col-lg-9 -->

			</div>

		</div>
		<!-- /.container -->
