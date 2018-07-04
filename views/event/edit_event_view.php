<?php $this->load->view('event/header');?>

<div class="container">
<div class="row">

<?php echo form_open('event/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data event</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_event">id_event :</label>
		<div class="col-sm-10">
		<input type="text" name="id_event" class="form-control" id="id_event" value="<?php echo $event[0]->id_event?>" placeholder="id_event"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="id_tiket">id_tiket :</label>
		<div class="col-sm-10">
		<input type="text" name="id_tiket" class="form-control" id="id_tiket" value="<?php echo $event[0]->id_tiket?>" placeholder="id_tiket"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_event">nama_event :</label>
		<div class="col-sm-10">
		<input type="text" name="nama_event" class="form-control" id="nama_event" value="<?php echo $event[0]->nama_event?>" placeholder="nama_event"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">tanggal_event :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $event[0]->tanggal_event?>" type="text" placeholder="yyyy-mm-dd" name="tanggal_event" placeholder=""><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="tempat_event">tempat_event :</label>
		<div class="col-sm-10">
		<input type="text" name="tempat_event" class="form-control" id="tempat_event" value="<?php echo $event[0]->tempat_event?>" placeholder="tempat_event"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="waktu_event">waktu_event :</label>
		<div class="col-sm-10">
		<input type="text" name="waktu_event" class="form-control" id="waktu_event" value="<?php echo $event[0]->waktu_event?>" placeholder="waktu_event"><br>
		</div>
	</div>

	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('event/footer');?>
