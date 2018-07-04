<?php $this->load->view('admin/header');?>

<div class="container">
<div class="row">

<?php echo form_open('admin/update/'.$this->uri->segment(3)); ?>
<legend> Edit Data Admin</legend>
<!--  	<?php //var_dump($event); ?>--> 	
	<?php echo validation_errors(); ?>

	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_admin">ID admin :</label>
		<div class="col-sm-10">
		<input type="text" name="id_admin" class="form-control" id="id_admin" value="<?php echo $admin[0]->id_admin?>" placeholder="id_admin"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="nama_admin">nama admin :</label>
		<div class="col-sm-10">
		<input type="text" name="nama_admin" class="form-control" id="nama_admin" value="<?php echo $admin[0]->nama_admin?>" placeholder="nama_admin"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="username">Username :</label>
		<div class="col-sm-10">
		<input type="text" name="username" class="form-control" id="username" value="<?php echo $username[0]->username?>" placeholder="username"><br>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Passsword :</label>
		<div class="col-sm-10">
		<input class="form-control" value="<?php echo $password[0]->password?>" type="text" placeholder="password" name="password" placeholder="password"><br>
		</div>
	</div>

	<div class="form-group">
	<div class="col-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
	</div>

</form></div></div>
<?php $this->load->view('admin/footer');?>
