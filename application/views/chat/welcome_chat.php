<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chatting Area</title>
	<link rel="icon" href="<?= base_url('style/assets/images/icon.png'); ?>" type="image/gif">
	<link rel="stylesheet" href="<?php echo base_url() ?>style/assets2/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<style>
	.blue {
		background-color: #2196F3 !important;
	}
	
	.blue.darken-1 {
		background-color: #1E88E5 !important;
	}

	.blue-text.text-darken-1 {
		color: #1E88E5 !important;
	}

	.blue.darken-2 {
		background-color: #1976D2 !important;
	}

	.blue-text.text-darken-2 {
		color: #1976D2 !important;
	}

	.blue.darken-3 {
		background-color: #1565C0 !important;
	}

	.blue-text.text-darken-3 {
		color: #1565C0 !important;
	}

	.blue.darken-4 {
		background-color: #0D47A1 !important;
	}

	.blue-text.text-darken-4 {
		color: #0D47A1 !important;
	}
	
	.blue.accent-1 {
	  background-color: #82B1FF !important;
	}

	.blue-text.text-accent-1 {
	  color: #82B1FF !important;
	}

	.blue.accent-2 {
	  background-color: #448AFF !important;
	}

	.blue-text.text-accent-2 {
	  color: #448AFF !important;
	}

	.blue.accent-3 {
	  background-color: #2979FF !important;
	}

	.blue-text.text-accent-3 {
	  color: #2979FF !important;
	}

	.blue.accent-4 {
	  background-color: #2962FF !important;
	  color:white;
	}

	.blue-text.text-accent-4 {
	  color: #2962FF !important;
	}
	
	//comment panel
	.thumbnail {
		padding:0px;
	}
	.panel-comment {
		position:relative;width:45%;
	}
	
	.panel-comment > .panel-heading{
		background-color:#E6E2E2 !important;
	}
	.panel-comment>.panel-heading:after,.panel>.panel-heading:before{
		position:absolute;
		top:11px;left:-16px;
		right:100%;
		width:0;
		height:0;
		display:block;
		content:" ";
		border-color:transparent;
		border-style:solid solid outset;
		pointer-events:none;
	}
	
	.panel-comment>.panel-heading:after{
		border-width:7px;
		border-right-color:#E6E2E2;
		margin-top:1px;
		margin-left:2px;
	}
	.panel-comment>.panel-heading:before{
		border-right-color:#ddd;
		border-width:8px;
	}

</style>
<body style="font-family: 'Ubuntu', sans-serif;">
<nav class="navbar navbar-default blue darken-4 navbar-fixed">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#" style="color:white"><b>Silakan tanya</b></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<!-- <li><a style="color:white" >Selamat datang <?php echo $this->session->userdata('name')?></a></li> -->
			<li><a href="<?php echo site_url('account/logout')?>" style="color:white" > <i class="fa fa-sign-out"></i></a></li>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
				<li class="list-group-item blue darken-4 " style="color:white;font-weight:bold"><i class="fa fa-users"></i> Chat List</li>
				<?php foreach($user->result() as $row){ ?>
					<a href="javascript:void(0)" style="text-decoration:none" onClick="getChatAll('<?php echo $row->id_user; ?>','0')"><li class="list-group-item " onclick="aktifkan('<?php echo $row->id_user  ?>')" id="aktif-<?php echo $row->id_user ?>" id="<?php echo $row->id_user; ?>" id="user" ><i class="fa fa-angle-right"></i> <?php echo $row->username; ?></li></a>
				<?php } ?>
			</ul>
		</div>
		<div class="col-md-9">
			<div class="panel panel-info">
				<div class="panel-heading  blue darken-4" style="color:white;font-weight:bold" ><i class="fa fa-comments"></i> Chat Box</div>
				<div class="panel-body" style="height:400px;overflow-y:auto" id="box">
					<div id="chat-box">
						<div class='panel-body'><h2 style='text-align:center;color:grey'>Click User on Chat List to Start Chat</h2></div>
						<!--br/>
						<div id="loading" style="display:none"><center><i class="fa fa-spinner fa-spin"></i> Loading...</center></div>
						</br !-->
					</div>
				</div>
				<div class="panel-footer" style="display:none">
					<div class="row">
						<div class="col-md-12">
							<textarea class="form-control " id="pesan" style="margin-right:10px;"></textarea>
							<button id="send" type="button" class="btn btn-primary pull-right" style="margin-top:10px;"  onClick="sendMessage()" ><i class="fa fa-send"></i> Send Message</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>style/assets2/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>style/assets2/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	//getChat(0);
	$("#user").click(function(){
		$("#id_max").val('0');
	});
	
	setInterval(function(){ 
		if($("#id_user").val() > 0){
			getLastId($("#id_user").val(),$("#id_max").val()); 
			getChat($("#id_user").val(),$("#id_max").val()); 
			autoScroll();
		}else{
			
		}
	},3000);
});

function getChatAll(id_user,id_max){
	
	$.ajax({
		url		: "<?php echo site_url('chat/getChatAll') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			$("#chat-box").html(result);
			$(".panel-footer").show();
			
			autoScroll();
			document.getElementById('pesan').focus();
		}
	});
}

function getChat(id_user,id_max){
	
	$.ajax({
		url		: "<?php echo site_url('chat/getChat') ?>",
		type	: 'POST',
		dataType: 'html',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			$("#loading").show();
		},
		success	: function(result){
			$("#loading").hide();
			if(id_user != $("#id_user").val() ){
				$("#chat-box").html(result);
			}else{
				$("#chat-box").append(result);
			}
			$(".panel-footer").show();
			document.getElementById('pesan').focus();
		}
	});
}

function getLastId(id_user,id_max){
	$.ajax({
		url		: "<?php echo site_url('chat/getLastId') ?>",
		type	: 'POST',
		dataType: 'json',
		data 	: {id_user:id_user,id_max:id_max},
		beforeSend	: function(){
			
		},
		success	: function(result){
			$("#id_max").val(result.id);
		}
	});
}

function sendMessage(){
	var pesan 	= $("#pesan").val();
	var id_user = $("#id_user").val();
	
	if(pesan == ''){
		document.getElementById('pesan').focus();
	}else{
		$.ajax({
			url		: "<?php echo site_url('chat/sendMessage') ?>",
			type	: 'POST',
			dataType: 'json',
			data 	: {id_user:id_user,pesan:pesan},
			beforeSend	: function(){
			},
			success	: function(result){
				getChat($("#id_user").val(),$("#id_max").val());
				getLastId($("#id_user").val(),$("#id_max").val()); 
				$("#pesan").val('');
				autoScroll();
			}
		});
	}
}

function autoScroll(){
	var elem = document.getElementById('box');
	elem.scrollTop = elem.scrollHeight;
}

function aktifkan(i){
	$("li").removeClass("active");
	$("#aktif-"+i).addClass("active");
}
</script>

</body>
</html>