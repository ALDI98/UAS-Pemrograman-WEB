<?php $this->load->view('admin/header');?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
<div class="container">
<div class="row">
	
<?php  echo form_open('admin/Create');?>
	<legend> Tambah Data Admin</legend>

	<?php echo validation_errors(); ?>
	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_admin">ID admin</label>
		<div class="col-sm-10">
		<input type="text" name="id_admin" class="form-control" id="id_admin" placeholder="id_admin"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">nama_admin</label>
		<div class="col-sm-10">
		<input type="text" name="nama_admin" class="form-control" id="nama_admin" placeholder="nama_admin"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Username</label>
		<div class="col-sm-10">
		<input type="text" name="username" class="form-control" id="username" placeholder="username"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Password</label>
		<div class="col-sm-10">
		<input type="text" name="password" class="form-control" id="password" placeholder="password"><br>
	</div></div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div></div>
</div>
</div>
</div>
</form>
<?php $this->load->view('admin/footer');?>