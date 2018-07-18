<?php $this->load->view('user/header');?>

<div class="container">
<div class="row">

<?php echo form_open('user/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data User</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_user">ID User :</label>
		<div class="col-sm-10">
		<input type="text" name="id_user" class="form-control" readonly id="id_user" value="<?php echo $user[0]->id_user?>" placeholder="id_user"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_user">nama user :</label>
		<div class="col-sm-10">
		<input type="text" name="nama_user" class="form-control" id="nama_user" value="<?php echo $user[0]->nama_user?>" placeholder="nama_user"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_user">Jenis Kelamin :</label>
		<div class="col-sm-10">
		<input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo $user[0]->jenis_kelamin?>" placeholder="jenis_kelamin"><br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">Email :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $user[0]->email?>" type="text" placeholder="email" name="email" placeholder="email"><br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">Alamat :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $user[0]->alamat?>" type="text" placeholder="email" name="alamat" placeholder="email"><br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-sm-2">No Telp :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $user[0]->no_telp?>" type="text" placeholder="email" name="no_telp" placeholder="email"><br>
		</div>
	</div>

	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('user/footer');?>
