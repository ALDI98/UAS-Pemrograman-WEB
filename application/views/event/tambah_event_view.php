<?php $this->load->view('event/header');?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
<div class="container">
<div class="row">
	
<?php  echo form_open('event/Create');?>
	<legend> Tambah Data event</legend>

	<?php echo validation_errors(); ?>
	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_event">id_event</label>
		<div class="col-sm-10">
		<input type="text" name="id_event" class="form-control" id="id_event" placeholder="id_event"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">id_tiket</label>
		<div class="col-sm-10">
		<input type="text" name="id_tiket" class="form-control" id="id_tiket" placeholder="id_tiket"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">nama_event</label>
		<div class="col-sm-10">
		<input type="text" name="nama_event" class="form-control" id="nama_event" placeholder="nama_event"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">tanggal_event</label>
		<div class="col-sm-10">
		<input type="date" name="tanggal_event" class="form-control" id="tanggal_event" placeholder=""><br>
	</div></div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="">tempat_event</label>
		<div class="col-sm-10">
		<input type="text" name="tempat_event" class="form-control" id="tempat_event" placeholder="tempat_event"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">waktu_event</label>
		<div class="col-sm-10">
		<input type="text" name="waktu_event" class="form-control" id="waktu_event" placeholder="waktu_event"><br></div></div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div></div>
</div>
</div>
</div>
</form>
<?php $this->load->view('event/footer');?>