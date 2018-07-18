<?php $this->load->view('tiket/header');?>

<div class="container">
<div class="row">

<?php echo form_open('tiket/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data tiket</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_tiket">id_tiket :</label>
		<div class="col-sm-10">
		<input type="text" name="id_tiket" class="form-control" id="id_tiket" value="<?php echo $tiket[0]->id_tiket?>" placeholder="id_tiket"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_event">nama_event :</label>
		<div class="col-sm-10">
		<input type="text" name="nama_event" class="form-control" id="nama_event" value="<?php echo $tiket[0]->nama_event?>" placeholder="nama_event"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="kategori">kategori :</label>
		<div class="col-sm-10">
		<input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $tiket[0]->kategori?>" placeholder="kategori"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">qty :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $tiket[0]->qty?>" type="text" placeholder="qty" name="qty" placeholder="qty"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="harga">harga :</label>
		<div class="col-sm-10">
		<input type="text" name="harga" class="form-control" id="harga" value="<?php echo $tiket[0]->harga?>" placeholder="harga"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="availability">availability :</label>
		<div class="col-sm-10">
		<input type="text" name="availability" class="form-control" id="availability" value="<?php echo $tiket[0]->availability?>" placeholder="availability"><br>
		</div>
	</div>

	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('tiket/footer');?>
