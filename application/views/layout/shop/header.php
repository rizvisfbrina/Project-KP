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
		<link href="<?php echo base_url();?>style/css/grayscale.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>style/css/hover.css" rel="stylesheet">
		<link href="<?php echo base_url();?>style/css/hover.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>style/css/imagehover.css" rel="stylesheet">

		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Merriweather:900" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo base_url();?>style/css/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/linericon/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/owl-carousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/flat-icon/font/flaticon.css">
		<link rel="stylesheet" href="<?php echo base_url();?>style/css/nice-select/nice-select.css">

		<link rel="stylesheet" href="<?php echo base_url();?>style/css/style.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
		
		<script src="<?php echo base_url();?>style/js/grayscale.min.js"></script>
		<script src="<?php echo base_url();?>style/js/wow.min.js"></script>
		<script src="<?php echo base_url();?>style/js/wow.js"></script>

		<script src="<?php echo base_url();?>style/css/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url();?>style/css/owl-carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url();?>style/css/nice-select/jquery.nice-select.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.ajaxchimp.min.js"></script>
		<script src="<?php echo base_url();?>js/mail-script.js"></script>
		<script src="<?php echo base_url();?>js/skrollr.min.js"></script>
		<script src="<?php echo base_url();?>js/main.js"></script>

	
	
        
		<script> 
	        // wait for the DOM to be loaded 
			function addToCart(product_id) {
				var quantity = "#quantity_"+product_id;
				quantity = $(quantity).val();
				// alert(product_id);
				// alert(quantity);
				if (quantity == "") {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Masukkan jumlah!");
						$("#modal_title").html("Warning");
						$("#modal_footer").html("<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>");
				} else if (quantity <= 0 ) {
						$("#alert_modal").modal("show");
						$("#modal_body").html("Jumlah tidak boleh kurang dari 1!");
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


		<script type="text/javascript">

			
 			function collapseNavbar(){
 				if($(".navbar").offset().top>50){
 					$(".fixed-top").addClass("top-nav-collapse");
 				}else{
 					$(".fixed-top").removeClass("top-nav-collapse");
 				}
 			}
 			$(window).scroll(collapseNavbar);
 			$(document).ready(collapseNavbar);			
 			$(function(){
 				$('a.scroll').bind('click',function(event){
 					var $anchor=$(this);
 					$('html, body').stop().animate({
 						scrollTop:$($anchor.attr('href')).offset().top},1500,'easeInOutExpo');
 					event.preventDefault();
 				});});
 			$('.navbar-collapse ul li a').click(function(){
 				$(".navbar-collapse").collapse('hide');});
 			var map=null;
 			google.maps.event.addDomListener(window,'load',init);
 			google.maps.event.addDomListener(window,'resize',function(){
 				map.setCenter(new google.maps.LatLng(40.6700,-73.9400));});
 			function init(){
 				var mapOptions={
 					zoom:15,center:new google.maps.LatLng(40.6700,-73.9400),disableDefaultUI:true,scrollwheel:false,draggable:false,styles:[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}]};var mapElement=document.getElementById('map');map=new google.maps.Map(mapElement,mapOptions);var image='img/map-marker.png';var myLatLng=new google.maps.LatLng(40.6700,-73.9400);var beachMarker=new google.maps.Marker({position:myLatLng,map:map,icon:image});}
		</script>

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	</head>

<body id="page-top" data-spy="scroll" data-target=".fixed-top" style="min-height: 350px; background:linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(<?= base_url('style/assets/images/headline/bg-22.jpg')?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">

		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-expand-lg navbar-dark fixed-top top-nav-collapse" >
			<div class="container">
				<a class="navbar-brand" href="<?= site_url('shop'); ?>">PT PDS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbarResponsive">
					<ul class="nav navbar-nav ml-auto">
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
								<li class="nav-item"><a class="nav-link page-scroll" href="<?php echo base_url()?>index.php/admin"><b>Dashboard Admin</b></a></li>
								<li class="nav-item"><a class="nav-link page-scroll" style="margin-left:5px" data-toggle="modal" data-target="#logout"><!-- <button class="btn btn-danger py-1"></button> -->Logout</a></li>
							<?php elseif ($this->session->userdata('usertype') == "user") : ?>
								<li class="nav-item"><a class="nav-link page-scroll"  href="<?php echo base_url()?>index.php/user/dashboard"><b>Profil</b></a></li>
								<li class="nav-item"><a class="nav-link page-scroll" style="margin-left:5px" data-toggle="modal" data-target="#logout"><!-- <button class="btn btn-danger py-1">Keluar</button> -->Logout</a></li>
							<?php else : ?>
								<a class="nav-link page-scroll" href="<?php echo base_url()?>index.php/Account"><!-- <button class="btn btn-primary py-1"></button> -->Login</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- <header class="intro">
	        <div class="intro-body">
	            <div class="container">
                    <h1 class="brand-heading">maintenance</h1>
                    <a href="#content" class="btn btn-circle page-scroll">
                    	<i class="fa fa-angle-double-down animated"></i>
                	</a>
	            </div>
	        </div>
	    </header>  -->
	   
</body>