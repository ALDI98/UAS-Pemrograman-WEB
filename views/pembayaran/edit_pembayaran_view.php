<?php $this->load->view('pembayaran/header');?>

<div class="container">
<div class="row">

<?php echo form_open('pembayaran/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data Pembayaran</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_bayar">id bayar :</label>
		<div class="col-sm-10">
		<input type="text" name="id_bayar" readonly class="form-control" id="id_bayar" value="<?php echo $pembayaran[0]->id_bayar?>" placeholder="id_bayar"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="id_user">id user :</label>
		<div class="col-sm-10">
		<input type="text" name="id_user" readonly class="form-control" id="id_user" value="<?php echo $pembayaran[0]->id_user?>" placeholder="id_user"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="id_event">ID Event :</label>
		<div class="col-sm-10">
		<input type="text" name="id_event" readonly class="form-control" id="id_event" value="<?php echo $pembayaran[0]->id_event?>" placeholder="id_event"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">ID Tiket:</label>
		<div class="col-sm-10">
		<input class="form-control" readonly value="<?php echo $pembayaran[0]->id_tiket?>" type="text" placeholder="id_tiket" name="id_tiket" placeholder="id_tiket"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="jumlah_beli">Jumlah Beli :</label>
		<div class="col-sm-10">
		<input type="text" name="jumlah_beli" class="form-control" id="jumlah_beli" value="<?php echo $pembayaran[0]->jumlah_beli?>" placeholder="jumlah_beli"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="total_harga">Total Harga :</label>
		<div class="col-sm-10">
		<input type="text" name="total_harga" class="form-control" id="total_harga" value="<?php echo $pembayaran[0]->total_harga?>" placeholder="total_harga"><br>
		</div>
	</div>

	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('pembayaran/footer');?>
