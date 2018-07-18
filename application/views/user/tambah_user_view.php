<?php $this->load->view('user/header');?>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
<div class="container">
<div class="row">
	
<?php  echo form_open('user/Create');?>
	<legend> Tambah Data User</legend>

	<?php echo validation_errors(); ?>
	<form class="form-horisontal" role="form">
	<div class="form-group">
		<label class="control-label col-sm-2" for="id_user">ID User</label>
		<div class="col-sm-10">
		<input type="text" name="id_user" class="form-control" id="id_user" placeholder="id_user"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">nama_user</label>
		<div class="col-sm-10">
		<input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="nama_user"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Jenis Kelamin</label>
		<div class="col-sm-10">
		<input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin"><br></div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">email</label>
		<div class="col-sm-10">
		<input type="text" name="email" class="form-control" id="email" placeholder="email"><br>
	</div></div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="">Alamat</label>
		<div class="col-sm-10">
		<input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat"><br>
	</div></div>

	<div class="form-group">

 	<select name="level">  
 	<option value="">Silahkan Pilih</option>  
 	<option value="admin">Admin</option>  
 	<option value="user">User</option>  
 	</select>   
    </div>


	<div class="form-group">
		<label class="control-label col-sm-2" for="">No Telpon</label>
		<div class="col-sm-10">
		<input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="no_telp"><br>
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
<?php $this->load->view('user/footer');?>