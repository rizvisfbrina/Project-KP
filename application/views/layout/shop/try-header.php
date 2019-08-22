<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>PT Pelindo Daya Sejahtera <?= $title; ?></title>
		<link rel="icon" href="<?= base_url('style/assets/images/icon.png'); ?>" type="image/gif">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url();?>style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url();?>style/css/shop.css" rel="stylesheet">

		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Merriweather:900" rel="stylesheet">

		<!-- changed -->
		<link href="style/css/grayscale.min.css" rel="stylesheet">

		<link href="style/css/bootstrap.min.css" rel="stylesheet">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="style/js/grayscale.min.js"></script>


		<script> 
	        // wait for the DOM to be loaded 
			function addToCart(product_id) {
				var quantity = "#quantity_"+product_id;
				quantity = $(quantity).val();
				// alert(product_id);
				// alert(quantity);
				if (quantity == "") {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Please enter the quantity");
						$("#modal_title").html("Warning");
						$("#modal_footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
				} else if (quantity < 0) {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Quantity cannot be less than 0!");
						$("#modal_title").html("Warning");
						$("#modal_footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
				} else {
					$.post("<?= site_url('cart/addToCart'); ?>", {"quantity":quantity, "product_id":product_id},
						function(data) {
							console.log(data);
							$("#alert_modal").modal("show");
							$("#modal_body").html(data.message);
							$("#modal_title").html(data.title);
							if (data.success == true) {
								var footer = "<a href='<?= site_url('user/your_cart');?>'>";
								footer += "<button type='button' class='btn btn-success'>Checkout</button>";
								footer += "</a>";
								footer += "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>";
							} else {
								var footer = "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>";
							}
							$("#modal_footer").html(footer);
						}, 'json'
					)
				}
			}
		</script> 

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		<!-- Navigation --> 
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" >
			<div class="container">
				<div class="navbar-header">
                	<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                	</button> -->
                	<a href="#">
                    	<img src="style/assets/images/icon.png">
               		</a>
            	</div>

			<div class="collapse navbar-collapse navbar-right navbar-main-collapse" >
				<ul class="nav navbar-nav">
					<li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="nav-item <?= $home; ?>">
						<a class="nav-link page-scroll" href="<?= site_url('shop'); ?>"><b>Beranda</b>
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item <?= $about; ?>">
						<a class="nav-link page-scroll" href="<?= site_url('shop/about');?>"><b>Tentang</b></a>
					</li>
					<li class="nav-item <?= $contact; ?>">
						<a class="nav-link page-scroll" href="<?= site_url('shop/contact');?>"><b>Kontak</b></a>
					</li>
					<li class="nav-item">
						<?php 	if ($this->session->userdata('usertype') == "admin") : ?>
							<li class="nav-item">
								<a class="nav-link page-scroll" href="<?php echo base_url()?>index.php/admin"><b>Dashboard Admin</b>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  page-scroll" style="margin-left:5px" data-toggle="modal" data-target="#logout">
									<button class="btn btn-danger py-1">Keluar</button>
								</a>
							</li>s
						<?php elseif ($this->session->userdata('usertype') == "user") : ?>
							<li class="nav-item">
								<a class="nav-link  page-scroll"  href="<?php echo base_url()?>index.php/user/dashboard"><b>Profil</b>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  page-scroll" style="margin-left:5px" data-toggle="modal" data-target="#logout">
									<button class="btn btn-danger py-1">Keluar</button>
								</a>
							</li>
						<?php else : ?>
							<a class="nav-link  page-scroll" href="<?php echo base_url()?>index.php/Account">
								<button class="btn btn-success py-1">Masuk</button>
							</a>
						<?php endif; ?>
					</li>
				</ul>
			</div>
			</div>
		</nav>

	<header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">maintenance</h1>
                    </div>
                </div>
            </div>
        </div>
    </header> 
</body>