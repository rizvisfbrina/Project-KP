<input type="hidden" id="id_user" value="<?php echo $id_user; ?>" />
<input type="hidden" id="id_max" value="<?php echo isset($id_max) ? $id_max : '' ; ?>" />

<?php if($id_user > 0){ ?>
	<?php if($chat->num_rows() > 0){ ?>	
		<?php foreach($chat->result() as $row){ ?>
			<?php if($row->user_1 == $this->session->userdata('id')){ ?>
				<div class="col-md-12">
					<div class="panel panel-default panel-comment pull-right">
						<div class="panel-heading kiri" >
							<b>Anda :</b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small><br/>
							<?php echo $row->pesan; ?>
						</div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="col-md-12">
					<div class="panel panel-default panel-comment" style="background-color: #0D47A1  !important;">
						<div class="panel-heading" >
							<?php $user		= $this->user_model->get_userdetail()->row(); ?>
							<b> <?php echo $user['name']?> : </b><small class="pull-right" style="color:grey;margin-top:0px;"><?php echo date("d-M-Y H:i:s", strtotime($row->created_at)); ?></small></br>
							<?php echo $row->pesan; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php }else{ ?>
	
	<?php } ?>
<?php } else { echo "<h2>Chatt with $name; </h2>"; } ?>