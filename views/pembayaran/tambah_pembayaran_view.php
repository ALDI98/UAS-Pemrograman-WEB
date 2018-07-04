<?php $this->load->view('pembayaran/header');?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
<div class="container">
<div class="row">
	
<?php  echo form_open('pembayaran/Create');?>
	<legend> Tambah Data Pembayaran</legend>

	<?php echo validation_errors(); ?>
	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_bayar">id_bayar</label>
		<div class="col-sm-10">
		<input type="text" name="id_bayar" class="form-control" id="id_bayar" placeholder="id_bayar"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">id_user</label>
		<div class="col-sm-10">
		<input type="text" name="id_user" class="form-control" id="id_user" placeholder="id_user"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">id_event</label>
		<div class="col-sm-10">
		<input type="text" name="id_event" class="form-control" id="id_event" placeholder="id_event"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">id_tiket</label>
		<div class="col-sm-10">
		<input type="text" name="id_tiket" class="form-control" id="id_tiket" placeholder="id_tiket"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">jumlah_beli</label>
		<div class="col-sm-10">
		<input type="text" name="jumlah_beli" class="form-control" id="jumlah_beli" placeholder="jumlah_beli"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">total_harga</label>
		<div class="col-sm-10">
		<input type="text" name="total_harga" class="form-control" id="total_harga" placeholder="total_harga"><br></div></div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div></div>
</div>
</div>
</div>
</form>
<?php $this->load->view('pembayaran/footer');?>