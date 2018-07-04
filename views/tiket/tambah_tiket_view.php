<?php $this->load->view('tiket/header');?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
<div class="container">
<div class="row">
	
<?php  echo form_open('tiket/Create');?>
	<legend> Tambah Data Tiket</legend>

	<?php echo validation_errors(); ?>
	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_tiket">id_tiket</label>
		<div class="col-sm-10">
		<input type="text" name="id_tiket" class="form-control" id="id_tiket" placeholder="id_tiket"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">nama_event</label>
		<div class="col-sm-10">
		<input type="text" name="nama_event" class="form-control" id="nama_event" placeholder="nama_event"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Kategori</label>
		<div class="col-sm-10">
		<input type="text" name="kategori" class="form-control" id="kategori" placeholder="kategori"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">qty</label>
		<div class="col-sm-10">
		<input type="text" name="qty" class="form-control" id="qty" placeholder="qty"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">harga</label>
		<div class="col-sm-10">
		<input type="text" name="harga" class="form-control" id="harga" placeholder="harga"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Availability</label>
		<div class="col-sm-10">
		<input type="text" name="availability" class="form-control" id="availability" placeholder="availability"><br></div></div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div></div>
</div>
</div>
</div>
</form>
<?php $this->load->view('tiket/footer');?>