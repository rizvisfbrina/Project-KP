
	<div class="modal fade" id="alert_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_title">></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modal_body">
				<p>Modal body text goes here.</p>
			</div>
			<div class="modal-footer" id="modal_footer">
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
			</div>
		</div>
	</div>

	
		<!-- Footer -->
		<footer class="py-1 mt-1" style="background-color: transparent; ">
			<div class="container">
				<p class="m-0 text-center text-white" style="font-size: 10pt;"> &copy; PT Pelindo Daya Sejahtera 2019</p><br>
				   <div class="inline-ul text-center">
                            <a class="p-2 m-2 tw-ic white-text" href="">
                              <i class="fa fa-twitter "></i>
                            </a>
                            <a class="p-2 m-2 li-ic white-text" href="">
                              <i class="fa fa-facebook "> </i>
                            </a>
                            <a class="p-2 m-2 ins-ic white-text" href="">
                              <i class="fa fa-instagram "> </i>
                            </a>
                          </div>
				<button onclick="topFunction()" id="myBtn" title="Go to top" >  ˄  
				</button>
			</div>
			<!-- /.container -->
		</footer>

		<?php include ('logout.php') ?>

		<!-- Bootstrap core JavaScript -->
		<script src="<?php echo base_url();?>style/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url();?>style/vendor/popper/popper.min.js"></script>
		<script src="<?php echo base_url();?>style/js/shop.js"></script>
		<script src="<?php echo base_url();?>style/vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<script type="text/javascript">

			function selectCategory(categoryID, categoryName) {
				$.get("<?= site_url('Product/selectProductCategory')?>", { 'categoryID' : categoryID }, function(data){

					console.log(data);
					var string = "<h4 style='color: white;'><br>Hasil pencarian \""+categoryName+"\"...</h4>";
					string += "<div class='row'>";
					for(var i = 0; i < data.length; i++) {
						string += "<div class='col-lg-6'>"
							+ "<div class='tour-card'>"
								+ "<a href='<?= base_url(); ?>index.php/Shop/product/"+data[i]['product_id']+"'>"
									+ "<img class='card-img rounded-0' src='<?= base_url();?>/"+data[i]['image_link']+"' alt='' height='300px'>"
									+ "<div class='tour-card-overlay hvr-overline-from-center'>" + "<div class='media'>" + "<div class='row'>" + "<div class='col-sm-8'>" + "<h5 class='media-body'>"
									+ "<a href='<?= base_url(); ?>index.php/Shop/product/"+data[i]['product_id']+"'>"+data[i]['product_name']+"</a>"
									+ "</h5>" + "</div>"
									+ "<div class='col-sm-8'>"
									+ "<input type='number' name='quantity' class='form-control' placeholder='Jumlah' id='quantity_"+data[i]['product_id']+"' />"
									+ "<input type='hidden' name='product_id' class='form-control' value='"+data[i]['product_id']+"'/>" + "<button style='background-color: #116185; color: white' class='pull-right btn btn-outline-primary waves-effect' type='button' onclick='addToCart("+data[i]['product_id']+")'>"
										+ "<span class='fa fa-shopping-cart pull-left'></span>"
										+ "Tambahkan" 		
									+ "</button>"
									+ "</div>"
									+ "</div>"
									+ "</div>" 
									+ "</div>"
									+ "</div>"
									+ "</div>";
								}
					string += "</div>";
					$("#content").html(string);
					}, 'json');
				}
							
							$(document).ready(function(){
								$("#search").keyup(function() {
									var search = $("#search").val();
									$.get("<?php echo base_url(); ?>index.php/Product/searchActiveProduct", { 'search' : search }, function(data) {
										var string = "<h4 style='color: white;'><br>Hasil pencarian "+search+"...</h4>";
										string += "<div class='row'>";
										for(var i = 0; i < data.length; i++) {
											string += "<div class='col-lg-6'>"
											+ "<div class='tour-card'>"
												+ "<a href='<?= base_url(); ?>index.php/Shop/product/"+data[i]['product_id']+"'>"
													+ "<img class='card-img rounded-0' src='<?= base_url();?>/"+data[i]['image_link']+"' alt='' height='300px'>"
													+ "<div class='tour-card-overlay hvr-overline-from-center'>" + "<div class='media'>" + "<div class='row'>" + "<div class='col-sm-8'>"
													+ "<h5 class='media-body'>"
													+ "<a href='<?= base_url(); ?>index.php/Shop/product/"+data[i]['product_id']+"'>"+data[i]['product_name']+"</a>"
													+ "</h5>"
													+ "</div>" + "<div class='col-sm-8'>"
													+ "<input type='number' name='quantity' class='form-control' placeholder='Jumlah' id='quantity_"+data[i]['product_id']+"' />"
													+ "<input type='hidden' name='product_id' class='form-control' value='"+data[i]['product_id']+"'/>" + "<button style='background-color: #116185; color: white' class='pull-right btn btn-outline-primary waves-effect' type='button' onclick='addToCart("+data[i]['product_id']+")'>"
														+ "<span class='fa fa-shopping-cart pull-left'></span>"
														+ "Tambahkan" 		
													+ "</button>"
													+ "</div>"
													+ "</div>"
													+ "</div>"
													+ "</div>"
													+ "</div>"
													+ "</div>";
												}
						string += "</div>";
							$("#content").html(string);
					}, 'json');
				});
			});
		</script>

		<script type="text/javascript">
	//set timer for alert messages
		window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

	<script>
	// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    document.getElementById("myBtn").style.display = "block";
		  } else {
		    document.getElementById("myBtn").style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
		</script>

		
	</body>

</html>
